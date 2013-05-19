<?php

/*
 * http://codex.wordpress.org/Function_Reference/get_the_tag_list
 */

function smarty_function_get_the_tag_list($params, $template)
{
  extract(array_merge(array(
    'before' => '',
    'sep' => '',
    'after' => '',
  ), $params));

  return get_the_tag_list($before, $sep, $after);
}
