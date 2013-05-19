<?php /* Smarty version Smarty-3.1-DEV, created on 2013-05-18 08:45:19
         compiled from "/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/templates/comments.tpl" */ ?>
<?php /*%%SmartyHeaderCode:866812495518f97a3276f50-25894969%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8c57cce684f0239f87c605c4d7e0158309754db' => 
    array (
      0 => '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/templates/comments.tpl',
      1 => 1368866581,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '866812495518f97a3276f50-25894969',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_518f97a3354ad1_53455857',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_518f97a3354ad1_53455857')) {function content_518f97a3354ad1_53455857($_smarty_tpl) {?><?php if (!is_callable('smarty_function_get_the_title')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/wp_functions/function.get_the_title.php';
if (!is_callable('smarty_function_get_comments_number')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/wp_functions/function.get_comments_number.php';
if (!is_callable('smarty_function_wp_list_comments')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/wp_functions/function.wp_list_comments.php';
if (!is_callable('smarty_function_comment_form')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/wp_functions/function.comment_form.php';
?><div id="comments" class="comments-area">
	<?php if (have_comments()){?>
        <h2 class="comments-title">
        「<span><?php echo smarty_function_get_the_title(array(),$_smarty_tpl);?>
</span>」への<?php echo smarty_function_get_comments_number(array(),$_smarty_tpl);?>
件のフィードバック
        </h2>
        <?php echo smarty_function_wp_list_comments(array('style'=>"div",'callback'=>"theme_list_comments",'end_callback'=>"theme_list_comments_end_el"),$_smarty_tpl);?>

    	<?php if (get_comment_pages_count()>1&&get_option('page_comments')){?>
        	<nav id="comment-nav-below" class="navigation" role="navigation">
        	    <h1 class="assistive-text section-heading"><<?php ?>?php _e( 'Comment navigation', 'twentytwelve' ); ?<?php ?>></h1>
        	  	<div class="nav-previous"><<?php ?>?php previous_comments_link( __( '&larr; Older Comments', 'twentytwelve' ) ); ?<?php ?>></div>
        	  	<div class="nav-next"><<?php ?>?php next_comments_link( __( 'Newer Comments &rarr;', 'twentytwelve' ) ); ?<?php ?>></div>
        	</nav>
    	<?php }?>
    	<?php if (!comments_open()&&get_comments_number()){?>
    	    <p class="nocomments">コメントをキャンセル</p>
    	<?php }?>

        <div class="form-horizontal">
            <?php echo smarty_function_comment_form(array(),$_smarty_tpl);?>

        </div>
    <?php }?>

</div><!-- #comments .comments-area -->
<?php }} ?>