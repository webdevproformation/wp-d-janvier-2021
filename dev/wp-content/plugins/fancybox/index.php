<?php 
/** 
    Plugin Name: fancybox
    Description: ajouter la librairie fancybox 
    Version: 1
    Author: Malik H
*/

function fancybox_js_css (){
    wp_enqueue_style( "fancybox-style", "https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css", [], "3.5.7", "all" );

    wp_enqueue_script( "fancybox-script", "https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js", ["jquery"], "3.5.7", true );
}

add_action("wp_enqueue_scripts","fancybox_js_css");


