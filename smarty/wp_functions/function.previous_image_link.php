<?php

/*
 * http://codex.wordpress.org/Function_Reference/previous_image_link
 */

function smarty_function_previous_image_link($params, $template)
{
    extract(array_merge(array(
        'size' => 'thumbnail',
        'text ' => false,
    ), $params));
    
	return previous_image_link($size, $text);
}
