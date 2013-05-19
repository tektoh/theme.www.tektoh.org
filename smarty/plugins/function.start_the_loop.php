<?php

function smarty_function_start_the_loop($params, $template)
{
	extract(array_merge(array(
		'slug' => 'content',
		'name' => null,
        'separate_comments' => false,
	), $params));

	if (empty($name)) {
		$name = get_post_format();
	}

    while (have_posts()) {
		the_post();

		if (empty($name)) {
			get_template_part($slug, get_post_format());
		} else {
			get_template_part($slug, $name);
		}
        
        if (isset($params['separate_comments'])) {
            comments_template('', $separate_comments);
        }
	}
	return $result;
}
