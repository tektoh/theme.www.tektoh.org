<?php

/*
 * http://codex.wordpress.org/Function_Reference/edit_post_link
 */

function smarty_function_edit_post_link($params, $template)
{
  extract(array_merge(array(
    'link' => null,
    'before' => '',
    'after' => '',
    'id' => 0,
  ), $params));

  edit_post_link($link, $before, $after, $id);
}
