<?php

/**
 * http://codex.wordpress.org/Function_Reference/get_search_query
 */

function smarty_function_get_search_query($params, $template)
{
	extract(array_merge(array(
    	'escaped' => true,
	), $params));

    return get_search_query($escaped);
}
