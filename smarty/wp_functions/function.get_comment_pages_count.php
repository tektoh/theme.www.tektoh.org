<?php
/**
 * http://codex.wordpress.org/Function_Reference/get_comment_pages_count
 */
function smarty_function_get_comment_pages_count($params, $template)
{
    extract(array_merge(array(
      'comments' => null,
      'per_page' => null,
      'threaded' => null,
    ), $params));

    return get_comment_pages_count($comments, $per_page, $threaded);
}
