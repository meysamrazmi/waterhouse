<?php

/**
 * @file field.tpl.php
 * Default template implementation to display the value of a field.
 *
 * This file is not used by Drupal core, which uses theme functions instead for
 * performance reasons. The markup is the same, though, so if you want to use
 * template files rather than functions to extend field theming, copy this to
 * your custom theme. See theme_field() for a discussion of performance.
 *
 * Available variables:
 * - $items: An array of field values. Use render() to output them.
 * - $label: The item label.
 * - $label_hidden: Whether the label display is set to 'hidden'.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - field: The current template type, i.e., "theming hook".
 *   - field-name-[field_name]: The current field name. For example, if the
 *     field name is "field_description" it would result in
 *     "field-name-field-description".
 *   - field-type-[field_type]: The current field type. For example, if the
 *     field type is "text" it would result in "field-type-text".
 *   - field-label-[label_display]: The current label position. For example, if
 *     the label position is "above" it would result in "field-label-above".
 *
 * Other variables:
 * - $element['#object']: The entity to which the field is attached.
 * - $element['#view_mode']: View mode, e.g. 'full', 'teaser'...
 * - $element['#field_name']: The field name.
 * - $element['#field_type']: The field type.
 * - $element['#field_language']: The field language.
 * - $element['#field_translatable']: Whether the field is translatable or not.
 * - $element['#label_display']: Position of label display, inline, above, or
 *   hidden.
 * - $field_name_css: The css-compatible field name.
 * - $field_type_css: The css-compatible field type.
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 *
 * @see template_preprocess_field()
 * @see theme_field()
 *
 * @ingroup themeable
 */
?>
<?php
$field = field_info_field('field_zarfiat_states');
?>
<div class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <?php if (!$label_hidden): ?>
    <div class="field-label"<?php print $title_attributes; ?>><?php print $label ?>:&nbsp;</div>
  <?php endif; ?>
  <div class="field-items"<?php print $content_attributes; ?>>
    <?php
    if (!empty($items[0]['#markup'])) {
      $printed = FALSE;
      $step = 1;
      foreach ($field['settings']['allowed_values'] as $key => $item){
        if ($items[0]['#markup'] == $key) {
          print '<div class="field-item current-state"><i class="mdi mdi-swap-vertical"></i>'. $item .'</div>';
          $printed = TRUE;
        }
        else if (!$printed) {
          print '<div class="field-item past-state"><i class="mdi mdi-checkbox-marked-outline"></i>'. $item .'</div>';
        }
        else {
          print '<div class="field-item remain-state"><i>'. $step .'</i>'. $item .'</div>';
        }
        $step++;
      }
    }
    ?>
  </div>
</div>
<style>
  .field-name-field-zarfiat-states {
    padding: 30px;
    margin: 25px -30px;
    background: #f9f9f9;
  }
  .field-name-field-zarfiat-states .field-label {
    margin-bottom: 15px;
    border-bottom: 2px solid #2196F3;
    display: inline-block;
    padding: 0px 0 5px;
    width: 50px;
    white-space: nowrap;
  }
  .field-name-field-zarfiat-states .field-items {
    display: flex;
    width: 100%;
    justify-content: space-between;
    align-items: center;
    position: relative;
  }
  .field-name-field-zarfiat-states .field-items:before {
    content: "";
    position: absolute;
    width: 100%;
    height: 1px;
    right: 0;
    top: 21px;
    background: #ddd;
  }
  .field-name-field-zarfiat-states .field-item {
    text-align: center;
    background: #fff;
    padding: 10px 10px 10px 15px;
    z-index: 1;
    border-radius: 50px;
  }
  .field-name-field-zarfiat-states .field-item.past-state {
    border: 1px solid #4CAF50;
  }
  .field-name-field-zarfiat-states .field-item.current-state {
    border: 1px solid #2196F3;
  }
  .field-name-field-zarfiat-states .field-item.remain-state i:not(.mdi) {
    font-family: 'fanum';
    font-style: normal;
    line-height: 30px;
  }
  .field-name-field-zarfiat-states .field-item i {
    font-size: 17px;
    vertical-align: middle;
    margin: -10px 0 -10px 5px;
    background: #d9ffda;
    width: 30px;
    display: inline-block;
    line-height: 29px;
    border-radius: 50%;
    height: 30px;
    color: #4CAF50;
  }
  .field-name-field-zarfiat-states .field-item.remain-state i {
    background: #f5f5f5;
    color: #aaa;
  }
  .field-name-field-zarfiat-states .field-item.current-state i {
    background: #E3F2FD;
    color: #2196F3;
  }
</style>
