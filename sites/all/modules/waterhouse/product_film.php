<?php
if(!function_exists('product_film')) {
  function product_film($nid)
  {
    if (is_bought_product($nid)) {
      $node = node_load($nid);
      if(isset($node->field_video['und'][0])) {
        $uri = file_create_url($node->field_video['und'][0]['uri']);
        print '<a href="#" class="products-btn" data-uri="' . $uri . '">مشاهده</a>';
      }else{
        print '<a href="#" class="products-btn" style="background:#d9534f!important">فیلمی موجود نیست</a>';
      }
    }
  }

}
