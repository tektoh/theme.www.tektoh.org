<?php
/**
 * http://codex.wordpress.org/Function_Reference/post_class
 */
function smarty_function_post_class($params, $template)
{
    extract(array_merge(array(
        'class' => '',
        'post_id' => null
    ), $params));
    return post_class($class, $post_id);
}
