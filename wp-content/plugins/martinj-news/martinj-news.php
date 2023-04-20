<?php

/*
Plugin Name: MartinJ - News
Description: Ett plugin för att visa nyheter. Pluginet innehåller även en egen post-typ (news), där användaren kan lägga till nyheter efter behov. 
*/

function my_plugin_styles() {
    wp_enqueue_style('news-style', plugins_url('martinj-news', 'martinj-news' ) . "/news-style.css", array(), '1.0', 'all');
    //wp_enqueue_style( 'my-plugin-style', plugin_dir_url() . '/stylesheet.css' );
}
add_action( 'wp_enqueue_scripts', 'my_plugin_styles' );



function custom_post_type() {

    $labels = array(
        'name' => 'Nyheter',
        'singular_name' => 'Nyhet',
        'add_new' => 'Lägg till',
        'add_new_item' => 'Lägg till nyhet',
        'edit_item' => 'Redigera nyhet',
        'new_item' => 'Lägg till nyhet',
        'view_item' => 'Visa nyhet',
        'search_items' => 'Sök efter nyhet',
        'not_found' =>  'Inga nyheter hittade',
        'not_found_in_trash' => 'Inga nyheter i papperskorgen',
        'parent_item_colon' => '',
        'menu_name' => 'Nyheter'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'news' ),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    );

    register_post_type( 'news', $args );
}
add_action( 'init', 'custom_post_type' );



        
function skriv_nyheter(){
    echo "<hr><h3>Detta är de senaste nyheterna i Martins Sportshop:</h3>";



    // Define the query arguments
$args = array(
    'post_type' => 'news',
    'posts_per_page' => -1,
);

// Run the query
$custom_query = new WP_Query( $args );

// Check if there are any posts
if ( $custom_query->have_posts() ) {
    // Start the loop
    while ( $custom_query->have_posts() ) {
        $custom_query->the_post();
        // Display the post content
        ?>
            
            <h2><?php the_title(); ?></h2>
            <p>Av: <?php the_author(); ?> -- <?php echo get_the_date(); ?></p>
            <div class="test">
            <p class="newsContent"><?php the_content(); ?></p>
            <?php the_post_thumbnail( 'medium' ); ?>
    </div>
    <hr>
        <?php
    }
    // Reset the post data
    wp_reset_postdata();
} else {
    // If no posts are found, display a message
    echo 'No news found.';
}




}

add_action ('main_news', 'skriv_nyheter');



?>