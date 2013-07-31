<?php

/*
 * http://codex.wordpress.org/Template_Tags/previous_comments_link
 */

function smarty_block_previous_comments_link($params, $content, $template, &$repeat)
{
	if (!$repeat) {
    return get_previous_comments_link($content);
	}
}
