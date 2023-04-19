<?php

/*
Plugin Name: MJ - News
Description: Ett plugin för att visa nyheter. Pluginet innehåller även en egen post-typ (news), där användaren kan lägga till nyheter efter behov. 
*/

function skriv_nyheter(){
    echo "Detta är de senaste nyheterna i Martins Sportshop:";
}

add_action ('main_news', 'skriv_nyheter');



function min_posttyp(){
    register_post_type( 'news' , array(
        'labels' => array(
            'name' => 'Nyheter',
            'singular_name' => 'Nyhet'),
            'public' => true,
            'has_archive' => true
        ));
    }
    
add_action( 'init' , 'min_posttyp' );



?>