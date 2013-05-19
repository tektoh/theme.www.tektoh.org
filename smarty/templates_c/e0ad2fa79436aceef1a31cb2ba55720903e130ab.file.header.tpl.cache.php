<?php /* Smarty version Smarty-3.1-DEV, created on 2013-04-29 07:24:06
         compiled from "/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/templates/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:349494324517b63c1b02db8-29671190%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0ad2fa79436aceef1a31cb2ba55720903e130ab' => 
    array (
      0 => '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/templates/header.tpl',
      1 => 1367220237,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '349494324517b63c1b02db8-29671190',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_517b63c1c31555_18038080',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_517b63c1c31555_18038080')) {function content_517b63c1c31555_18038080($_smarty_tpl) {?><?php if (!is_callable('smarty_function_language_attributes')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/wp_functions/function.language_attributes.php';
if (!is_callable('smarty_function_bloginfo')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/wp_functions/function.bloginfo.php';
if (!is_callable('smarty_function_wp_title')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/wp_functions/function.wp_title.php';
if (!is_callable('smarty_function_get_template_directory_uri')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/wp_functions/function.get_template_directory_uri.php';
if (!is_callable('smarty_function_wp_head')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/wp_functions/function.wp_head.php';
if (!is_callable('smarty_function_body_class')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/wp_functions/function.body_class.php';
if (!is_callable('smarty_modifier_esc_url')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/wp_functions/modifier.esc_url.php';
if (!is_callable('smarty_function_home_url')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/wp_functions/function.home_url.php';
if (!is_callable('smarty_function_get_bloginfo')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/wp_functions/function.get_bloginfo.php';
if (!is_callable('smarty_function_wp_nav_menu')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/wp_functions/function.wp_nav_menu.php';
if (!is_callable('smarty_function_header_images_carousel')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/plugins/function.header_images_carousel.php';
?><!DOCTYPE html>
<html <?php echo smarty_function_language_attributes(array(),$_smarty_tpl);?>
>
<head>
<meta charset="<?php echo smarty_function_bloginfo(array('show'=>'charset'),$_smarty_tpl);?>
" />
<meta name="viewport" content="width=device-width" />
<title><?php echo smarty_function_wp_title(array('sep'=>'|','seplocation'=>'right'),$_smarty_tpl);?>
</title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php echo smarty_function_bloginfo(array('show'=>'pingback_url'),$_smarty_tpl);?>
" />
<!--[if lt IE 9]>
<script src="<?php echo smarty_function_get_template_directory_uri(array(),$_smarty_tpl);?>
/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php echo smarty_function_wp_head(array(),$_smarty_tpl);?>

</head>
<body <?php echo smarty_function_body_class(array(),$_smarty_tpl);?>
>
<div id="page" class="hfeed site">
  <header id="masthead" class="site-header" role="banner">
    <div class="navbar navbar-static-top navbar-inverse">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="<?php echo smarty_function_home_url(array('path'=>smarty_modifier_esc_url('/')),$_smarty_tpl);?>
" title="<?php echo smarty_function_get_bloginfo(array('show'=>'name','filter'=>'display'),$_smarty_tpl);?>
" rel="home">
            <?php echo smarty_function_bloginfo(array('show'=>'name'),$_smarty_tpl);?>

          </a>
          <div class="nav-collapse collapse">
            <?php echo smarty_function_wp_nav_menu(array('menu_class'=>'nav'),$_smarty_tpl);?>

            <form role="search" class="navbar-search pull-right">
              <input type="text" name="s" class="search-query" placeholder="Search">
            </form>
          </div>
        </div>
      </div>
    </div>
    <?php if (is_home()){?>
      <div class="container">
        <div class="page-header">
          <h1><?php echo smarty_function_get_bloginfo(array('show'=>'name','filter'=>'display'),$_smarty_tpl);?>
 <small><?php echo smarty_function_get_bloginfo(array('show'=>'description'),$_smarty_tpl);?>
</small></h1>
          <?php echo smarty_function_header_images_carousel(array('id'=>"headerCarousel"),$_smarty_tpl);?>

        </div>
      </div>
    <?php }?>
  </header>
  <div id="main" class="container">
<?php }} ?>