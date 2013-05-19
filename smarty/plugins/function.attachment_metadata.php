<?php

function smarty_function_attachment_metadata($params, $template)
{
    static $metadata = null;
    
	extract(array_merge(array(
		'key' => null,
	), $params));
    
    if (is_null($metadata)) {
         $metadata = wp_get_attachment_metadata();
    }

	return $metadata[$key];
}
