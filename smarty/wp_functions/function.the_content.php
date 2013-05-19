<?php
/**
 * http://codex.wordpress.org/Function_Reference/the_content
 */
function smarty_function_the_content($params, $template)
{
    extract(array_merge(array(
        'more_link_text' => null,
        'stripteaser' => false,
    ), $params));
    
    the_content($more_link_text);
}
