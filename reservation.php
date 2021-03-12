<?php
session_start();

require_once("include/connect_mysql.php");
 
 
//on récupére l'index de la reservation à afficher
    if(isset($_REQUEST["idreserv"])) {
        $idx = $_REQUEST["idreserv"];
    } else {
        $idx=1;
    }

if(isset($_REQUEST["Action"])) {

    

        //l'utilisateur a demandé l'enregistrement de la fiche
           //la variable action permet d'indiquer ce que l'utilisateur tente d'exécuter
    
        if ($_REQUEST["Action"] == "save") {
    if(isset($_REQUEST["datedebut"])) {
                $datedebut = $_REQUEST["datedebut"];
            } else {
                $datedebut = "Sans titre";
            }

            if(isset($_REQUEST["datefin"])) {
                $datefin = $_REQUEST["datefin"];
            } else {
                $datefin = "";
            }

            if(isset($_REQUEST["genre"])) {
                $genre = $_REQUEST["genre"];
            } else {
                $genre = "";
            }

          
        

        
 
	  // mise à jour de la base de données le traitement de la requête
                    

    try{ 
    $sql = 'UPDATE reservation SET genre="'.$genre.'", datedebut="'.$datedebut.'", datefin="'.$datefin.'", tarif ="'.$tarif.'" WHERE idreserv ="'.$_POST['idx'].'"'; 
    $base->exec($sql); 
    echo "Records was updated successfully.<script type='text/javascript'>document.location.replace('admin.php');</script>"; 
} catch(PDOException $e){ 
    die("ERROR: Could not able to execute $sql. " 
                                . $e->getMessage()); 
} }}

 

    

 
            
       

    //en tête du fichier html et menu
     include("include/header.php");
include ("include/menu.php");


//container bootstrap
      echo "<div class='container'>";
    echo "<h1>Edition <small>Réservation</small></h1>";
    
    //Sélection de la reservation à afficher
    $articles = $base->query("select `idreserv`, `datedebut`,`datefin`, `client` , `tarif`, genre FROM reservation where idreserv=$idx");

while ($data = $articles->fetch()) {
    // Formulaire de Modification 
      echo "<form action='reservation.php ' method='post'>";  

        echo "<label for='idx'>Index : </label><input name='idx' type='text' readonly value='" . $data["idreserv"] . "'  class='form-control'>";

        echo "<br><label for='datedebut'>date debut  : </label><input name='datedebut' type='text' value='" . $data["datedebut"] . "' size=100 class='form-control'>";
        echo "<br><label for='datefin'>Date fin : </label><input name='datefin' type='text' value='" . $data["datefin"] . "' class='form-control'>";
        
        
        echo "<br><label for='nomcli'>Nom Client : </label><input name='Nomcli' type='text' value='" . $data["client"] . "' class='form-control'>";
        echo "<br><label for='genre'>Genre : </label><input name='genre' type='text' value='" . $data["genre"] . "' class='form-control'>";
     
    
 echo "<input type='text' name='Action' value='save' hidden>";

        echo "<br><input type='submit' value='Sauvegarder' class='btn btn-info col-sm-6'><a href='admin.php' class='btn btn-danger col-sm-6'>Annuler</a>";
      echo "</form>";}  
    

    echo "</div>";


 


   
?>
<script src="../js/jquery-3.2.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>

<!--Intégration de l'éditeur de texte ckEditor-->
