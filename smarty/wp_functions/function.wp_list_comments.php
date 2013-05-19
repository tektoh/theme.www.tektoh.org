<?php
/**
 * http://codex.wordpress.org/Function_Reference/wp_list_comments
 */
function smarty_function_wp_list_comments($params, $template)
{
    extract(array_merge(array(
      'walker'            => null,
      'max_depth'         => '',
      'style'             => 'ul',
      'callback'          => null,
      'end_callback'      => null,
      'type'              => 'all',
      'reply_text'        => 'Reply',
      'page'              => '',
      'per_page'          => '',
      'avatar_size'       => 32,
      'reverse_top_level' => null,
      'reverse_children'  => '',
      'comments'          => null,
    ), $params));
    
    if (!empty($walker)) {
        $walker = new $walker;
    }

    $args = compact(
      'walker',
      'max_depth',
      'style',
      'callback',
      'type',
      'reply_text',
      'page',
      'per_page',
      'avatar_size',
      'reverse_top_level',
      'reverse_children'
    );
    
    if (isset($end_callback)) {
        $args = array_merge($args, array(
            'end-callback' => $end_callback
        ));
    }

    return wp_list_comments($args, $comments);
}
