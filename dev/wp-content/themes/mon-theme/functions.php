<?php 
/* si je suis dans un fichier .php qui ne contient QUE du PHP je n'ai pas besoin de mettre la balise php fermante */

function mon_theme_image_a_la_une(){
    add_theme_support( "post-thumbnails" );
    /* thumbnails : miniatures d'article */ 
}

// exécuter la fonction précédente lorsque le thème est activé 

add_action( "after_setup_theme", "mon_theme_image_a_la_une" );

// ajouter les css de mon thème 

function mon_theme_css(){
    // mon thème j'ai ajouté 4 feuilles de style :
    // 1 bootstrap 
    wp_enqueue_style( "bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css", [], "5.0.0-beta1", "all" );
    // 2 bootstrap icon
    wp_enqueue_style( "bootstrap-icon", "https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css", ["bootstrap"], "1.3.0", "all" );
    // 3 mon-theme.css 
    wp_enqueue_style( "mon-theme", get_template_directory_uri() ."/css/mon-style.css" , [], "1.0",  "all" );
    // 4 style.css 
    wp_enqueue_style( "style", get_template_directory_uri() ."/style.css" , [], "1.0",  "all" );
}

add_action( "wp_enqueue_scripts" , "mon_theme_css" );

// pause déjeuner 
// ajouter du javascript dans un thème wordpress 
// ajouter un script en jQuery 

// requêtes new WP_Query()

// plugin extension dans nos projets wordpress ! 

// rdv dans 1h => 13h38 bon appétit tout le monde !!!!!!!! 

function mon_theme_js(){
    wp_enqueue_script( "mon-script", get_template_directory_uri( ) . "/js/script.js" , [], "1.0", true ) ;
    // true => ajouter dans le footer
    // false => ajouter dans le header 
}

add_action("wp_enqueue_scripts" , "mon_theme_js" );

function mon_theme_single_js (){
    if(is_single()){
        wp_enqueue_script( "mon-script-single", get_template_directory_uri( ) . "/js/script-single.js" , [], "1.0", true ) ;
    }
}


add_action("wp_enqueue_scripts" , "mon_theme_single_js" );

function mon_theme_home_page_js(){
    if(is_home() || is_page()){
        wp_enqueue_script( "mon-script-page", get_template_directory_uri( ) . "/js/script-page.js" , [], "1.0", true ) ;
    }
}

add_action("wp_enqueue_scripts", "mon_theme_home_page_js" );