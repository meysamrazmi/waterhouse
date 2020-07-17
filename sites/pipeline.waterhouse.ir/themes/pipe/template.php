<?php
/**
 * Implements template_preprocess_html().
 */
function pipe_preprocess_html(&$variables) {

  //by meysam razmi to adding classes based on url alias
  $path = drupal_get_path_alias();
  $aliases = explode('/', $path);
  foreach($aliases as $alias) {
    $variables['classes_array'][] = 'page-' . drupal_clean_css_identifier($alias);
  }

  //by Marjan Ashofteh -- adding classes based on taxonomy term
  global $user;
  if(arg(0) == 'node' && is_numeric(arg(1))){
    if(in_array( "news" , $aliases )){
      $node = node_load(arg(1));
        if($node->field_news_taxonomy['und'][0]['tid'] == 12){
        $variables['classes_array'][] = 'newsevent';
      }
    }
  }

  //by meysam razmi to adding classes based on logged in user
  global $user;
  if(isset($user)){
    $variables['classes_array'][] = 'uid-'. drupal_clean_css_identifier($user->uid);
  }else{
    $variables['classes_array'][] = 'uid-0';
  }
  $roles = explode('/', implode($user->roles));
  foreach($user->roles as $role) {
    $variables['classes_array'][] = 'role-'. drupal_clean_css_identifier($role);
  }

  
}
    

