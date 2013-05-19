<?php /* Smarty version Smarty-3.1-DEV, created on 2013-05-03 02:42:25
         compiled from "/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/templates/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1300806505517e8524580104-96322763%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3736fab99bdfe08ea602356d6742174d323e4f0d' => 
    array (
      0 => '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/templates/content.tpl',
      1 => 1367548943,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1300806505517e8524580104-96322763',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_517e85246c0177_90670673',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_517e85246c0177_90670673')) {function content_517e85246c0177_90670673($_smarty_tpl) {?><?php if (!is_callable('smarty_function_the_ID')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/wp_functions/function.the_ID.php';
if (!is_callable('smarty_function_the_post_thumbnail')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/wp_functions/function.the_post_thumbnail.php';
if (!is_callable('smarty_function_the_title')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/wp_functions/function.the_title.php';
if (!is_callable('smarty_function_the_permalink')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/wp_functions/function.the_permalink.php';
if (!is_callable('smarty_function_the_excerpt')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/wp_functions/function.the_excerpt.php';
if (!is_callable('smarty_block_the_content')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/wp_functions/block.the_content.php';
if (!is_callable('smarty_function_wp_link_pages')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/wp_functions/function.wp_link_pages.php';
if (!is_callable('smarty_function_get_the_category_list')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/wp_functions/function.get_the_category_list.php';
if (!is_callable('smarty_function_get_the_tag_list')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/wp_functions/function.get_the_tag_list.php';
if (!is_callable('smarty_function_get_the_date')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/wp_functions/function.get_the_date.php';
if (!is_callable('smarty_function_edit_post_link')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/wp_functions/function.edit_post_link.php';
?><article id="post-<?php echo smarty_function_the_ID(array(),$_smarty_tpl);?>
" class="content-article">
  <header class="entry-header">
    <?php echo smarty_function_the_post_thumbnail(array(),$_smarty_tpl);?>

    <?php if (is_single()){?>
      <h1 class="entry-title"><?php echo smarty_function_the_title(array(),$_smarty_tpl);?>
</h1>
    <?php }else{ ?>
      <h1>
        <a href="<?php echo smarty_function_the_permalink(array(),$_smarty_tpl);?>
" title="<?php echo smarty_function_the_title(array(),$_smarty_tpl);?>
" rel="bookmark"><?php echo smarty_function_the_title(array(),$_smarty_tpl);?>
</a>
      </h1>
    <?php }?>
  </header>
  <?php if (is_search()){?>
    <div class="entry-summary"><?php echo smarty_function_the_excerpt(array(),$_smarty_tpl);?>
</div>
  <?php }else{ ?>
    <div class="entry-content">
      <?php $_smarty_tpl->smarty->_tag_stack[] = array('the_content', array()); $_block_repeat=true; echo smarty_block_the_content(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        続きを読む <span class="meta-nav">&rarr;</span>
      <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_the_content(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

      <?php echo smarty_function_wp_link_pages(array('before'=>'<div class="page-links">ページ:','after'=>'</div>'),$_smarty_tpl);?>

  <?php }?>
  <footer class="entry-meta">
    カテゴリー: <?php echo smarty_function_get_the_category_list(array('separator'=>', '),$_smarty_tpl);?>
 |
    タグ: <?php echo smarty_function_get_the_tag_list(array('sep'=>', '),$_smarty_tpl);?>
 |
    投稿日: <time class="entry-date" datetime="<?php echo smarty_function_get_the_date(array('d'=>'c'),$_smarty_tpl);?>
"><?php echo smarty_function_get_the_date(array(),$_smarty_tpl);?>
</time> |
    <?php echo smarty_function_edit_post_link(array('link'=>'編集','before'=>'<span class="edit-link">','after'=>'</span>'),$_smarty_tpl);?>

  </footer>
</article>
<?php }} ?>