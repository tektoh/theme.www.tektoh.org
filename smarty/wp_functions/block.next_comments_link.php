<?php

/*
 * http://codex.wordpress.org/Template_Tags/next_comments_link
 */

function smarty_block_next_comments_link($params, $content, $template, &$repeat)
{
	if (!$repeat) {
    return get_next_comments_link($content);
	}
}
