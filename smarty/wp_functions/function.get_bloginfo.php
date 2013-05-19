<?php

function smarty_function_get_bloginfo($params, $template)
{
	return bloginfo($params['show'], $params['filter']);
}
