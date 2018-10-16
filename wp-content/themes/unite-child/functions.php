<?php
function my_theme_enqueue_styles() {

    $parent_style = 'unite-style';
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );


/*
    Custom Post Type
*/
function custom_post_type(){
    $labels = array(
      'name' => 'Films',
        'singular_name' => 'Film',
        'add_new' => 'Add Film',
        'all_items' => 'All Films',
        'edit_item' => 'Edit Film'
    );

    $args = array(
        'labels'=> $labels,
        'public' => true,
        'has_archive' => true,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'revisions',
        ),
        'menu_positions'=> 5,
        'query_var' => true
    );
    register_post_type('film',$args);
}
add_action('init','custom_post_type');

function custom_taxonomies(){
    $labels = array(
        'name' => 'Genres',
        'singular_name' => 'Genre',
        'add_new_item' => 'Add new Genre',
        'menu_name' => 'Genres'
    );

    $args = array(
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'genre')
    );

    register_taxonomy('genre', array('film'), $args);

    register_taxonomy('country', 'film', array(
        'label' => 'Country',
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'country')
    ));

    register_taxonomy('year', 'film', array(
        'label' => 'Year',
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'year')
    ));

    register_taxonomy('actors', 'film', array(
        'label' => 'Actors',
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'actors')
    ));
}

add_action('init', 'custom_taxonomies');


