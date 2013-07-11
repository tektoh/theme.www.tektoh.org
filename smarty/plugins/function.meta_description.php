<?php

function smarty_function_meta_description($params, $template)
{
  global $post;
  $custom_fields = get_post_custom();

  if (!empty($custom_fields['description'])) {
    $content = get_post_meta($post->ID, 'description', true);
    return '<meta name="description" content="'.$content.'" />';
  } else if(is_home())  {
    $content = get_bloginfo('description');
    return '<meta name="description" content="'.$content.'" />';
  } else {
    return '';
  }
}
