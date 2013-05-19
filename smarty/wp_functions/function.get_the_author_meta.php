<?php
/**
 * http://codex.wordpress.org/Function_Reference/get_the_author_meta
 */
function smarty_function_get_the_author_meta($params, $template)
{
    extract(array_merge(array(
        'field' => '',
        'userID' => false
    ), $params));
	return get_the_author_meta($field, $userID);
}
