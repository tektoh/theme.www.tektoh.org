<?php /* Smarty version Smarty-3.1-DEV, created on 2013-04-29 06:56:10
         compiled from "/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/templates/sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1837048829517e183c5140b7-04130784%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73ef61c8ae4877c29c8f2b27c70c332815333981' => 
    array (
      0 => '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/templates/sidebar.tpl',
      1 => 1367218550,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1837048829517e183c5140b7-04130784',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_517e183c593371_19186490',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_517e183c593371_19186490')) {function content_517e183c593371_19186490($_smarty_tpl) {?><?php if (!is_callable('smarty_function_dynamic_sidebar')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/wp_functions/function.dynamic_sidebar.php';
?><?php if (is_active_sidebar('sidebar-1')){?>
  <div id="secondary" class="widget-area" role="complementary">
    <?php echo smarty_function_dynamic_sidebar(array('index'=>'sidebar-1'),$_smarty_tpl);?>

  </div>
<?php }?>
<?php }} ?>