<?php /* Smarty version Smarty-3.1-DEV, created on 2013-04-29 08:13:51
         compiled from "/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/templates/archive.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2082369795517e2bbf07c259-50017533%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e40b46e52cdbc84917ee4d971095335b0bed93e0' => 
    array (
      0 => '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/templates/archive.tpl',
      1 => 1367223171,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2082369795517e2bbf07c259-50017533',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_517e2bbf187b76_22765321',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_517e2bbf187b76_22765321')) {function content_517e2bbf187b76_22765321($_smarty_tpl) {?><?php if (!is_callable('smarty_function_get_header')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/wp_functions/function.get_header.php';
if (!is_callable('smarty_function_get_the_date')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/wp_functions/function.get_the_date.php';
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
        <header class="page-header archive-header">
          <h1 class="archive-title">
            <?php if (is_day()){?>
              日別アーカイブ: <?php echo smarty_function_get_the_date(array(),$_smarty_tpl);?>

            <?php }elseif(is_month()){?>
              月別アーカイブ: <?php echo smarty_function_get_the_date(array('d'=>'Y年F'),$_smarty_tpl);?>

            <?php }elseif(is_year()){?>
              年別アーカイブ: <?php echo smarty_function_get_the_date(array('d'=>'Y年'),$_smarty_tpl);?>

            <?php }else{ ?>
              アーカイブ
            <?php }?>
          </h1>
        </header>
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