<?php

// wp-includes/media.php: adjacent_image_link()

function mytheme_smarty_adjacent_image_link($prev = true, $size = 'thumbnail', $text = false) {
  $post = get_post();
  $attachments = array_values( get_children( array( 'post_parent' => $post->post_parent, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => 'ASC', 'orderby' => 'menu_order ID' ) ) );

  foreach ( $attachments as $k => $attachment )
    if ( $attachment->ID == $post->ID )
      break;

  $k = $prev ? $k - 1 : $k + 1;

  $output = $attachment_id = null;
  if ( isset( $attachments[ $k ] ) ) {
    $attachment_id = $attachments[ $k ]->ID;
    $output = wp_get_attachment_link( $attachment_id, $size, true, false, $text );
  }

  $adjacent = $prev ? 'previous' : 'next';
  return apply_filters( "{$adjacent}_image_link", $output, $attachment_id, $size, $text );
}

function mytheme_smarty_previous_image_link($size = 'thumbnail', $text = false) {
  return mytheme_smarty_adjacent_image_link(true, $size, $text);
}

function mytheme_smarty_next_image_link($size = 'thumbnail', $text = false) {
  return mytheme_smarty_adjacent_image_link(false, $size, $text);
}
