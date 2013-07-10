<?php

/*
 * http://codex.wordpress.org/Function_Reference/previous_posts_link
 */

function smarty_block_previous_posts_link($params, $content, $template, &$repeat)
{
	if (!$repeat) {
    extract(array_merge(array(
      'tag' => null,
      'class' => null
    ), $params));

		if (!isset($content)) {
			$content = '';
		}

    $link = get_previous_posts_link($content);

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

