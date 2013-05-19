<?php

/*
 * http://codex.wordpress.org/Function_Reference/next_image_link
 */

function smarty_function_next_image_link($params, $template)
{
    extract(array_merge(array(
        'size' => 'thumbnail',
        'text ' => false,
    ), $params));
    
	return next_image_link($size, $text);
}
