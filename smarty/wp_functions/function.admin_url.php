<?php

/**
 * http://codex.wordpress.org/Function_Reference/admin_url
 */

function smarty_function_admin_url($params, $template)
{
	extract(array_merge(array(
    	'path' => '',
		'scheme' => 'admin'
	), $params));
	return admin_url($path, $scheme);
}
