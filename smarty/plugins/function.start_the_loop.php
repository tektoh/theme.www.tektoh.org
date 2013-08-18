<?php

function smarty_function_start_the_loop($params, $template)
{
  extract(array_merge(array(
    'slug' => 'content',
    'name' => null,
  ), $params));

  while (have_posts()) {
		the_post();

		if (empty($name)) {
			get_template_part($slug, get_post_format());
		} else {
			get_template_part($slug, $name);
		}
  }
	return $result;
}
