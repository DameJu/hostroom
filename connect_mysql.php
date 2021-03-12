<?php


    try {
        /*connexion à la base de 
        données*/
            
       $pdo = new pdo("mysql:host=localhost;dbname=hostroom",'root','');
        
       

        
        //Définit l'usage de l'encodage UTF8 pour toutes les requettes qui suivront//
        $pdo->exec("SET NAMES 'utf8';");

        //définit affichage des jours/mois en français//
        $pdo->exec("SET lc_time_names = 'fr_FR'");


    } catch(Exception $e) { //en cas d'erreur de connexion
//        die("Erreur : " . $e->getMessage());
        die("Aïe... Une erreur est survenue...");
    }

?>








