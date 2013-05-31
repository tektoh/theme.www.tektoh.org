<?php
/**
 * Twenty Twelve functions and definitions.
 *
 * Sets up the theme and provides some helper functions, which are used
 * in the theme as custom template tags. Others are attached to action and
 * filter hooks in WordPress to change core functionality.
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development and
 * http://codex.wordpress.org/Child_Themes), you can override certain functions
 * (those wrapped in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before the parent
 * theme's file, so the child theme functions would be used.
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are instead attached
 * to a filter or action hook.
 *
 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

/**
 * Adds support for a custom header image.
 */
require( get_template_directory() . '/inc/custom-header.php' );

/**
 * Makes our wp_nav_menu() fallback -- wp_page_menu() -- show a home link.
 *
 * @since Twenty Twelve 1.0
 */
function twentytwelve_page_menu_args( $args ) {
	if ( ! isset( $args['show_home'] ) )
		$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'twentytwelve_page_menu_args' );

/**
 * Registers our main widget area and the front page widget areas.
 *
 * @since Twenty Twelve 1.0
 */
function twentytwelve_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Main Sidebar', 'twentytwelve' ),
		'id' => 'sidebar-1',
		'description' => __( 'Appears on posts and pages except the optional Front Page template, which has its own widgets', 'twentytwelve' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'First Front Page Widget Area', 'twentytwelve' ),
		'id' => 'sidebar-2',
		'description' => __( 'Appears when using the optional Front Page template with a page set as Static Front Page', 'twentytwelve' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	register_sidebar( array(
		'name' => __( 'Second Front Page Widget Area', 'twentytwelve' ),
		'id' => 'sidebar-3',
		'description' => __( 'Appears when using the optional Front Page template with a page set as Static Front Page', 'twentytwelve' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}
add_action( 'widgets_init', 'twentytwelve_widgets_init' );

if ( ! function_exists( 'twentytwelve_entry_meta' ) ) :
/**
 * Prints HTML with meta information for current post: categories, tags, permalink, author, and date.
 *
 * Create your own twentytwelve_entry_meta() to override in a child theme.
 *
 * @since Twenty Twelve 1.0
 */
function twentytwelve_entry_meta() {
	// Translators: used between list items, there is a space after the comma.
	$categories_list = get_the_category_list( __( ', ', 'twentytwelve' ) );

	// Translators: used between list items, there is a space after the comma.
	$tag_list = get_the_tag_list( '', __( ', ', 'twentytwelve' ) );

	$date = sprintf( '<a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s">%4$s</time></a>',
		esc_url( get_permalink() ),
		esc_attr( get_the_time() ),
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() )
	);

	$author = sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s" rel="author">%3$s</a></span>',
		esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
		esc_attr( sprintf( __( 'View all posts by %s', 'twentytwelve' ), get_the_author() ) ),
		get_the_author()
	);

	// Translators: 1 is category, 2 is tag, 3 is the date and 4 is the author's name.
	if ( $tag_list ) {
		$utility_text = __( 'This entry was posted in %1$s and tagged %2$s on %3$s<span class="by-author"> by %4$s</span>.', 'twentytwelve' );
	} elseif ( $categories_list ) {
		$utility_text = __( 'This entry was posted in %1$s on %3$s<span class="by-author"> by %4$s</span>.', 'twentytwelve' );
	} else {
		$utility_text = __( 'This entry was posted on %3$s<span class="by-author"> by %4$s</span>.', 'twentytwelve' );
	}

	printf(
		$utility_text,
		$categories_list,
		$tag_list,
		$date,
		$author
	);
}
endif;

/**
 * Extends the default WordPress body class to denote:
 * 1. Using a full-width layout, when no active widgets in the sidebar
 *    or full-width template.
 * 2. Front Page template: thumbnail in use and number of sidebars for
 *    widget areas.
 * 3. White or empty background color to change the layout and spacing.
 * 4. Custom fonts enabled.
 * 5. Single or multiple authors.
 *
 * @since Twenty Twelve 1.0
 *
 * @param array Existing class values.
 * @return array Filtered class values.
 */
function twentytwelve_body_class( $classes ) {
	$background_color = get_background_color();

	if ( ! is_active_sidebar( 'sidebar-1' ) || is_page_template( 'page-templates/full-width.php' ) )
		$classes[] = 'full-width';

	if ( is_page_template( 'page-templates/front-page.php' ) ) {
		$classes[] = 'template-front-page';
		if ( has_post_thumbnail() )
			$classes[] = 'has-post-thumbnail';
		if ( is_active_sidebar( 'sidebar-2' ) && is_active_sidebar( 'sidebar-3' ) )
			$classes[] = 'two-sidebars';
	}

	if ( empty( $background_color ) )
		$classes[] = 'custom-background-empty';
	elseif ( in_array( $background_color, array( 'fff', 'ffffff' ) ) )
		$classes[] = 'custom-background-white';

	// Enable custom font class only if the font CSS is queued to load.
	if ( wp_style_is( 'twentytwelve-fonts', 'queue' ) )
		$classes[] = 'custom-font-enabled';

	if ( ! is_multi_author() )
		$classes[] = 'single-author';

	return $classes;
}
add_filter( 'body_class', 'twentytwelve_body_class' );

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @since Twenty Twelve 1.0
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 * @return void
 */
function twentytwelve_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
}
add_action( 'customize_register', 'twentytwelve_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 *
 * @since Twenty Twelve 1.0
 */
function twentytwelve_customize_preview_js() {
	wp_enqueue_script( 'twentytwelve-customizer', get_template_directory_uri() . '/js/theme-customizer.js', array( 'customize-preview' ), '20120827', true );
}
add_action( 'customize_preview_init', 'twentytwelve_customize_preview_js' );


/* ---------------------------------------------------------------------------- */

function theme_setup() {
	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();

	// Adds RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );

	// This theme supports a variety of post formats.
	add_theme_support( 'post-formats', array( 'aside', 'image', 'link', 'quote', 'status' ) );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menu( 'primary', 'メインメニュー');

	/*
	 * This theme supports custom background color and image, and here
	 * we also set up the default background color.
	 */
	add_theme_support( 'custom-background', array(
		'default-color' => 'e6e6e6',
	) );

	// This theme uses a custom image size for featured images, displayed on "standard" posts.
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 624, 9999 ); // Unlimited height, soft crop
}
add_action( 'after_setup_theme', 'theme_setup' );

function theme_wp_title( $title, $sep ) {
    global $paged, $page;

	if ( is_feed() )
		return $title;

	// Add the site name.
	$title .= get_bloginfo( 'name' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title = "$title $sep $site_description";

	// Add a page number if necessary.
	if ( $paged >= 2 || $page >= 2 )
		$title = "$title $sep " . sprintf('ページ %s', max( $paged, $page ) );

	return $title;
}
add_filter('wp_title', 'theme_wp_title', 10, 2 );

function theme_list_comments($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case 'pingback' :
		case 'trackback' :
		// Display trackbacks differently than normal comments.
	?>
	<div class="comment media" id="comment-<?php comment_ID(); ?>">
        <span class="pull-left" style="width: 64px; height: 64px;"></span>
        <div class="media-body">
    		<p>ピンバック: <?php comment_author_link(); ?> <?php edit_comment_link('(編集)', '<span class="edit-link">', '</span>'); ?></p>
	<?php
			break;
		default :
		// Proceed with normal comments.
		global $post;
	?>
	<div class="comment media" id="comment-<?php comment_ID(); ?>">
        <span class="pull-left">
            <?php echo get_avatar( $comment, 64 ); ?>
        </span>
        <div class="media-body">
    		<?php
    			printf( '<h4 class="fn media-heading">%1$s %2$s</h4>',
    				get_comment_author_link(),
    				// If current post author is also comment author, make it known visually.
    				( $comment->user_id === $post->post_author ) ? ' <span class="label">投稿作成者</span>' : ''
    			);
    			printf( '<a href="%1$s"><time datetime="%2$s">%3$s</time></a>',
    				esc_url( get_comment_link( $comment->comment_ID ) ),
    				get_comment_time( 'c' ),
    				/* translators: 1: date, 2: time */
    				sprintf('%1$s %2$s', get_comment_date(), get_comment_time() )
    			);
    		?>

    		<?php if ( '0' == $comment->comment_approved ) : ?>
    			<p class="comment-awaiting-moderation alert">あなたのコメントは承認待ちです。</p>
    		<?php endif; ?>
    
    		<section class="comment-content comment">
    			<?php comment_text(); ?>
    			<?php edit_comment_link('編集', '<p class="edit-link">', '</p>' ); ?>
    		</section><!-- /.comment-content -->
    
    		<div class="reply">
    			<?php comment_reply_link(array_merge($args, array(
                    'reply_text' => '返信',
                    'depth' => $depth,
                    'max_depth' => $args['max_depth'],
                ))); ?>
    		</div><!-- /.reply -->
	<?php
		break;
	endswitch; // end comment_type check
}

function theme_list_comments_end_el() {
    ?>
    </div><!-- /.media-body -->
    </div><!-- /.media -->
    <?php
}

function comment_form_default_fields_filter($args) {
    
    $fields = array(
        'author' =>
            '<div class="control-group">'.
                '<label class="control-label" for="author">'.
                    '名前'.
                    '<span class="required">*</span>'.
                '</label>'.
                '<div class="controls">'.
                    '<input id="author" name="author" class="input-large" type="text" required>'.
                '</div>'.
            '</div>',
        'email' =>
            '<div class="control-group">'.
                '<label class="control-label" for="email">'.
                    'メールアドレス'.
                    '<span class="required">*</span>'.
                '</label>'.
                '<div class="controls">'.
                    '<input id="email" name="email" class="input-large" type="email" required>'.
                '</div>'.
            '</div>',
        'url' =>
            '<div class="control-group">'.
                '<label class="control-label" for="url">'.
                    'ウェブサイト'.
                '</label>'.
                '<div class="controls">'.
                    '<input id="url" name="url" class="input-xxlarge" type="url">'.
                '</div>'.
            '</div>'
    );
    
    return wp_parse_args($fields, $args);
}
add_filter('comment_form_default_fields', 'comment_form_default_fields_filter');

function comment_form_defaults_filter($args) {
    $defaults = array(
        'comment_field' =>
            '<div class="control-group">'.
                '<label class="control-label" for="comment">'.
                    'コメント'.
                '</label>'.
                '<div class="controls">'.
                    '<textarea id="comment" name="comment" class="input-xxlarge" rows="8"></textarea>'.
                '</div>'.
            '</div>',
        'comment_notes_after' => null,
    );
    return wp_parse_args($defaults, $args);
}
add_filter('comment_form_defaults', 'comment_form_defaults_filter');

function gallery2_shortcode($attr) {
    $post = get_post();

    static $instance = 0;
    $instance++;

    if ( ! empty( $attr['ids'] ) ) {
        // 'ids' is explicitly ordered, unless you specify otherwise.
        if ( empty( $attr['orderby'] ) )
            $attr['orderby'] = 'post__in';
        $attr['include'] = $attr['ids'];
    }

    // Allow plugins/themes to override the default gallery template.
    $output = apply_filters('post_gallery', '', $attr);
    if ( $output != '' )
        return $output;

    // We're trusting author input, so let's at least make sure it looks like a valid orderby statement
    if ( isset( $attr['orderby'] ) ) {
        $attr['orderby'] = sanitize_sql_orderby( $attr['orderby'] );
        if ( !$attr['orderby'] )
            unset( $attr['orderby'] );
    }


	static $sizes = array(
		'thumbnail' => array('columns' => 5),
		'medium'    => array('columns' => 3),
		'large'     => array('columns' => 1),
		'full'      => array('columns' => 1),
	);

	if (!empty($attr['size'])) {
		if (!array_key_exists($attr['size'], $sizes)) {
			$attr['size'] = 'thumbnail';
		}
		if (empty($attr['columns'])) {
			 $attr['columns'] = $sizes[$attr['size']]['columns'];
		}
	}

    extract(shortcode_atts(array(
        'order'      => 'ASC',
        'orderby'    => 'menu_order ID',
        'id'         => $post->ID,
        'itemtag'    => 'ul',
        'icontag'    => 'li',
        'captiontag' => 'p',
        'columns'    => 3,
        'size'       => 'medium',
        'include'    => '',
        'exclude'    => ''
    ), $attr));

    $id = intval($id);
    if ( 'RAND' == $order )
        $orderby = 'none';

    if ( !empty($include) ) {
        $_attachments = get_posts( array('include' => $include, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );

        $attachments = array();
        foreach ( $_attachments as $key => $val ) {
            $attachments[$val->ID] = $_attachments[$key];
        }
    } elseif ( !empty($exclude) ) {
        $attachments = get_children( array('post_parent' => $id, 'exclude' => $exclude, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );
    } else {
        $attachments = get_children( array('post_parent' => $id, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby) );
    }

    if ( empty($attachments) )
        return '';

    if ( is_feed() ) {
        $output = "\n";
        foreach ( $attachments as $att_id => $attachment )
            $output .= wp_get_attachment_link($att_id, $size, true) . "\n";
        return $output;
    }

    $itemtag = tag_escape($itemtag);
    $captiontag = tag_escape($captiontag);
    $icontag = tag_escape($icontag);
    $valid_tags = wp_kses_allowed_html( 'post' );
    if ( ! isset( $valid_tags[ $itemtag ] ) )
        $itemtag = 'dl';
    if ( ! isset( $valid_tags[ $captiontag ] ) )
        $captiontag = 'dd';
    if ( ! isset( $valid_tags[ $icontag ] ) )
        $icontag = 'dt';

    $columns = intval($columns);
    $itemwidth = $columns > 0 ? floor(100/$columns) : 100;
    $float = is_rtl() ? 'right' : 'left';

    $selector = "gallery-{$instance}";

    $output = '<ul class="gallery gallery-columns-'.$columns.'">';
    $i = 0;
    foreach ( $attachments as $id => $attachment ) {
		$id = intval($id);
		$_post = get_post( $id );

		if (empty($_post) || ('attachment' != $_post->post_type) || !wp_get_attachment_url( $_post->ID )) {
			continue;
		}

        $url = get_attachment_link( $_post->ID );
        $post_title = esc_attr($_post->post_title);
		$permalink = isset($attr['link']) && 'file' == $attr['link'] ? false : true;

		if ($size && 'none' != $size) {
			$link_text = wp_get_attachment_image($id, $size, false);
		} else {
			$link_text = '';
		}

		if (trim($link_text) == '') {
			$link_text = $_post->post_title;
		}

		$link = apply_filters( 'wp_get_attachment_link',
			'<a href="'.$url.'" class="gallery-img" title="'.$post_title.'">'.$link_text.'</a>',
			$id, $size, $permalink, false, false);

        $output .=
            '<li class="gallery-img-list">'.
				'<div class="gallery-img-wrap">'.$link.'</div>';
		$output .=
			'</li>';
	}
	$output .=
		'</ul>';

	static $enqueue_script = false;
    if (!enqueue_script) {
      wp_enqueue_script('theme_gallery_script', get_template_directory_uri().'/js/gallery.js', array(), '1.0', true);
      $enqueue_script = true;
    }

    return $output;
}
add_shortcode('gallery', 'gallery2_shortcode');

function theme_scripts_styles() {
    global $wp_styles;

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script( 'comment-reply' );
    }

    wp_enqueue_script('theme-script-jquery', get_template_directory_uri().'/js/jquery-1.9.1.min.js', array(), false, true);

    wp_enqueue_script('theme-script-bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', array(), false, true);
    wp_enqueue_script('theme-script', get_template_directory_uri().'/js/script.min.js', array(), '1.0', true);

    wp_enqueue_style('theme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'theme_scripts_styles');

