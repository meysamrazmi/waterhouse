<?php
/**
 * Implements template_preprocess_html().
 */
function waterhouse_preprocess_html(&$variables) {

  //by meysam razmi to adding classes based on url alias
  $path = drupal_get_path_alias();
  $aliases = explode('/', $path);
  foreach($aliases as $alias) {
    $variables['classes_array'][] = 'page-' . drupal_clean_css_identifier($alias);
  }
  
  //this section is for registering in pipeline conference
  if(isset($aliases[1]) && $aliases[0] == 'content' && $aliases[1] == '717'){
	global $user;
	$order_ids = db_select('uc_orders', 'o')
					->fields('o', array('order_id'))
					->condition('uid', $user->uid)
					->condition('order_status', array('completed' , 'pending'), 'IN')
					->execute()
					->fetchAll();
					
	if(count($order_ids) > 0){			
		$product_attributes = array();
		foreach($order_ids as $order_id){
			$order = uc_order_load($order_id->order_id);
			
			foreach($order->products as $product){
				if($product->nid == '712'){
					foreach(reset($product->data['attributes']) as $attr)
					array_push($product_attributes, $attr);
				}
			}
		}
		if(count($product_attributes > 0)){
			drupal_add_js(array('product_attributes' => $product_attributes), 'setting');
		}
	}
  }
  
  if(isset($aliases[1]) && $aliases[1] == 'pavilion'){
	global $user;	  
	$q = db_select('uc_order_products', 'op');
	$q->join('uc_orders', 'o', 'op.order_id = o.order_id');
	$q->fields('op', array('data'))
		->condition('op.model', 'vitual')
		->condition('o.order_status', 'completed');
	$orders =	$q->execute()->fetchAll();
	
	$result = array();
	foreach($orders as $row){
		$temp = unserialize($row->data);
		$temp = reset($temp['attributes']);
		foreach($temp as $key => $value ){
			$result[$key] = true;
		}	
	}
	// print_r(array_keys($result));
	drupal_add_js(array('bought_attribute' => array_keys($result)), 'setting');

  }
  

  //by Marjan Ashofteh -- adding classes based on taxonomy term
  if(arg(0) == 'node' && is_numeric(arg(1))){
    if(in_array( "news" , $aliases )){
      $node = node_load(arg(1));
        if($node->field_news_taxonomy['und'][0]['tid'] == 12){
        $variables['classes_array'][] = 'newsevent';
      }
    }
  }

  
}
    

