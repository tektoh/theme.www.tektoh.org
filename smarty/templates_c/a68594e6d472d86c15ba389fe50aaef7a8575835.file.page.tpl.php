<?php /* Smarty version Smarty-3.1-DEV, created on 2013-05-18 15:39:18
         compiled from "/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/templates/page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:145141100151979ebc1812b4-68825823%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a68594e6d472d86c15ba389fe50aaef7a8575835' => 
    array (
      0 => '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/templates/page.tpl',
      1 => 1368891549,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '145141100151979ebc1812b4-68825823',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_51979ebc2566a8_96276621',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51979ebc2566a8_96276621')) {function content_51979ebc2566a8_96276621($_smarty_tpl) {?><?php if (!is_callable('smarty_function_get_header')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/wp_functions/function.get_header.php';
if (!is_callable('smarty_function_start_the_loop')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/plugins/function.start_the_loop.php';
if (!is_callable('smarty_function_get_sidebar')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/wp_functions/function.get_sidebar.php';
if (!is_callable('smarty_function_get_footer')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/wp_functions/function.get_footer.php';
?><?php echo smarty_function_get_header(array(),$_smarty_tpl);?>

    <section id="site-content" class="row">
        <section id="content" class="span9" role="main">
            <?php echo smarty_function_start_the_loop(array('name'=>'page'),$_smarty_tpl);?>

        </section><!-- /#content -->
        <section id="sidebar" class="span3">
            <?php echo smarty_function_get_sidebar(array(),$_smarty_tpl);?>

        </section><!-- /#sidebar -->
    </section><!-- /#site-content -->
<?php echo smarty_function_get_footer(array(),$_smarty_tpl);?>
<?php }} ?>