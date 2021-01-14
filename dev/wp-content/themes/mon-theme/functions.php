<?php 
/* si je suis dans un fichier .php qui ne contient QUE du PHP je n'ai pas besoin de mettre la balise php fermante */

function mon_theme_image_a_la_une(){
    add_theme_support( "post-thumbnails" );
    /* thumbnails : miniatures d'article */ 
}

// exécuter la fonction précédente lorsque le thème est activé 

add_action( "after_setup_theme", "mon_theme_image_a_la_une" );