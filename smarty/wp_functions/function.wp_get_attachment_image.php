<?php
/**
 * http://codex.wordpress.org/Function_Reference/wp_get_attachment_image
 */
function smarty_function_wp_get_attachment_image($params, $template)
{
    extract(array_merge(array(
        'size' => 'thumbnail',
        'icon' => false,
        'attr' => '',
    ), $params));
    
    return wp_get_attachment_image($attachment_id, $size, $icon, $attr);
}
