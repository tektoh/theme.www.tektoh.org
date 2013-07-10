<?php

/*
 * http://codex.wordpress.org/Function_Reference/next_posts_link
 */

function smarty_block_next_posts_link($params, $content, $template, &$repeat)
{
	if (!$repeat) {
		extract(array_merge(array(
			'max_pages' => 0,
      'tag' => null,
      'class' => null
		), $params));

		if (empty($content)) {
			$content = '';
		}

    $link = get_next_posts_link($content, $max_pages);

    if (!empty($tag)) {
      if (empty($link)) {
        if (empty($class)) {
          $class = '';
        }
        $class = $class . ' ' . 'disabled';
        $link = '<a href="#">' . $content . '</a>';
      }
      if (empty($class)) {
        $text = '<'.$tag.'>';
      } else {
        $text = '<'.$tag.' class="'.$class.'"'.'>';
      }
      $text = $text . $link . '</'.$tag.'>';
    } else {
      $text = $link;
    }

    return $text;
	}
}
