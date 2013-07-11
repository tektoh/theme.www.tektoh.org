<?php

function mytheme_smarty_pager($link, $content, $tag, $class) {
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
