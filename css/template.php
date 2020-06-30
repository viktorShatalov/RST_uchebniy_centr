<?php

function sibkluch_preprocess_page(&$variables, $hook) {
   //some other stuff
   $search_form = drupal_get_form('search_block_form');
   $search_box = drupal_render($search_form);
   $variables['search_box'] = $search_box;
if (isset($variables['node'])) {
    $variables['theme_hook_suggestions'][] = 'page__type__'. $variables['node']->type;
    $variables['theme_hook_suggestions'][] = "page__node__" . $variables['node']->nid;
  }
}
function sibkluch_preprocess_html(&$vars) {
  drupal_add_html_head(array(
    '#type' => 'html_tag',
    '#tag' => 'meta',
    '#attributes' => array(
      'name' => 'viewport',
      'content' => 'width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no',
    )
  ), 'meta_viewport');
}
?>
