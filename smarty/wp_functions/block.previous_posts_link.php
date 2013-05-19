<?php

/*
 * http://codex.wordpress.org/Function_Reference/previous_posts_link
 */

function smarty_block_previous_posts_link($params, $content, $template, &$repeat)
{
	if (!$repeat) {
		if (!isset($content)) {
			$content = null;
		}
		return get_previous_posts_link($content);
	}
}
