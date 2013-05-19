<?php
/**
 * http://codex.wordpress.org/Function_Reference/get_avatar
 */
function smarty_function_get_avatar($params, $template)
{
    extract(array_merge(array(
        'id_or_email' => '',
        'size' => '96',
        'default' => '',
        'alt' => false,
    ), $params));
	return get_avatar($id_or_email, $size, $default, $alt);
}
