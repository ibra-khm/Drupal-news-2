<?php

namespace Drupal\entity_form_steps\Form;

use Drupal\Component\Utility\SortArray;
use Drupal\Component\Utility\UrlHelper;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Render\Markup;
use Drupal\Core\Url;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides method to enable steps using field groups in a form mode.
 */
class EntityFormSteps {

  /**
   * Get entity form steps.
   *
   * @param \Drupal\Core\Form\FormStateInterface $formState
   *   The form state.
   *
   * @return array
   *   Returns an array of ordered steps.
   */
  public static function getSteps(FormStateInterface $formState): array {
    /** @var \Drupal\Core\Entity\Display\EntityFormDisplayInterface $formDisplay */
    $formDisplay = $formState->getStorage()['form_display'];

    $steps = array_filter($formDisplay->getThirdPartySettings('field_group'), function ($step) {
      return $step['format_type'] === 'steps';
    });
    uasort($steps, [SortArray::class, 'sortByWeightElement']);

    if ($steps) {
      $entity = $formState->getFormObject()->getEntity();
      // Invoke hook_entity_form_steps_alter().
      \Drupal::moduleHandler()->invokeAll(
        "entity_form_steps_alter",
        [&$steps, $formState, $entity]
      );
      // Invoke hook_entity_ENTITY_TYPE_form_steps_alter().
      \Drupal::moduleHandler()->invokeAll(
        "entity_{$entity->getEntityTypeId()}_form_steps_alter",
        [&$steps, $formState, $entity]
      );
      // Invoke hook_entity_ENTITY_TYPE_form_BUNDLE_steps_alter().
      \Drupal::moduleHandler()->invokeAll(
        "entity_{$entity->getEntityTypeId()}_form_{$entity->bundle()}_steps_alter",
        [&$steps, $formState, $entity]
      );
    }

    return $steps;
  }

  /**
   * Alter entity form to initialize entity form steps.
   *
   * Steps are defined as field group formatters on the form mode. Create
   * the field group steps and use drag-n-drop to place fields.
   *
   * @see \Drupal\entity_form_steps\Plugin\field_group\FieldGroupFormatter\Step
   */
  public static function alterForm(array &$form, FormStateInterface $formState): void {
    /** @var \Drupal\Core\Entity\ContentEntityForm $formObject */
    $formObject = $formState->getFormObject();
    if (!in_array($formObject->getOperation(), ['default', 'edit'], TRUE)) {
      return;
    }
    $entity = $formObject->getEntity();

    // Track the original owner to be restored on save. Otherwise, translation
    // handlers might forget the original owner. See
    // NodeTranslationHandler::entityFormEntityBuild() for an example.
    if ($entity instanceof EntityOwnerInterface && !$formState->get('original_uid')) {
      $formState->set('original_uid', $entity->getOwnerId());
    }

    // If the property exists it can be assumed values are unsaved. This
    // does nothing on its own. One usage example is to warn users of
    // unsaved changes before navigating away from the form.
    if ($formState->has('entity_form_steps')) {
      $form['#attributes']['data-unsaved'] = TRUE;
    }

    // Tell form state about the entity form steps.
    if (!($state = $formState->get('entity_form_steps'))) {
      if (!($steps = static::getSteps($formState))) {
        return;
      }
      $step = key($steps);
      $state = [
        'steps' => $steps,
        'current_step' => $step,
        'start' => $step === array_key_first($steps),
        'complete' => $step === array_key_last($steps),
      ];
      $formState->set('entity_form_steps', $state);
    }
    if (!($step = $state['steps'][$state['current_step']] ?? [])) {
      return;
    }
    foreach (array_keys($state['steps']) as $stepName) {
      if ($stepName !== $state['current_step']) {
        // Hide inactive steps by setting access property. Must be set on
        // fields within the step to avoid false-positive validation errors
        // and prevent loss of values between steps.
        $form[$stepName]['#access'] = FALSE;
        if (isset($form['#fieldgroups'][$stepName])) {
          static::setAccess($stepName, $form);
        }
      }
      elseif (isset($form['#fieldgroups'][$stepName])) {
        // Limit validation errors to elements on the current step.
        if (!isset($form['actions']['submit']['#limit_validation_errors'])) {
          $form['actions']['submit']['#limit_validation_errors'] = [];
        }
        static::setValidation($form['#fieldgroups'][$stepName], $form);
      }
    }
    if ($title = Markup::create($step['format_settings'][$entity->isNew() ? 'add_label' : 'edit_label'])) {
      $form['#title'] = $title;
    }

    // Set form actions and callback handlers.
    if ($state['start'] && $step['format_settings']['cancel_button']) {
      $form['actions']['cancel_button'] = [
        '#type' => 'link',
        '#title' => $step['format_settings']['cancel_button'],
        '#attributes' => ['class' => ['button']],
        '#url' => static::getCancelUrl($state, $formState),
        '#cache' => [
          'contexts' => [
            'url.query_args:destination',
          ],
        ],
      ];
    }
    if (!$state['start'] && $step['format_settings']['previous_button']) {
      $form['actions']['previous_button'] = [
        '#type' => 'submit',
        '#value' => $step['format_settings']['previous_button'],
        '#name' => 'entity_form_steps_previous',
        '#submit' => [[static::class, 'submitForm']],
        '#limit_validation_errors' => $form['actions']['submit']['#limit_validation_errors'] ?? [],
      ];
    }
    if (!$state['complete'] && $step['format_settings']['next_button']) {
      $form['actions']['submit']['#value'] = $step['format_settings']['next_button'];
    }
    elseif ($step['format_settings']['submit_button'] && isset($form['actions']['submit'])) {
      $form['actions']['submit']['#value'] = $step['format_settings']['submit_button'];
    }
    if (isset($form['actions']['preview'])) {
      if ($step['format_settings']['preview_button']) {
        $form['actions']['preview']['#value'] = $step['format_settings']['preview_button'];
      }
      else {
        unset($form['actions']['preview']);
      }
    }
    if (isset($form['actions']['delete'])) {
      if ($step['format_settings']['delete_path']) {
        $url = \Drupal::token()->replace($step['format_settings']['delete_path'], [
          $entity->getEntityTypeId() => $entity,
        ]);
        if (UrlHelper::isValid($url, TRUE)) {
          $form['actions']['delete']['#url'] = Url::fromUri($url);
        }
        else {
          $form['actions']['delete']['#url'] = Url::fromUserInput($url);
        }
      }
      if ($step['format_settings']['delete_button']) {
        $form['actions']['delete']['#title'] = $step['format_settings']['delete_button'];
      }
      else {
        unset($form['actions']['delete']);
      }
    }

    // Invoke hook_entity_form_steps_complete_form_alter().
    \Drupal::moduleHandler()->invokeAll(
      "entity_form_steps_complete_form_alter",
      [&$form, $formState, $entity, $state]
    );
    // Invoke hook_entity_ENTITY_TYPE_form_steps_complete_form_alter().
    \Drupal::moduleHandler()->invokeAll(
      "entity_{$entity->getEntityTypeId()}_form_steps_complete_form_alter",
      [&$form, $formState, $entity, $state]
    );
    // Invoke hook_entity_ENTITY_TYPE_form_BUNDLE_steps_complete_form_alter().
    \Drupal::moduleHandler()->invokeAll(
      "entity_{$entity->getEntityTypeId()}_form_{$entity->bundle()}_steps_complete_form_alter",
      [&$form, $formState, $entity, $state]
    );

    $form['actions']['submit']['#submit'] = array_filter(
      $form['actions']['submit']['#submit'],
      function ($callback) use ($state) {
        // Disable the ::save callback. Disable the entity confirmation
        // callback if we're not on the last step.
        return $callback !== '::save' && ($callback === 'entity_confirmation_form_op_submit' && $state['complete']);
      }
    );
    array_unshift(
      $form['actions']['submit']['#submit'],
      [static::class, 'submitForm']
    );
  }

  /**
   * Set access on group elements.
   *
   * @param string $groupName
   *   The field group name.
   * @param array $form
   *   The form.
   */
  public static function setAccess(string $groupName, array &$form): void {
    if (isset($form['#fieldgroups'][$groupName])) {
      foreach ($form['#fieldgroups'][$groupName]->children as $element) {
        if (preg_match('/^group_/', $element) && isset($form['#fieldgroups'][$element])) {
          // Recursively set access on nested field groups.
          static::setAccess($element, $form);
        }
        $form[$element]['#access'] = FALSE;
      }
    }
  }

  /**
   * Set fields to validate for the current step.
   *
   * @param object $group
   *   The field group.
   * @param array $form
   *   The form.
   */
  public static function setValidation(object $group, array &$form): void {
    foreach ($group->children as $key) {
      if (isset($form[$key])) {
        $form['actions']['submit']['#limit_validation_errors'][] = [$key];
      }
      elseif (isset($form['#fieldgroups'][$key])) {
        static::setValidation($form['#fieldgroups'][$key], $form);
      }
    }
  }

  /**
   * Get cancel button URL.
   *
   * @param array $state
   *   The steps state.
   * @param \Drupal\Core\Form\FormStateInterface $formState
   *   The form state.
   *
   * @return \Drupal\Core\Url
   *   Returns a URL.
   */
  public static function getCancelUrl(array $state, FormStateInterface $formState): Url {
    $entity = $formState->getFormObject()->getEntity();
    $step = $state['steps'][$state['current_step']];

    // Redirect to specified route if configured.
    if ($step['format_settings']['cancel_path']) {
      $url = \Drupal::token()->replace($step['format_settings']['cancel_path'], [
        $entity->getEntityTypeId() => $entity,
      ]);
      if (UrlHelper::isValid($url, TRUE)) {
        return Url::fromUri($url);
      }
      return Url::fromUserInput($url);
    }
    // Redirect to the existing entity canonical route.
    elseif ($entity->id()) {
      return Url::fromRoute("entity.{$entity->getEntityTypeId()}.canonical", [
        $entity->getEntityTypeId() => $entity->id(),
      ]);
    }

    // Redirect to current user canonical route if new entity.
    return Url::fromRoute('entity.user.canonical', [
      'user' => \Drupal::currentUser()->id(),
    ]);
  }

  /**
   * Submit handler to rebuild or save entity.
   */
  public static function submitForm(array $form, FormStateInterface $formState): void {
    if (!($state = $formState->get('entity_form_steps'))) {
      return;
    }
    $formState->setRebuild();
    /** @var \Drupal\Core\Entity\EntityForm $formObject */
    $formObject = $formState->getFormObject();
    $entity = $formObject->buildEntity($form, $formState);
    $formObject->setEntity($entity);

    reset($state['steps']);
    foreach (array_keys($state['steps']) as $stepName) {
      if ($stepName !== $state['current_step']) {
        // Set internal array pointer to current step.
        next($state['steps']);
      }
      else {
        break;
      }
    }

    // Invoke hook_entity_form_steps_state_alter().
    \Drupal::moduleHandler()->alter(
      "entity_form_steps_state",
      $state,
      $formState,
      $entity
    );
    // Invoke hook_entity_ENTITY_TYPE_form_steps_state_alter().
    \Drupal::moduleHandler()->alter(
      "entity_{$entity->getEntityTypeId()}_form_steps_state",
      $state,
      $formState,
      $entity
    );
    // Invoke hook_entity_ENTITY_TYPE_form_BUNDLE_steps_state_alter().
    \Drupal::moduleHandler()->alter(
      "entity_{$entity->getEntityTypeId()}_form_{$entity->bundle()}_steps_state",
      $state,
      $formState,
      $entity
    );

    switch ($formState->getTriggeringElement()['#name']) {
      case 'entity_form_steps_previous':
        // Go to the previous step.
        prev($state['steps']);
        break;

      case 'op':
        if (!$state['complete']) {
          // Go to the next step.
          next($state['steps']);
        }
        else {
          $entity = $formObject->getEntity();

          // Restore original owner when the owner is not set.
          if ($entity instanceof EntityOwnerInterface && !$entity->getOwnerId()) {
            $entity->setOwnerId($formState->get('original_uid'));
          }

          // Build entity with the new values. Usually this is
          // handled by the EntityForm::actions() submit handlers. Those
          // are overridden with EntityFormSteps::submitForm() but only
          // when steps are detected in the current entity form mode.
          $formObject->save($form, $formState);
          $formState->setRebuild(FALSE);
        }
        break;
    }

    $state['current_step'] = key($state['steps']);
    $state['start'] = $state['current_step'] === array_key_first($state['steps']);
    $state['complete'] = $state['current_step'] === array_key_last($state['steps']);
    $formState->set('entity_form_steps', $state);
  }

}
