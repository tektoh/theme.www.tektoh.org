<?php
/**
 * http://codex.wordpress.org/Function_Reference/get_the_date
 */
function smarty_function_get_the_date($params, $template)
{
    extract(array_merge(array(
        'd' => '',
    ), $params));
	return get_the_date($d);
}
