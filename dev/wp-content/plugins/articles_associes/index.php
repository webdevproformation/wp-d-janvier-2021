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

function get_articles(){
    // récupérer tous les articles de la catégorie informatique 
    // la catégorie informatique elle a comme ID : 3 (à récupérer dans le back office )
    // documentation officielle de Wordpress 
    // wordpress.org > WP_Query (dans le menu de recherche)
    // https://developer.wordpress.org/reference/classes/wp_query/
    // documentation => Codex (carnet de note de Léonard de Vinci )
    // c'est écrit en Anglais 
    $arg = [
        "category_name" => "informatique"
    ];
    $requete = new WP_Query($arg);

    return $requete->posts;

}

