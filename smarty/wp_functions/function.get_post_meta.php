<?php

/**
 * http://codex.wordpress.org/Function_Reference/get_post_meta
 */

function smarty_function_get_post_meta($params, $template)
{
	extract(array_merge(array(
        'key' => '',
        'single' => false,
	), $params));
    
    print_r($key);
    print_r(get_post_meta($post_id, $key, $single));

    return get_post_meta($post_id, $key, $single);
}
