<?php

/**
 * Renders a product kit component.
 *
 * @ingroup themeable
 */
function theme_uc_product_kit_products($variables)
{
  $product = $variables['product'];

  $node = node_load($product->nid);
  if (node_access('view', $node)) {
    $node_view = node_view($node, 'special_case');
    $node_view['add_to_cart']['#form']['actions']['submit']['#value'] = 'خرید';
    $title = render($node_view);
  } else {
    $title = check_plain($product->title);
  }

  return $title;
}
