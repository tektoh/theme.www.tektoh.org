<?php /* Smarty version Smarty-3.1-DEV, created on 2013-04-29 07:21:18
         compiled from "/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1368951803517b63c1a40b73-28684416%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e96b4e2582b1b55d8b487babf980e9e20e4e6535' => 
    array (
      0 => '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/templates/index.tpl',
      1 => 1367220063,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1368951803517b63c1a40b73-28684416',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_517b63c1aed069_80231027',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_517b63c1aed069_80231027')) {function content_517b63c1aed069_80231027($_smarty_tpl) {?><?php if (!is_callable('smarty_function_get_header')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/wp_functions/function.get_header.php';
if (!is_callable('smarty_function_start_the_loop')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/plugins/function.start_the_loop.php';
if (!is_callable('smarty_block_content_nav')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/plugins/block.content_nav.php';
if (!is_callable('smarty_block_next_posts_link')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/wp_functions/block.next_posts_link.php';
if (!is_callable('smarty_block_previous_posts_link')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/wp_functions/block.previous_posts_link.php';
if (!is_callable('smarty_function_admin_url')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/wp_functions/function.admin_url.php';
if (!is_callable('smarty_function_get_sidebar')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/wp_functions/function.get_sidebar.php';
if (!is_callable('smarty_function_get_footer')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/wp_functions/function.get_footer.php';
?><?php echo smarty_function_get_header(array(),$_smarty_tpl);?>

  <section id="site-contents" class="row">
    <section id="contents" class="span9" role="main">
      <?php if (have_posts()){?>
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
        <?php if (current_user_can('edit_posts')){?>
          <header class="entry-header">
            <h1 class="entry-title">No posts to display</h1>
          </header>
          <div class="entry-content">
            <p>
              Ready to publish your first post? <a href="<?php echo smarty_function_admin_url(array('path'=>'post-new.php'),$_smarty_tpl);?>
">Get started here</a>.
            </p>
          </div>
        <?php }else{ ?>
          <header class="entry-header">
            <h1 class="entry-title">Nothing Found</h1>
          </header>
          <div class="entry-content">
            <p>
              Apologies, but no results were found.
            </p>
          </div>
        <?php }?>
      <?php }?>
    </section><!-- /#contents -->
    <section id="sidebar" class="span3">
      <?php echo smarty_function_get_sidebar(array(),$_smarty_tpl);?>

    </section><!-- /#sidebar -->
  </section><!-- /#site-contents -->
<?php echo smarty_function_get_footer(array(),$_smarty_tpl);?>

<?php }} ?>