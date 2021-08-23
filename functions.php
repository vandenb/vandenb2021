<?php

// Load the theme stylesheets
function vandenb_theme_styles()
{

	// Load all of the styles that need to appear on all pages
	wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css' );
	// wp_enqueue_style( 'custom', get_template_directory_uri() . '/css/custom.css' );

}
add_action('wp_enqueue_scripts', 'vandenb_theme_styles');



// Adds navigation through pages in the loop
function vandenb_post_navigation() { ?>
    <div class="loop-pagination-container">
        <?php if ( current_theme_supports( 'loop-pagination' ) )
loop_pagination(); ?>
    </div><?php
}




// This theme supports a variety of post formats.
add_theme_support( 'post-formats', array( 'link', 'quote', 'aside', 'status' ) );


function rename_post_formats($translation, $text, $context, $domain) {
    $names = array(
		'Link'   => 'Notitie',
        'Aside'  => 'Cursiefje',
        'Status' => 'Essay'
    );
    if ($context == 'Post format') {
        $translation = str_replace(array_keys($names), array_values($names), $text);
    }
    return $translation;
}
add_filter('gettext_with_context', 'rename_post_formats', 10, 4);



/**
 * Register two widget areas.
 *
 * @since Twenty Thirteen 1.0
 *
 * @return void
 */
function vandenb_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Over', 'vandenb' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'De tekst in de masthead.', 'vandenb' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Metalinks', 'vandenb' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'De links rechtsboven.', 'vandenb' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'De indexintro', 'vandenb' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'De indexintro', 'vandenb' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Recente postjes', 'vandenb' ),
		'id'            => 'sidebar-4',
		'description'   => __( 'Lijst van de 3 laatste postjes', 'vandenb' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Gerelateerde postjes', 'vandenb' ),
		'id'            => 'sidebar-5',
		'description'   => __( 'Lijst van de 3 gerelateerde postjes', 'vandenb' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h2 class="gerelateerd">',
		'after_title'   => '</h2><hr class="orange">',
	) );

	register_sidebar( array(
		'name'          => __( 'Posts by tag', 'vandenb' ),
		'id'            => 'sidebar-6',
		'description'   => __( 'Voor de posts-by-tag plugin', 'vandenb' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h2 class="postsbytag">',
		'after_title'   => '</h2><hr class="orange">',
	) );

	register_sidebar( array(
		'name'          => __( 'Tinyletter', 'vandenb' ),  // deze staat op de single-pagina
		'id'            => 'sidebar-7',
		'description'   => __( 'Voor de nieuwsbrief', 'vandenb' ),
		'before_widget' => '<div class="tinyletter">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="tinyletter">',
		'after_title'   => '</h3>',
	) );



}
add_action( 'widgets_init', 'vandenb_widgets_init' );


// enable threaded comments
function enable_threaded_comments(){
	if (!is_admin()) {
		if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1))
			wp_enqueue_script('comment-reply');
		}
}
add_action('get_header', 'enable_threaded_comments');


function disqus_count($disqus_shortname) {
    wp_enqueue_script('disqus_count','http://'.$disqus_shortname.'.disqus.com/count.js');
    echo '<a href="'. get_permalink() .'#disqus_thread"></a>';
}


add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 100, 50, true );

function breatheout_filter_pre_get_posts( $query ) {
    if ( $query->is_main_query ) {
        $query->set( 'ignore_sticky_posts', '1' );
    }
}
add_action( 'pre_get_posts', 'breatheout_filter_pre_get_posts' );


//hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'create_dossiers_hierarchical_taxonomy', 0 );

//create a custom taxonomy name it topics for your posts

function create_dossiers_hierarchical_taxonomy() {

// Add new taxonomy, make it hierarchical like categories
//first do the translations part for GUI

  $labels = array(
    'name' => _x( 'Dossiers', 'taxonomy general name' ),
    'singular_name' => _x( 'Dossier', 'taxonomy singular name' ),
    'search_items' =>  __( 'Doorzoek dossiers' ),
    'all_items' => __( 'Alle dossiers' ),
    'parent_item' => __( 'Parent dossier' ),
    'parent_item_colon' => __( 'Parent dossier:' ),
    'edit_item' => __( 'Edit dossier' ),
    'update_item' => __( 'Update dossier' ),
    'add_new_item' => __( 'Voeg nieuw dossier toe' ),
    'new_item_name' => __( 'Naam nieuw dossier' ),
    'menu_name' => __( 'Dossiers' ),
  );

// Now register the taxonomy

  register_taxonomy('dossiers',array('post'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'dossier' ),
  ));

}

?>
