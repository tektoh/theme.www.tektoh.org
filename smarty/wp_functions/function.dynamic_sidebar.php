<?php

/**
 * http://codex.wordpress.org/Function_Reference/dynamic_sidebar
 */

function smarty_function_dynamic_sidebar($params, $template)
{
	extract(array_merge(array(
    	'index' => 1,
	), $params));
    return dynamic_sidebar($index) ? '' : '';
}
