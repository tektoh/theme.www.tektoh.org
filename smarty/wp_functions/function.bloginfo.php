<?php

function smarty_function_bloginfo($params, $template)
{
	return bloginfo($params['show']);
}
