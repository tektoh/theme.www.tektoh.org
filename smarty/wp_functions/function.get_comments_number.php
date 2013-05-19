<?php
/**
 * http://codex.wordpress.org/Template_Tags/get_comments_number
 */
function smarty_function_get_comments_number($params, $template)
{
    extract(array_merge(array(
        'post_id' => 0,
    ), $params));
    return get_comments_number($post_id);
}
