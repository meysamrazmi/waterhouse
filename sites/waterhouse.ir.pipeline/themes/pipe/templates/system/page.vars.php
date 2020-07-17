<?php
/**
 * @file
 * Stub file for "page" theme hook [pre]process functions.
 */

/**
 * Pre-processes variables for the "page" theme hook.
 *
 * See template for list of available variables.
 *
 * @see page.tpl.php
 *
 * @ingroup theme_preprocess
 */
function pipe_preprocess_page(&$variables) {

	// global $user;
	// if( $user->uid == 1 ){
	// 	foreach($variables['page']['content']['system_main']['nodes'] as $key => $val){
	// 		$variables['page']['content']['system_main']['nodes'][$key]['#view_mode'] = 'event';
	// 		foreach($variables['page']['content']['system_main']['nodes'][$key] as $key1 => $val1){
	// 			if(is_array($val1) && array_key_exists('#view_mode', $val1)){
	// 				$variables['page']['content']['system_main']['nodes'][$key][$key1]['#view_mode'] = 'event';
	// 			}
	// 		}
	// 	}
	// 	echo '<pre>';
	// 	print_r($variables['page']['content']['system_main']['nodes'][666]);
	// 	echo '</pre>';
	// 	die();
	// }


/*-------------------edit by marjan-----------------*/
	if( empty($variables['page']['sidebar_first']) && empty($variables['page']['sidebar_second']) ){
		$variables['container_class'] = 'container';
	}
	else {
		$variables['container_class'] = 'container-fluid';
	}
 	// $variables['navbar_classes'] .= ' container';
	$variables['navbar_classes_array'][] = 'container-fluid';
	
/*--------------------------------------------------*/
	
	// Add information about the number of sidebars.
	if (!empty($variables['page']['sidebar_first']) && !empty($variables['page']['sidebar_second'])) {
		$variables['content_column_class'] = ' class="col-sm-6"';
	  }
	  elseif (!empty($variables['page']['sidebar_first']) || !empty($variables['page']['sidebar_second'])) {
		$variables['content_column_class'] = ' class="col-md-9"';
	  }
	  else {
		$variables['content_column_class'] = ' class="col-sm-12"';
	  }

}
 