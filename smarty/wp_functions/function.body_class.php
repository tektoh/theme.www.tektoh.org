<?php

function smarty_function_body_class($params, $template)
{
	if (isset($params['class'])) {
		return body_class($params['class']);
	} else {
		return body_class();
	}
}
