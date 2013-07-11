<?php

function smarty_function_meta_keywords($params, $template)
{
  global $post;
  $custom_fields = get_post_custom();

  if (!empty($custom_fields['keywords'])) {
    $content = get_post_meta($post->ID, 'keywords', true);
    return '<meta name="keywords" content="'.$content.'" />';
  } else {
    return '';
  }
}
