<?php
/**
 * http://codex.wordpress.org/Function_Reference/get_the_title
 */
function smarty_function_get_the_title($params, $template)
{
    extract(array_merge(array(
        'post' => 0,
    ), $params));
    
    return get_the_title($post);
}
