<?php
/**
 * http://codex.wordpress.org/Function_Reference/tag_description
 */
function smarty_function_tag_description($params, $template)
{
    extract(array_merge(array(
        'tag_id' => 0,
    ), $params));
    return tag_description($tag_id);
}
