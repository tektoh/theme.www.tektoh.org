<?php

/*
 * http://elearn.jp/wpman/function/get_bloginfo.html
 */

function smarty_function_bloginfo($params, $template)
{
    extract(array_merge(array(
        'show' => 'name',
        'filter' => 'raw',
    ), $params));

	return bloginfo($show, $filter);
}
