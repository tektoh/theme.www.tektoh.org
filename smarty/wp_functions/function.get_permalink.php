<?php

/**
 * http://codex.wordpress.org/Function_Reference/get_permalink
 */

function smarty_function_get_permalink($params, $template)
{
	extract(array_merge(array(
    	'id' => 0,
        'leavename' => false,
	), $params));

    return get_permalink($id, $leavename);
}
