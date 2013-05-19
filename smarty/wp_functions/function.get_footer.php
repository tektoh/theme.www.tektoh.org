<?php
/**
 * http://codex.wordpress.org/Function_Reference/get_footer
 */
function smarty_function_get_footer($params, $template)
{
	if (isset($params['name'])) {
		return get_footer($params['name']);
	}	else {
		return get_footer();
	}
}
