<?php
/**
 * http://codex.wordpress.org/Function_Reference/comment_form
 */
function smarty_function_comment_form($params, $template)
{
    extract(array_merge(array(
      'args'  => array(),
      'post_id' => null
    ), $params));

    return comment_form($args, $post_id);
}
