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

// permet de personnaliser le contenu de la balise title de toutes les pages du site

function mon_theme_title ( $title ){
    if(is_home()){
        $title = "Bienvenu sur mon site" . " | " . get_option('blogname');
    }else {
        $title = substr($title, 9, strlen($title)) . " | " . get_option('blogname');
    }
    return $title;
}

add_filter( "wp_title", "mon_theme_title" );

// ajouter le système de gestion de menu 

register_nav_menus( [ "top" => "Menu Principal"] );
// back office 

function mon_theme_generate_menu(){
    $m = wp_get_nav_menu_items('Menu Principal');
    $html = "<nav class=\"col-12 navbar navbar-expand bg-dark navbar-dark\">";
    $html .= "<a href=\"".get_option('home')."\" class=\"navbar-brand\">
                <img src=\"".get_template_directory_uri() ."/img/logo.png\" alt=\"\">
                ".get_option('blogname')."
            </a>";
    $html .= "<ul class=\"navbar-nav ms-auto\">";
        foreach($m as $item){
            $html .= "<li class=\"nav-item\">";
            $html .= "<a href=\"$item->url\" class=\"nav-link\">";
            $html .= $item->title ;
            $html .= "</a>";
            $html .= "</li>";
        }
    $html .= "</ul>";
    $html .= "</nav>";
    return $html ; 

    // https://wabeo.fr/construire-walker-wordpress/ 
    // https://wordpress.org/plugins/timber-library/
    // paramétrer => {{  }}
    // {# #}
    // {% for %}
    // https://www.grafikart.fr/tutoriels/wordpress-timber-1308
}








