<?php

add_theme_support('post-thumbnails');
add_post_type_support('page', 'excerpt');
/**
 * Add HTML5 theme support.
 */
function wpdocs_after_setup_theme() {
    add_theme_support( 'html5', array( 'search-form' ) );
}
add_action( 'after_setup_theme', 'wpdocs_after_setup_theme' );

//register menus
function register_my_menus() {
	register_nav_menus(
		array(
			'main' => __( 'TopMenu' )
		)
	);
}
add_action( 'init', 'register_my_menus' );

function wpdocs_custom_excerpt_length( $length ) {
    return 32;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

// enqueue styles + scripts
function tansom_enqueue_styles() {
	wp_enqueue_style('font', 'https://fonts.googleapis.com/css?family=Cabin:400,500,700|Oswald:300,400,700', array(), null);
  wp_enqueue_style('core', get_bloginfo('template_url').'/style.css', array(), null, 'screen');
  wp_enqueue_style('responsive', get_bloginfo('template_url').'/responsive.css', array(), null, 'screen');
  wp_enqueue_style('normalize', get_bloginfo('template_url').'/normalize.css', array(), null, 'screen');
	wp_enqueue_style('mmenu', get_bloginfo('template_url').'/js/jquery.mmenu/jquery.mmenu.css', array(), null, 'screen');

	wp_enqueue_script('jquery');
	wp_enqueue_script('mmenu', get_bloginfo('template_url').'/js/jquery.mmenu/jquery.mmenu.all.js', array('jquery'), false, true);
	wp_enqueue_script('core', get_bloginfo('template_url').'/js/script.js', array('jquery'), false, true);

}
add_action('wp_enqueue_scripts', 'tansom_enqueue_styles');

/* Replaces the excerpt "Read More" text by a link
function new_excerpt_more($more) {
       global $post;
	return '<a class="moretag" href="'. get_permalink($post->ID) . '">...weiterlesen...</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');*/
// CUSTOM POST TYPES
function work_custom_post_types() {

	    // WORKS custom post list
		$labels = array(
			'name'               => _x( 'works', 'post type general name', 'tansom'),
			'singular_name'      => _x( 'Work', 'post type singular name', 'tansom'),
			'menu_name'          => _x( 'Works', 'admin menu', 'tansom'),
			'name_admin_bar'     => _x( 'Works', 'add new on admin bar', 'tansom'),
			'add_new'            => _x( 'New Work', 'book', 'tansom'),
			'add_new_item'       => __( 'Add New Work', 'tansom'),
			'new_item'           => __( 'New Work', 'tansom'),
			'edit_item'          => __( 'Works edit', 'tansom'),
			'view_item'          => __( 'Works view', 'tansom'),
			'all_items'          => __( 'All Works', 'tansom'),
			'search_items'       => __( 'Search Works', 'tansom'),
			'parent_item_colon'  => __( 'Parent Work', 'tansom'),
			'not_found'          => __( 'No Works Found', 'tansom'),
			'not_found_in_trash' => __( 'No Works Found', 'tansom')
		);
		$args = array(
			'labels'             => $labels,
			'description'        => __('All Works from Studio', 'tansom'),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array('slug' => 'Works'),
			'capability_type'    => 'page',
			'has_archive'        => false,
			'hierarchical'       => true,
			'supports'           => array('title', 'editor', 'thumbnail', 'excerpt', 'revisions', 'custom-fields', 'page-attributes')
		);
		register_post_type('Works', $args);

}

add_action('init', 'work_custom_post_types');

// STUDIO  custom post list
/*
function studio_custom_post_types() {

$labels = array(
'name'               => _x( 'Studio', 'post type general name', 'tansom'),
'singular_name'      => _x( 'Studio', 'post type singular name', 'tansom'),
'menu_name'          => _x( 'Studio', 'admin menu', 'tansom'),
'name_admin_bar'     => _x( 'Studio', 'add new on admin bar', 'tansom'),
'add_new'            => _x( 'New Studio item', 'book', 'tansom'),
'add_new_item'       => __( 'Add New Studio item', 'tansom'),
'new_item'           => __( 'New Studio', 'tansom'),
'edit_item'          => __( 'Studio edit', 'tansom'),
'view_item'          => __( 'Studio view', 'tansom'),
'all_items'          => __( 'All Studio', 'tansom'),
'search_items'       => __( 'Search Studio', 'tansom'),
'parent_item_colon'  => __( 'Parent Studio', 'tansom'),
'not_found'          => __( 'No Studio Found', 'tansom'),
'not_found_in_trash' => __( 'No Studio Found', 'tansom')
);
$args = array(
'labels'             => $labels,
'description'        => __('All Studio', 'tansom'),
'public'             => true,
'publicly_queryable' => true,
'show_ui'            => true,
'show_in_menu'       => true,
'query_var'          => true,
'rewrite'            => array('slug' => 'Studios'),
'capability_type'    => 'page',
'has_archive'        => false,
'hierarchical'       => true,
'supports'           => array('title', 'editor', 'thumbnail', 'excerpt', 'revisions', 'custom-fields', 'page-attributes')
);
register_post_type('Studios', $args);

}

add_action('init', 'studio_custom_post_types');
*/

//sponsors - custom post type

function sponsors_custom_post_types() {

	    //  - Sponsors
		$labels = array(
			'name'               => _x( 'Sponsors', 'post type general name', 'tansom'),
			'singular_name'      => _x( 'Sponsor', 'post type singular name', 'tansom'),
			'menu_name'          => _x( 'Sponsors', 'admin menu', 'tansom'),
			'name_admin_bar'     => _x( 'Sponsors', 'add new on admin bar', 'tansom'),
			'add_new'            => _x( 'New Sponsor', 'book', 'tansom'),
			'add_new_item'       => __( 'Add New Sponsor', 'tansom'),
			'new_item'           => __( 'New Sponsor', 'tansom'),
			'edit_item'          => __( 'Sponsors edit', 'tansom'),
			'view_item'          => __( 'Sponsors view', 'tansom'),
			'all_items'          => __( 'All Sponsors', 'tansom'),
			'search_items'       => __( 'Search Sponsors', 'tansom'),
			'parent_item_colon'  => __( 'Parent Sponsor', 'tansom'),
			'not_found'          => __( 'No Sponsors Found', 'tansom'),
			'not_found_in_trash' => __( 'No Sponsors Found', 'tansom')
		);
		$args = array(
			'labels'             => $labels,
			'description'        => __('All Sponsors for Tansom', 'tansom'),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array('slug' => 'Sponsors'),
			'capability_type'    => 'page',
			'has_archive'        => false,
			'hierarchical'       => true,
			'supports'           => array('title', 'editor', 'thumbnail', 'excerpt', 'revisions', 'custom-fields', 'page-attributes')
		);
		register_post_type('Sponsors', $args);

}

add_action('init', 'sponsors_custom_post_types');

function mytheme_comment($comment, $args, $depth) {
    if ( 'div' === $args['style'] ) {
        $tag       = 'div';
        $add_below = 'comment';
    } else {
        $tag       = 'li';
        $add_below = 'div-comment';
    }?>
    <<?php echo $tag; comment_class( empty( $args['has_children'] ) ? '' : 'parent' ); ?> id="comment-<?php comment_ID() ?>"><?php
    if ( 'div' != $args['style'] ) { ?>
        <div id="div-comment-<?php comment_ID() ?>" class="comment-body"><?php
    } ?>
        <div class="comment-author vcard"><?php
            if ( $args['avatar_size'] != 0 ) {
                echo get_avatar( $comment, $args['avatar_size'] );
            }
            printf( __( '<cite class="fn">%s</cite> <span class="says">says:</span>' ), get_comment_author_link() ); ?>
        </div><?php
        if ( $comment->comment_approved == '0' ) { ?>
            <em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.' ); ?></em><br/><?php
        } ?>
        <div class="comment-meta commentmetadata">
            <a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>"><?php
                /* translators: 1: date, 2: time */
                printf(
                    __('%1$s at %2$s'),
                    get_comment_date(),
                    get_comment_time()
                ); ?>
            </a><?php
            edit_comment_link( __( '(Edit)' ), '  ', '' ); ?>
        </div>

        <?php comment_text(); ?>

        <div class="reply"><?php
                comment_reply_link(
                    array_merge(
                        $args,
                        array(
                            'add_below' => $add_below,
                            'depth'     => $depth,
                            'max_depth' => $args['max_depth']
                        )
                    )
                ); ?>
        </div><?php
    if ( 'div' != $args['style'] ) : ?>
        </div><?php
    endif;
}

?>
