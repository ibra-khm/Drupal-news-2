# Entity Form Steps

Creating multistep entity forms can be a real pain. Don't fret! Setup multistep entity forms in seconds by creating
two or more form step field groups on an entity form mode. Each step contains its own configuration. See
`entity_form_steps.api.php` for documentation on the available multistep entity form hooks and alters.

## Dependencies

Depends on the [Field Group](https://www.drupal.org/project/field_group) module to provide pluggable system for
creation and management of form steps.

## Usage

1. Download and install the `drupal/entity_form_steps` module. Recommended install method is composer:
   ```
   composer require drupal/entity_form_steps
   ```
2. Go to the "Manage form display" tab of the desired entity type.
3. Click "Add field group" on the desired form mode. Select "Form step" in the dropdown.
4. Review the available configurations and create the group.
5. Use the drag-and-drop table rows to place fields into the form step field group.

## How does it work?

Uses the `#access` form element property to exclude fields, or other render-able elements, on specified steps. This
method of exclusion is unobtrusive to allow support across a wide assortment of entity form displays and fields. It
even behaves with complex entity reference fields such as paragraphs!
