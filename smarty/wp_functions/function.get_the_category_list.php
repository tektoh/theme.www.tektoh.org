<?php

/*
 * http://codex.wordpress.org/Function_Reference/get_the_category_list
 */

function smarty_function_get_the_category_list($params, $template)
{
  extract(array_merge(array(
    'separator' => '',
    'parents' => '',
    'post_id' => false,
  ), $params));

  return get_the_category_list($separator, $parents, $post_id);
}
