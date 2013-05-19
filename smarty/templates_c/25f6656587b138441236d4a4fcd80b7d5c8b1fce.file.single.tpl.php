<?php /* Smarty version Smarty-3.1-DEV, created on 2013-05-18 15:55:27
         compiled from "/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/templates/single.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14450540695197a441deaa54-02673325%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25f6656587b138441236d4a4fcd80b7d5c8b1fce' => 
    array (
      0 => '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/templates/single.tpl',
      1 => 1368892524,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14450540695197a441deaa54-02673325',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_5197a441e71c45_22903382',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5197a441e71c45_22903382')) {function content_5197a441e71c45_22903382($_smarty_tpl) {?><?php if (!is_callable('smarty_function_get_header')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/wp_functions/function.get_header.php';
if (!is_callable('smarty_function_start_the_loop')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/plugins/function.start_the_loop.php';
if (!is_callable('smarty_function_get_sidebar')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/wp_functions/function.get_sidebar.php';
if (!is_callable('smarty_function_get_footer')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/wp_functions/function.get_footer.php';
?><?php echo smarty_function_get_header(array(),$_smarty_tpl);?>

    <section id="site-content" class="row">
        <section id="content" class="span9" role="main">
            <?php echo smarty_function_start_the_loop(array('separate_comments'=>true),$_smarty_tpl);?>

        </section><!-- /#content -->
        <section id="sidebar" class="span3">
            <?php echo smarty_function_get_sidebar(array(),$_smarty_tpl);?>

        </section><!-- /#sidebar -->
    </section><!-- /#site-content -->
<?php echo smarty_function_get_footer(array(),$_smarty_tpl);?>
<?php }} ?>