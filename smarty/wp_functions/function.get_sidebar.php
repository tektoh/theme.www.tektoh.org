<?php

/**
 * http://codex.wordpress.org/Function_Reference/get_sidebar
 */

function smarty_function_get_sidebar($params, $template)
{
	extract(array_merge(array(
    	'name' => null,
	), $params));
	return get_sidebar($name);
}
