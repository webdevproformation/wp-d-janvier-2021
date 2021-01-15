<?php 
/**
 * Plugin Name: banniere
 * Author: Malik H
 * Version:  1.0
 * Description: bannière publicitaire au dessous de la barre de menu
 * 
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function generate_banniere(){
    // récupérer le contenu du dossier img , $listeImage = tableau 
    /* [ 
        "C:\Users\HP\Desktop\wp\dev\wp-content\plugins\banniere/img/2d8f0632-b818-4c30-955f-1878fc50925e.png" , "C:\Users\HP\Desktop\wp\dev\wp-content\plugins\banniere\img\5YK43U9.png" ]*/
    $listeImage = glob(__DIR__."/img/*.png");
    $html = "<div id=\"banniere\">";
    foreach($listeImage as $img){
        // "C:\Users\HP\Desktop\wp\dev\wp-content\plugins\banniere/img/2d8f0632-b818-4c30-955f-1878fc50925e.png"
        // $imgTable = [  "C:\Users\HP\Desktop\wp\dev\wp-content\plugins\banniere/" ,"banniere" , "img" , "2d8f0632-b818-4c30-955f-1878fc50925e.png"]
        $imgTable = explode( "/" , $img );
        $len = count($imgTable) - 1 ;
        // $nomImage = "2d8f0632-b818-4c30-955f-1878fc50925e.png"
        $nomImage = $imgTable[$len];
        $html .= "<img src=\"". plugin_dir_url( __DIR__ ). "banniere/img/" . $nomImage ."\" alt=\"\">";
        // http://localhost:1234/wp-content/plugins/banniere/img/2d8f0632-b818-4c30-955f-1878fc50925e.png
    }
    $html .= "</div>";
    return $html ;
}

function banniere_animation(){
    wp_enqueue_script( "banniere-script", plugin_dir_url( __DIR__ ). "banniere/script.js", ["jquery"], "1.0", true );
}

add_action( "wp_enqueue_scripts", "banniere_animation");

// énigme : comment récupérer le dernier mot d'une phrase quelque soit le nombre de mot de la phrase 
$texte =  "bonjour les amis autre mots "; // string 

// transformer en tableau 

$texteTable = explode( " " , $texte); // $texteTable = ["bonjour" , "les" , "amis" , "autre" , "mots" ]
// 1er mot 
$texteTable[0];
// 2eme mot 
$texteTable[1];
// dernier mot 
$texteTable[5 - 1]; // "mots"
// au lieu d'écrire 5 count( $texteTable )
$texteTable[count( $texteTable ) - 1];
// variable simple => 2 "lettre"
// tableau 
// fonction
// class et objet 

// Wp_Query // thème enfant // qcm 
// jointure SQL  (après 17h00) hors sujet 20 min 

// bon appétit rdv dans 1 h => 13h32 !!!! bon app 