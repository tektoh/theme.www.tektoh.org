<?php

/**
 * http://codex.wordpress.org/Function_Reference/single_cat_title
 */

function smarty_function_single_cat_title($params, $template)
{
	extract(array_merge(array(
    	'prefix' => '',
	), $params));
    return single_cat_title($prefix, false);
}
