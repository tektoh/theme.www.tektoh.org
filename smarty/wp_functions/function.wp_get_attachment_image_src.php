<?php
/**
 * http://codex.wordpress.org/Function_Reference/wp_get_attachment_image_src
 */
function smarty_function_wp_get_attachment_image_src($params, $template)
{
    extract(array_merge(array(
        'size' => 'thumbnail',
        'icon' => false,
    ), $params));
    
    $result = wp_get_attachment_image_src($attachment_id, $size, $icon);
    if (is_array($result)) {
        return $result[0];
    }
    return '';
}
