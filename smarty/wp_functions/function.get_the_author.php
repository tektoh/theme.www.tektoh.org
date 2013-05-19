<?php
/**
 * http://codex.wordpress.org/Function_Reference/get_the_author
 */
function smarty_function_get_the_author($params, $template)
{
    extract(array_merge(array(
        'deprecated' => '',
    ), $params));
	return get_the_author($deprecated);
}
