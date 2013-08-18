<?php

require_once(WP_SMARTY_PATH.'/plugins/libs/mytheme_smarty_pager.php');

function smarty_block_mytheme_next_post_link($params, $content, $template, &$repeat)
{
	if (!$repeat) {
		extract(array_merge(array(
      'in_same_cat' => false,
      'excluded_categories' => '',
      'tag' => null,
      'class' => null
		), $params));

		if (empty($content)) {
			$content = '';
		}

    $post = get_adjacent_post($in_same_cat, $excluded_categories, false);

    if ($post) {
      $link = '<a href="'.get_permalink($post).'" title="'.$post->post_title.'">'.$content.'</a>';
    } else {
      $link = null;
    }

    return mytheme_smarty_pager($link, $content, $tag, $class);
	}
}
