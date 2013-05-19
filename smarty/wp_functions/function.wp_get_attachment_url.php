<?php
/**
 * http://codex.wordpress.org/Function_Reference/wp_get_attachment_url
 */
function smarty_function_wp_get_attachment_url($params, $template)
{
    extract(array_merge(array(
      'post_id' => 0,
    ), $params));
    
    return wp_get_attachment_url($post_id);
}
