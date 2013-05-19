<?php /* Smarty version Smarty-3.1-DEV, created on 2013-04-29 10:04:01
         compiled from "/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/templates/author.tpl" */ ?>
<?php /*%%SmartyHeaderCode:653172197517e3bbed69a31-57206089%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9b465ec22f1e31947f2e5d5de49d54c74f430b5' => 
    array (
      0 => '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/templates/author.tpl',
      1 => 1367229768,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '653172197517e3bbed69a31-57206089',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_517e3bbee979f7_32650979',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_517e3bbee979f7_32650979')) {function content_517e3bbee979f7_32650979($_smarty_tpl) {?><?php if (!is_callable('smarty_function_get_header')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/wp_functions/function.get_header.php';
if (!is_callable('smarty_function_the_post')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/wp_functions/function.the_post.php';
if (!is_callable('smarty_function_get_the_author')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/wp_functions/function.get_the_author.php';
if (!is_callable('smarty_function_rewind_posts')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/wp_functions/function.rewind_posts.php';
if (!is_callable('smarty_function_get_avatar')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/wp_functions/function.get_avatar.php';
if (!is_callable('smarty_function_get_the_author_meta')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/wp_functions/function.get_the_author_meta.php';
if (!is_callable('smarty_function_start_the_loop')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/plugins/function.start_the_loop.php';
if (!is_callable('smarty_block_content_nav')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/plugins/block.content_nav.php';
if (!is_callable('smarty_block_next_posts_link')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/wp_functions/block.next_posts_link.php';
if (!is_callable('smarty_block_previous_posts_link')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/wp_functions/block.previous_posts_link.php';
if (!is_callable('smarty_function_get_template_part')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/wp_functions/function.get_template_part.php';
if (!is_callable('smarty_function_get_sidebar')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/wp_functions/function.get_sidebar.php';
if (!is_callable('smarty_function_get_footer')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/wp_functions/function.get_footer.php';
?><?php echo smarty_function_get_header(array(),$_smarty_tpl);?>

  <section id="site-contents" class="row">
    <section id="contents" class="span9" role="main">
      <?php if (have_posts()){?>
        <?php echo smarty_function_the_post(array(),$_smarty_tpl);?>

        <header class="page-header archive-header">
          <h1 class="archive-title">
            作成者別アーカイブ: <?php echo smarty_function_get_the_author(array(),$_smarty_tpl);?>

          </h1>
        </header>
        <?php echo smarty_function_rewind_posts(array(),$_smarty_tpl);?>

        <?php if (get_the_author_meta('description')){?>
          <div class="media author-info">
            <a class="pull-left author-avatar" href="#">
              <?php echo smarty_function_get_avatar(array('id_or_email'=>get_the_author_meta('user_email'),'size'=>'64'),$_smarty_tpl);?>

            </a>
            <div class="media-body author-description">
              <h4><?php echo smarty_function_get_the_author(array(),$_smarty_tpl);?>
</h4>
              <p><?php echo smarty_function_get_the_author_meta(array('field'=>'description'),$_smarty_tpl);?>
</p>
            </div>
          </div>
        <?php }?>
        <?php echo smarty_function_start_the_loop(array('slug'=>"content"),$_smarty_tpl);?>

		<?php $_smarty_tpl->smarty->_tag_stack[] = array('content_nav', array()); $_block_repeat=true; echo smarty_block_content_nav(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

          <nav id="content-nav" class="navigation" role="navigation">
            <ul class="pager">
              <li class="previous"><?php $_smarty_tpl->smarty->_tag_stack[] = array('next_posts_link', array()); $_block_repeat=true; echo smarty_block_next_posts_link(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
&larr; Older<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_next_posts_link(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</li>
              <li class="next"><?php $_smarty_tpl->smarty->_tag_stack[] = array('previous_posts_link', array()); $_block_repeat=true; echo smarty_block_previous_posts_link(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Newer &rarr;<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_previous_posts_link(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</li>
            </ul>
          </nav>
        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_content_nav(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

      <?php }else{ ?>
        <?php echo smarty_function_get_template_part(array('slug'=>'content','name'=>'none'),$_smarty_tpl);?>

      <?php }?>
    </section><!-- /#contents -->
    <section id="sidebar" class="span3">
      <?php echo smarty_function_get_sidebar(array(),$_smarty_tpl);?>

    </section><!-- /#sidebar -->
  </section><!-- /#site-contents -->
<?php echo smarty_function_get_footer(array(),$_smarty_tpl);?>

<?php }} ?>