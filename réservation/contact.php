<?php
include"./include/menu.php";
require_once"./include/connect_mysql.php";
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
	<title>Formulaire</title>
	<link rel="stylesheet" href="style/cv-responsive.css">
	<script type="text/javascript">
	function validationFormulaire() {
	    var x = document.forms["formContact"]["messageContact"].value;
	    if (x == null || x == "") {
	        alert("Vous avez oublié d'insérer un message");
	        return false;
	    }
	}
	</script>
	

  <link rel="stylesheet" href="styles.css">
   <title></title>


   <?php

?>
<?php
ini_set("SMTP", "smtp.orange.fr");
ini_set("smtp_port", "25"); // sachant que le port ressemblera sûrement à quelquechose comme 8025
ini_set("sendmail_from", "bigot.catherine@club-internet.fr ");
?>
      </head>
    <body>



<!-- DEBUT DU FORMULAIRE DE CONTACT   -->
<div class="ancre" id="contact"></div>
    <section class="bg-light py-3">
        <div class="container" id="section-contact">
            <div class="row justify-content-center">
	<h1>Formulaire de contact</h1>
            </div></div>
	<div class="container">
            <div class="row justify-content-md-center">

                <div class="col-md-8">
	<form name="formContact" onsubmit="return validationFormulaire()" enctype="application/x-www-form-urlencoded" method="post" action="#">
		Nom:<br>
		<input type="text"name="Nom" style="width: 670px;height: 25px;" placeholder="Quel est votre Nom?" required><br><br>
		Adresse mail:<br>
		<input type="email" name="email"style="width: 670px;height: 25px;" placeholder="Quel est votre Email ?" required><br><br>
		T&eacute;l&eacute;phone:<br>
		<input type="tel"style="width: 670px;height: 25px;" placeholder="Quel est votre téléphone ?" required><br><br>
		Message:<br>
		<textarea id="form-textarea" name="messageContact"cols="90" rows="10"></textarea><br>
		<input type="checkbox" name="autorisation"> Je vous autorise &agrave; conserver ces coordonn&eacute;es<br>
		<input type="submit" name="envoie" value="Envoyer">
                    </form></div></div></div></section>
<?php
if (isset($_POST['envoie'])) {
    if (!isset($_POST['messageContact']) || $_POST['messageContact'] == '') {
        echo ('Vous avez oublié d\'ins&eacute;rer un message<br>');
    } else {
        // assignation de la varaiable mail si aucune adresse mail renseignée
        if (!isset($_POST['email']) || $_POST['email'] == '') {
            $_POST['email'] = '';
        } elseif (isset($_POST['autorisation'])) {
            $adresseMail = $_POST['email'];

        }

        $message = 'Vous avez recu un message via votre site internet, le voici:<br>' . $_POST['messageContact'];

        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
        $headers .= 'From: ' . $_POST['email'] . "\r\n" . 'Reply-To: ' . $_POST['email'] . "\r\n" .'Cc: ' . $em['emailcli'] . "\r\n" . 'X-Mailer: PHP/' . phpversion();
        $maile = "bigot.catherine@club-internet.fr";
        mail($maile, 'Formulaire de contact', $message, $headers);
// Envoi par mail 
        // confirmation
        echo ('Votre message a &eacute;t&eacute; envoy&eacute;<br>');
    }
};?>

</body>
</html>