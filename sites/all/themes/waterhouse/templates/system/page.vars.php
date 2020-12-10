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
function waterhouse_preprocess_page(&$variables) {

	if (isset($variables['node']->type)) {
		$variables['theme_hook_suggestions'][] = 'page__type__' . $variables['node']->type;
	}

  $path = drupal_get_path_alias();
  $aliases = explode('/', $path);

//  if (!empty($aliases[0])) {
//    $variables['theme_hook_suggestions'][] = 'page__' . $aliases[0];
//  }
//  if (!empty($aliases[1])) {
//    $variables['theme_hook_suggestions'][] = 'page__' . $aliases[0] . '__' . $aliases[1];
//  }
//  if (!empty($aliases[2])) {
//    $variables['theme_hook_suggestions'][] = 'page__' . $aliases[0] . '__' . $aliases[1] . '__' . $aliases[2];
//  }
//  if (!empty($aliases[3])) {
//    $variables['theme_hook_suggestions'][] = 'page__' . $aliases[0] . '__' . $aliases[1] . '__' . $aliases[2] . '__' . $aliases[3];
//  }

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
