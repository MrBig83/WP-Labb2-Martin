<?php

/*
Plugin Name: MJ - News
*/

function skriv_nyheter(){
    echo "Detta är de senaste nyheterna i Martins Sportshop:";
}

add_action ('main_news', 'skriv_nyheter');

?>