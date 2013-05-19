<?php
/**
 * http://codex.wordpress.org/Function_Reference/single_tag_title
 */
function smarty_function_single_tag_title($params, $template)
{
    extract(array_merge(array(
        'prefix' => '',
    ), $params));
    return single_tag_title($prefix, false);
}
