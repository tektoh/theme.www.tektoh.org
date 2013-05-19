<?php
/**
 * http://codex.wordpress.org/Function_Reference/comments_template
 */
function smarty_function_comments_template($params, $template)
{
    extract(array_merge(array(
        'file' => '/comments.php',
        'separate_comments' => false,
    ), $params));
    
    comments_template($file, $separate_comments);
}
