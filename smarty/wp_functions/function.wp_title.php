<?php

function smarty_function_wp_title($params, $template)
{
	if (isset($params['sep'])) {
		$sep = $params['sep'];
	} else {
		$sep = '';
	}
	if (isset($params['seplocation'])) {
		$seplocation = $params['seplocation'];
	} else {
		$seplocation = '';
	}
	return wp_title($sep, false, $seplocation);
}
