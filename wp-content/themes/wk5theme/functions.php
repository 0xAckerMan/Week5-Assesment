<?php
function c13theme_script_enqueue(){
  wp_enqueue_style('customstyle', get_template_directory_uri().'/custom/custom.css', [], '1.0.0', 'all');
  wp_enqueue_script('customjs', get_template_directory_uri().'/custom/custom.js', [], '1.0.0', true);
};
add_action('wp_enqueue_scripts', 'c13theme_script_enqueue');

//Adding menus
function wkfour_theme_setup(){
  add_theme_support('menus');
  register_nav_menu('primary', 'primary header');
  register_nav_menu('footer', 'footer nav');

}

add_action('init', 'wkfour_theme_setup');

function themename_post_formats_setup() {
    add_theme_support( 'post-formats', array( 'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video' ) );
}
add_action( 'after_setup_theme', 'themename_post_formats_setup' );

 add_theme_support('custom-background');
 add_theme_support('custom-header');
 add_theme_support('post-thumbnails');


function foods_post_type(){
    $labels = [
        'name'=> 'Foods',
        'singular_name'=> 'Food',
        'add_new'=> 'Add Food Item',
        'all_items'=> 'All Foods',
        'add_new_item'=> 'Edit Food',
        'new_item'=> 'New Food',
        'view_item'=> 'View Foods',
        'search_item'=> 'Search Food',
        'not_found'=> 'No Food found',
        'not_found_in_trash'=> 'No Items found in trash',
        'parent_item_colon'=> 'Parent Item'
    ];

    $args = [
        'labels'=> $labels,
        'public'=> true,
        'has_archive'=> true,
        'publicly_queryable'=> true,
        'query_var'=> true,
        'rewrite'=>true,
        'capability'=> 'post',
        'hierarchical' => false,
        'supports'=>[
            'title',
            'thumbnail',
            'editor'
        ],
        'taxonomies'=>[
            'category',
            'post_tag',
            'menu_position'=> 5,
            'exclude_from_search'=> false
        ]
    ];

    register_post_type('food', $args);
}

add_action('init', 'foods_post_type');



//Adding shortcodes

add_shortcode('kores', function($atts){
    // echo 'this is a custom shortcode I created';

    //lemmi use an attribute now
    $attributes = shortcode_atts([
        'members' => 'joel', 'hope', 'joy', 'kimani',
        'no_of_trainees' => 4
    ], $atts, 'kores');

    return "Members are ".$attributes['members']. 'No of trainees = '.$attributes['no_of_trainees'];
});