<?php
/**
 * http://codex.wordpress.org/Function_Reference/get_header
 */
function smarty_function_get_header($params, $template)
{
	if (isset($params['name'])) {
		return get_header($params['name']);
	}	else {
		return get_header();
	}
}
