<?php 
/**
 * Plugin Name:articles associés
 * Author: Malik H
 * Description: utilisation de la class WP_Query
 * Version: 1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
// activer le plugin dans le back office via le menu Extension

$resultat = "";

function get_articles( $nom_categorie ){
    // récupérer tous les articles de la catégorie informatique 
    // la catégorie informatique elle a comme ID : 3 (à récupérer dans le back office )
    // documentation officielle de Wordpress 
    // wordpress.org > WP_Query (dans le menu de recherche)
    // https://developer.wordpress.org/reference/classes/wp_query/
    // documentation => Codex (carnet de note de Léonard de Vinci )
    // c'est écrit en Anglais 
    $arg = [
        "category_name" => $nom_categorie
    ];
    $requete = new WP_Query($arg);

    return $requete->posts;

}

function get_all_articles()
{
    // https://developer.wordpress.org/reference/classes/wp_query/
    $arg = [
        'post_type' => 'post' , // tous les articles 
        'post_status' => 'publish' // qui sont publiés 
    ];
    $requete = new WP_Query( $arg );
    return $requete->posts ;
}

function article_associee_css(){
    wp_enqueue_style( "article-associee-style", plugin_dir_url( __DIR__ ). "articles_associes/style.css" , [], "1.0", "all" );
}

add_action("wp_enqueue_scripts","article_associee_css");
