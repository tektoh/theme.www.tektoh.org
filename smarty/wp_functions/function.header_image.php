<?php

function smarty_function_header_image($params, $template)
{
	$header_image = get_header_image();
	if (!empty($header_image)) {
		return
			'<a href="'.esc_url(home_url('/')).'">'.
				'<img src="'.esc_url($header_image).'" class="header-image" '.
					'width="'.get_custom_header()->width.'" '.
					'height="'.get_custom_header()->height.'" alt="" />'.
			'</a>';
	} else {
		return '';
	}
}
