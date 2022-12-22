<?php

/**
 * @file
 * Hooks provided by the Entity Form Steps module.
 */

use Drupal\Core\Entity\FieldableEntityInterface;
use Drupal\Core\Form\FormStateInterface;

/**
 * @addtogroup hooks
 * @{
 */

/**
 * Alter entity form steps.
 *
 * @param array $steps
 *   The steps.
 * @param \Drupal\Core\Form\FormStateInterface $formState
 *   The form state.
 */
function hook_entity_form_steps_alter(array &$steps, FormStateInterface $formState, FieldableEntityInterface $entity): void {
  // Add dynamic confirmation step.
  $steps['confirm'] = current($steps);
  $steps['confirm']['format_settings']['add_label'] =
  $steps['confirm']['format_settings']['edit_label'] = t('Confirmation');
}

/**
 * Alter entity form steps.
 *
 * @see hook_entity_form_steps_alter()
 */
function hook_entity_ENTITY_TYPE_form_steps_alter(array &$steps, FormStateInterface $formState, FieldableEntityInterface $entity): void {

}

/**
 * Alter entity form steps.
 *
 * @see hook_entity_form_steps_alter()
 */
function hook_entity_ENTITY_TYPE_form_BUNDLE_steps_alter(array &$steps, FormStateInterface $formState, FieldableEntityInterface $entity): void {

}

/**
 * Alter entity form steps state.
 *
 * @param array $state
 *   The steps state.
 * @param \Drupal\Core\Form\FormStateInterface $formState
 *   The form state.
 */
function hook_entity_form_steps_state_alter(array &$state, FormStateInterface $formState, FieldableEntityInterface $entity): void {
  if (array_key_last(array_slice($state['steps'], 0, -1)) === $state['current_step']) {
    if ($formState->getValue('save_without_confirmation')) {
      // Skip dynamic confirmation step.
      $state['complete'] = TRUE;
    }
  }
}

/**
 * Alter entity form steps state.
 *
 * @see hook_entity_form_steps_state_alter()
 */
function hook_entity_ENTITY_TYPE_form_steps_state_alter(array &$state, FormStateInterface $formState, FieldableEntityInterface $entity): void {

}

/**
 * Alter entity form steps state.
 *
 * @see hook_entity_form_steps_state_alter()
 */
function hook_entity_ENTITY_TYPE_form_BUNDLE_steps_state_alter(array &$state, FormStateInterface $formState, FieldableEntityInterface $entity): void {

}

/**
 * Alter complete entity form.
 *
 * @param array $form
 *   The form.
 * @param \Drupal\Core\Form\FormStateInterface $formState
 *   The form state.
 * @param \Drupal\Core\Entity\FieldableEntityInterface $entity
 *   The entity.
 * @param array $state
 *   The steps state.
 */
function hook_entity_form_steps_complete_form_alter(array &$form, FormStateInterface $formState, FieldableEntityInterface $entity, array $state): void {
  if ($state['current_step'] === 'confirm') {
    $form['confirm_message'] = [
      '#markup' => t('Are you sure?'),
    ];
  }
}

/**
 * Alter complete entity form.
 *
 * @see hook_entity_form_steps_complete_form_alter()
 */
function hook_entity_ENTITY_TYPE_form_steps_complete_form_alter(array &$form, FormStateInterface $formState, FieldableEntityInterface $entity, array $state): void {

}

/**
 * Alter complete entity form.
 *
 * @see hook_entity_form_steps_complete_form_alter()
 */
function hook_entity_ENTITY_TYPE_form_BUNDLE_steps_complete_form_alter(array &$form, FormStateInterface $formState, FieldableEntityInterface $entity, array $state): void {

}

/**
 * @} End of "addtogroup hooks".
 */
