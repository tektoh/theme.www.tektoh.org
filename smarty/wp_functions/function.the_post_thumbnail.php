<?php
/**
 * http://codex.wordpress.org/Function_Reference/the_post_thumbnail
 */
function smarty_function_the_post_thumbnail($params, $template)
{
    extract(array_merge(array(
        'size' => 'post-thumbnail',
		'attr' => '',
    ), $params));
    return get_the_post_thumbnail(null, $size, $attr);
}
