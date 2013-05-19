<?php

function smarty_block_content_nav($params, $content, $template, &$repeat)
{
	if (!$repeat) {
		global $wp_query;
		if (isset($content) && $wp_query->max_num_pages > 1) {
			return $content;
		}
	}
}
