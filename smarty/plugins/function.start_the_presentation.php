<?php

function smarty_function_start_the_presentation($params, $template)
{
  global $post, $smarty;

  $posts = get_posts(array(
    'post_parent' => $post->ID,
    'post_type' => 'presentations',
    'posts_per_page' => -1,
    'order' => 'ASC',
  ));

  $i = 0;
  foreach ($posts as $p) {
    $i++;
    $smarty->assign('post', $p);
    $smarty->assign('articleIndex', $i);
    echo $smarty->fetch('content-presentations.tpl');
  }

	return null;
}
