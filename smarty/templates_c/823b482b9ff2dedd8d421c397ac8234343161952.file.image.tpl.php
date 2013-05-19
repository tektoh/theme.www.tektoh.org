<?php /* Smarty version Smarty-3.1-DEV, created on 2013-05-19 12:52:53
         compiled from "/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/templates/image.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1138864295198953ac442c8-36214684%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '823b482b9ff2dedd8d421c397ac8234343161952' => 
    array (
      0 => '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/templates/image.tpl',
      1 => 1368967969,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1138864295198953ac442c8-36214684',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_5198953adbe168_45925073',
  'variables' => 
  array (
    'globals' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5198953adbe168_45925073')) {function content_5198953adbe168_45925073($_smarty_tpl) {?><?php if (!is_callable('smarty_function_get_header')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/wp_functions/function.get_header.php';
if (!is_callable('smarty_function_the_post')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/wp_functions/function.the_post.php';
if (!is_callable('smarty_function_post_class')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/wp_functions/function.post_class.php';
if (!is_callable('smarty_function_wp_get_attachment_image_src')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/wp_functions/function.wp_get_attachment_image_src.php';
if (!is_callable('smarty_function_the_title')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/wp_functions/function.the_title.php';
if (!is_callable('smarty_function_the_excerpt')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/wp_functions/function.the_excerpt.php';
if (!is_callable('smarty_function_the_content')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/wp_functions/function.the_content.php';
if (!is_callable('smarty_function_wp_link_pages')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/wp_functions/function.wp_link_pages.php';
if (!is_callable('smarty_modifier_esc_attr')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/wp_functions/modifier.esc_attr.php';
if (!is_callable('smarty_function_get_the_date')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/wp_functions/function.get_the_date.php';
if (!is_callable('smarty_function_wp_get_attachment_url')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/wp_functions/function.wp_get_attachment_url.php';
if (!is_callable('smarty_modifier_esc_url')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/wp_functions/modifier.esc_url.php';
if (!is_callable('smarty_function_attachment_metadata')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/plugins/function.attachment_metadata.php';
if (!is_callable('smarty_function_get_permalink')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/wp_functions/function.get_permalink.php';
if (!is_callable('smarty_modifier_strip_tags')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/plugins/modifier.strip_tags.php';
if (!is_callable('smarty_function_get_the_title')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/wp_functions/function.get_the_title.php';
if (!is_callable('smarty_function_edit_post_link')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/wp_functions/function.edit_post_link.php';
if (!is_callable('smarty_function_previous_image_link')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/wp_functions/function.previous_image_link.php';
if (!is_callable('smarty_function_next_image_link')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/wp_functions/function.next_image_link.php';
if (!is_callable('smarty_function_comments_template')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/wp_functions/function.comments_template.php';
if (!is_callable('smarty_function_get_footer')) include '/var/www/org/tektoh/dev/wp1/wp-content/themes/mytheme/smarty/wp_functions/function.get_footer.php';
?><?php echo smarty_function_get_header(array(),$_smarty_tpl);?>

    <section id="site-content" class="row">
        <section id="content" class="span12" role="main">
            <?php if (have_posts()){?><?php echo smarty_function_the_post(array(),$_smarty_tpl);?>

                <article id="post-<?php echo the_ID();?>
" <?php echo smarty_function_post_class(array('class'=>'image-attachment'),$_smarty_tpl);?>
>
                    <div class="entry-content">
                        <div class="entry-attachment">
                            <div class="attachment">
                                <img class="attachment-image" src="<?php echo smarty_function_wp_get_attachment_image_src(array('attachment_id'=>$_smarty_tpl->tpl_vars['globals']->value['post']->ID,'size'=>'large'),$_smarty_tpl);?>
" alt="<?php echo smarty_function_the_title(array(),$_smarty_tpl);?>
">
                                <h1 class="attachment-image-title"><?php echo smarty_function_the_title(array(),$_smarty_tpl);?>
</h1>
                                <?php if (!empty($_smarty_tpl->tpl_vars['globals']->value['post']->post_excerpt)){?>
                                    <div class="entry-caption attachment-image-caption">
                                        <?php echo smarty_function_the_excerpt(array(),$_smarty_tpl);?>

                                    </div>
                                <?php }?>
                            </div><!-- /.attachment -->
                        </div><!-- /.entry-attachment -->
                        
                        <div class="entry-description attachment-image-description">
                            <?php echo smarty_function_the_content(array(),$_smarty_tpl);?>

                            <?php echo smarty_function_wp_link_pages(array('before'=>'<div class="page-links">ページ','after'=>'</div>'),$_smarty_tpl);?>

                        </div><!-- /.entry-description -->
                        
                        <div class="entry-meta attachment-image-meta">
                            <span class="meta-prep meta-prep-entry-date">公開日時:</span>
                            <span class="entry-date">
                                <time class="entry-date" datetime="<?php echo smarty_function_get_the_date(array('d'=>smarty_modifier_esc_attr('c')),$_smarty_tpl);?>
"><?php ob_start();?><?php echo smarty_function_get_the_date(array(),$_smarty_tpl);?>
<?php echo esc_html(ob_get_clean())?></time>
                            </span>
                            <a href="<?php ob_start();?><?php echo smarty_function_wp_get_attachment_url(array(),$_smarty_tpl);?>
<?php echo smarty_modifier_esc_url(ob_get_clean())?>" title="フルサイズ画像へのリンク">
                                <?php echo smarty_function_attachment_metadata(array('key'=>'width'),$_smarty_tpl);?>
&times;<?php echo smarty_function_attachment_metadata(array('key'=>'height'),$_smarty_tpl);?>

                            </a>
                            (<a href="<?php echo smarty_function_get_permalink(array('id'=>$_smarty_tpl->tpl_vars['globals']->value['post']->post_parent),$_smarty_tpl);?>
" title="<?php echo smarty_function_get_the_title(array('post'=>smarty_modifier_esc_attr(smarty_modifier_strip_tags($_smarty_tpl->tpl_vars['globals']->value['post']->post_parent))),$_smarty_tpl);?>
へ戻る" rel="gallery">
                                <?php echo smarty_function_get_the_title(array('post'=>$_smarty_tpl->tpl_vars['globals']->value['post']->post_parent),$_smarty_tpl);?>

                            </a>)
                            <?php echo smarty_function_edit_post_link(array('link'=>'編集','before'=>'<span class="edit-link">','after'=>'</span>'),$_smarty_tpl);?>

                        </div>
                        
                    </div><!-- /.entry-content -->
                    
                    <nav id="image-navigation" class="navigation" role="navigation">
                        <ul class="pager">
                            <li class="previous">
                                <span class="previous-image"><?php echo smarty_function_previous_image_link(array('size'=>false,'text'=>'&larr; 前へ'),$_smarty_tpl);?>
</span>
                            </li>
                            <li class="next">
                                <span class="next-image"><?php echo smarty_function_next_image_link(array('size'=>false,'text'=>'次へ &rarr;'),$_smarty_tpl);?>
</span>
                            </li>
                        </ul>
                    </nav>
                </article><!-- #post -->
                <?php echo smarty_function_comments_template(array(),$_smarty_tpl);?>

            <?php }?>
        </section><!-- /#content -->
    </section><!-- /#site-content -->
<?php echo smarty_function_get_footer(array(),$_smarty_tpl);?>
<?php }} ?>