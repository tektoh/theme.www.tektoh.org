<?php

function smarty_function_header_images_carousel($params, $template)
{
	extract(array_merge(array(
		'id' => 'myCarousel',
		'class' => null,
	), $params));

	$headers = get_uploaded_header_images();
	$result = '';

	if (!empty($headers)) {
		shuffle($headers);
		$result .=
			'<div id="'.$id.'" class="carousel slide'.($class ? '' : (' '.$class)).'">'.
				'<ol class="carousel-indicators">';
		foreach ($headers as $i => $head) {
			$result .= '<li data-target="#'.$id.'" data-slide-to="'.$i.'" '.($i==0 ? 'class="active"' : '').'></li>';
		}
		$result .=
				'</ol>'.
				'<div class="carousel-inner">';
		foreach ($headers as $i => $head) {
			$result .=
					'<div class="item'.($i==0 ? ' active' : '').'">'.
						'<img src="'.$head['url'].'" alt="">'.
					'</div>';
		}
		$result .=
				'</div>'.
			'</div>';
			//'<a class="left carousel-control" href="#'.$id.'" data-slide="prev">&lsaquo;</a>'.
			//'<a class="right carousel-control" href="#'.$id.'" data-slide="next">&rsaquo;</a>';
	}
	return $result;
}
