<?php

/*
 * http://codex.wordpress.org/Function_Reference/the_content
 */

function smarty_block_the_content($params, $content, $template, &$repeat)
{
	if (!$repeat) {
		extract(array_merge(array(
			'stripteaser' => false,
		), $params));

		if (empty($content)) {
			$more_link_text = null;
		} else {
			$more_link_text = $content;
		}

		the_content($more_link_text, $stripteaser);
	}
}
