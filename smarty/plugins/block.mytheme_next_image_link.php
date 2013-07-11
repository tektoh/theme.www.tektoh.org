<?php

require_once(WP_SMARTY_PATH.'/libs/mytheme_smarty_pager.php');
require_once(WP_SMARTY_PATH.'/libs/mytheme_smarty_adjacent_image_link.php');

function smarty_block_mytheme_next_image_link($params, $content, $template, &$repeat)
{
	if (!$repeat) {
		extract(array_merge(array(
      'size' => false,
      'tag' => null,
      'class' => null
		), $params));

		if (empty($content)) {
			$content = '';
		}

    return mytheme_smarty_pager(mytheme_smarty_next_image_link($size, $content), $content, $tag, $class);
	}
}
