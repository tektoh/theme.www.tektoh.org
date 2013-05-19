<?php /* Smarty version Smarty-3.1-DEV, created on 2013-05-19 07:25:29
         compiled from "/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/templates/search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:183807586951987e69bcf643-80932926%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7a2d94f09689dd4e5f339c43cc7d34f0a5d0875' => 
    array (
      0 => '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/templates/search.tpl',
      1 => 1368948319,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '183807586951987e69bcf643-80932926',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_51987e69caf696_20254046',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51987e69caf696_20254046')) {function content_51987e69caf696_20254046($_smarty_tpl) {?><?php if (!is_callable('smarty_function_get_header')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/wp_functions/function.get_header.php';
if (!is_callable('smarty_function_get_search_query')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/wp_functions/function.get_search_query.php';
if (!is_callable('smarty_block_content_nav')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/plugins/block.content_nav.php';
if (!is_callable('smarty_block_next_posts_link')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/wp_functions/block.next_posts_link.php';
if (!is_callable('smarty_block_previous_posts_link')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/wp_functions/block.previous_posts_link.php';
if (!is_callable('smarty_function_start_the_loop')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/plugins/function.start_the_loop.php';
if (!is_callable('smarty_function_get_sidebar')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/wp_functions/function.get_sidebar.php';
if (!is_callable('smarty_function_get_footer')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/wp_functions/function.get_footer.php';
?><?php echo smarty_function_get_header(array(),$_smarty_tpl);?>

    <section id="site-content" class="row">
        <section id="content" class="span9" role="main">
            <?php if (have_posts()){?>
                <header class="page-header">
                    <h1 class="page-title">
                        検索結果: <span><?php echo smarty_function_get_search_query(array(),$_smarty_tpl);?>
</span>
                    </h1>
                </header>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('content_nav', array()); $_block_repeat=true; echo smarty_block_content_nav(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <nav id="nav-above" class="navigation" role="navigation">
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

                <?php echo smarty_function_start_the_loop(array(),$_smarty_tpl);?>

                <?php $_smarty_tpl->smarty->_tag_stack[] = array('content_nav', array()); $_block_repeat=true; echo smarty_block_content_nav(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                    <nav id="nav-above" class="navigation" role="navigation">
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
                <article id="post-0" class="post no-results not-found">
                    <header class="entry-header">
                        <h1 class="entry-title">見つかりません</h1>
                    </header>
                    <div class="entry-content">
                        <p>ご指定の検索条件に合う投稿がありませんでした。他のキーワードでもう一度検索してみてください。</p>
                    </div>
                </article><!-- /#post-0 -->
            <?php }?>
        </section><!-- /#content -->
        <section id="sidebar" class="span3">
            <?php echo smarty_function_get_sidebar(array(),$_smarty_tpl);?>

        </section><!-- /#sidebar -->
    </section><!-- /#site-content -->
<?php echo smarty_function_get_footer(array(),$_smarty_tpl);?>
<?php }} ?>