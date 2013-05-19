<?php

/**
 * http://codex.wordpress.org/Function_Reference/get_template_part
 */

function smarty_function_get_template_part($params, $template)
{
	extract(array_merge(array(
    	'slug' => 'content',
    	'name' => null,
	), $params));

    get_template_part($slug, $name);

    return '';
}
