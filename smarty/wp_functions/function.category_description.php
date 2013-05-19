<?php

/**
 * http://codex.wordpress.org/Function_Reference/category_description
 */

function smarty_function_category_description($params, $template)
{
	extract(array_merge(array(
    	'category_id' => 0,
	), $params));
    return category_description($category_id);
}
