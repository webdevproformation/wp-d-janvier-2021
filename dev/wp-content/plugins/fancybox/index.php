<?php 
/** 
    Plugin Name: fancybox
    Description: ajouter la librairie fancybox from http://fancyapps.com/fancybox/3/
    Version: 1
    Author: Malik H
*/

function fancybox_js_css (){
    wp_enqueue_style( "fancybox-style", "https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css", [], "3.5.7", "all" );

    wp_enqueue_script( "fancybox-script", "https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js", ["jquery"], "3.5.7", true );

    wp_enqueue_script("fancybox-script-mon-script" , plugin_dir_url( __DIR__ )."fancybox/script.js" , ["jquery"] , "1.0" , true); 

}

add_action("wp_enqueue_scripts","fancybox_js_css");


// <img src="small_1.jpg">
// <a data-fancybox="gallery" href="big_1.jpg"><img src="small_1.jpg"></a>