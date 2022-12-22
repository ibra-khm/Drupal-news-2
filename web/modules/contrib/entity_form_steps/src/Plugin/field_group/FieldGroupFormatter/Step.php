<?php

namespace Drupal\entity_form_steps\Plugin\field_group\FieldGroupFormatter;

use Drupal\Component\Utility\UrlHelper;
use Drupal\Core\Form\FormStateInterface;
use Drupal\field_group\FieldGroupFormatterBase;

/**
 * Form step field group formatter.
 *
 * @FieldGroupFormatter(
 *   id = "steps",
 *   label = @Translation("Form step"),
 *   description = @Translation("Add a form step element."),
 *   supported_contexts = {
 *     "form",
 *   }
 * )
 */
class Step extends FieldGroupFormatterBase {

  /**
   * {@inheritdoc}
   */
  public function settingsForm(): array {
    $form = [];
    $form['label'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Step label'),
      '#description' => $this->t('Define a human-readable administrative label.'),
      '#default_value' => $this->label,
      '#required' => TRUE,
    ];
    $form['add_label'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Create title'),
      '#description' => $this->t('Form title when creating new entities. Leave blank to disable.'),
      '#default_value' => $this->getSetting('add_label'),
    ];
    $form['edit_label'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Edit title'),
      '#description' => $this->t('Form title when modifying existing entities. Leave blank to disable.'),
      '#default_value' => $this->getSetting('edit_label'),
    ];
    $form['cancel_button'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Cancel button label'),
      '#description' => $this->t('Add cancel button to form actions. Leave blank to disable.'),
      '#default_value' => $this->getSetting('cancel_button'),
    ];
    $form['cancel_path'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Cancel button URL'),
      '#description' => $this->t('Override the cancel button link URL. Defaults to the entity canonical route.'),
      '#element_validate' => [[static::class, 'validateUrl']],
      '#default_value' => $this->getSetting('cancel_path'),
      '#group' => 'routes',
      '#states' => [
        'visible' => [
          ':input[name$="[cancel_button]"]' => ['empty' => FALSE],
        ],
      ],
    ];
    $form['previous_button'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Previous step button label'),
      '#description' => $this->t('Add previous step button to form actions. Leave blank to disable.'),
      '#default_value' => $this->getSetting('previous_button'),
    ];
    $form['next_button'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Next step button label'),
      '#description' => $this->t('Change save button label when succeeding step exists.'),
      '#default_value' => $this->getSetting('next_button'),
    ];
    $form['submit_button'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Save button label'),
      '#description' => $this->t('Change the save button label.'),
      '#default_value' => $this->getSetting('submit_button'),
    ];
    $form['preview_button'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Preview button label'),
      '#description' => $this->t('Change the preview button label.'),
      '#default_value' => $this->getSetting('preview_button'),
    ];
    $form['delete_button'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Delete button label'),
      '#description' => $this->t('Change the delete button label.'),
      '#default_value' => $this->getSetting('delete_button'),
    ];
    $form['delete_path'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Delete button URL'),
      '#element_validate' => [[static::class, 'validateUrl']],
      '#description' => $this->t('Override the delete button link URL. Defaults to the entity delete route.'),
      '#default_value' => $this->getSetting('delete_path'),
      '#group' => 'routes',
    ];
    $form['token_help'] = [
      '#theme' => 'token_tree_link',
      '#token_types' => [$this->group->entity_type],
    ];
    return $form;
  }

  /**
   * Validate proper external or internal URL.
   */
  public static function validateUrl(array $element, FormStateInterface $form_state): void {
    if ($element['#value']) {
      if ($url = \Drupal::service('path.validator')->getUrlIfValid($element['#value'])) {
        $form_state->setValueForElement($element, $url->toString());
      }
      elseif (!UrlHelper::isValid($element['#value'], TRUE) && !preg_match('/^\//', $element['#value'])) {
        $form_state->setError($element, t('The URL must be begin with a forward slash or be external.'));
      }
      elseif (!UrlHelper::isValid($element['#value'])) {
        $form_state->setError($element, t('The URL does not exist or is invalid.'));
      }
    }
  }

}
