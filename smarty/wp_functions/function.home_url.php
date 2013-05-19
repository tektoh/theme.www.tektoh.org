<?php

function smarty_function_home_url($params, $template)
{
	if (!isset($params['path'])) {
		$params['path'] = '';
	}
	if (!isset($params['scheme'])) {
		$params['scheme'] = null;
	}
	return home_url($params['path'], $params['scheme']);
}
