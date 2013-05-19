<?php

/*
 * http://codex.wordpress.org/Function_Reference/the_title
 */

function smarty_function_the_title($params, $template)
{
    extract(array_merge(array(
        'before' => '',
        'after' => '',
    ), $params));
	return the_title($befoer, $after, false);
}
