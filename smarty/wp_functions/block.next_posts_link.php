<?php

/*
 * http://codex.wordpress.org/Function_Reference/next_posts_link
 */

function smarty_block_next_posts_link($params, $content, $template, &$repeat)
{
	if (!$repeat) {
		extract(array_merge(array(
			'max_pages' => 0,
		), $params));

		if (empty($content)) {
			$content = null;
		}

		return get_next_posts_link($content, $max_pages);
	}
}
