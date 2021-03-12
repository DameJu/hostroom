<?php
require_once "include/connect_mysql.php"

?>

	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<!-- affichage correct sur tout support =responsive, niveau de zoom à 1 -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
		<!--    Font awesome-->
		<!--    https://fontawesome.bootstrapcheatsheets.com/#-->
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->


		<style>

        input{

        border-bottom: 2px;
        color:blue;
        border-radius: 5px;
        background-color:white;
    }
              /* Texte défilant */

.defileParent {
	display: block;
	margin: 1em auto;
	overflow: hidden;
	position: relative;
	table-layout: fixed;
	width: 700px;
}
.defile {
	display:block;
	-webkit-animation:linear marqueelike 20s infinite ;
	-moz-animation:linear marqueelike 20s infinite ;
	-o-animation:linear marqueelike 20s infinite ;
	-ms-animation:linear marqueelike 20s infinite ;
	animation:linear marqueelike 20s infinite ;
	margin-left:-100%;
	padding:0 5px;
	text-align:center;
	height:50px;

}
.defile:after {
	content:attr(data-text);
	position:absolute;
	white-space:nowrap;
	padding-left:10px;
}

@-webkit-keyframes marqueelike {
	0%, 100% {margin-left:0;}
	99.99% {margin-left:-100%;}
 }
@-moz-keyframes marqueelike {
	0%, 100% {margin-left:0;}
	99.99% {margin-left:-100%;}
 }
@-o-keyframes marqueelike {
	0%, 100% {margin-left:0;}
	99.99% {margin-left:-100%;}
 }
@-ms-keyframes marqueelike {
	0%, 100% {margin-left:0;}
	99.99% {margin-left:-100%;}
 }
@keyframes marqueelike {
	0%, 100% {margin-left:0;}
	99.99% {margin-left:-100%;}
 }

@media only screen and (max-width: 860px) {
.defileParent {
	display: block;
	margin: 1em auto;
	overflow: hidden;
/*	position: relative;*/
	table-layout: fixed;
	width: 200%;
}
/*intervention sur le texte defilant */
.defile {
	display:block;
	-webkit-animation:linear marqueelike 15s infinite ;
	-moz-animation:linear marqueelike 15s infinite ;
	-o-animation:linear marqueelike 15s infinite ;
	-ms-animation:linear marqueelike 15s infinite ;
	animation:linear marqueelike 15s infinite ;
	margin-left:-100%;
	padding:0 5px;
	text-align:left;
	height:50px;
}




    </style>

        <title>Inscription</title>

	</head>
	<?php
include "include/header.php";
include "include/menu.php";

?>
   <!--Formulaire d'inscription -->

<div>


 <div class="container-fluid">
              <h2> <div class="defileParent">
<span  class="defile" data-text=" Formulaire d'inscription "></span></div> </h2>



		<div class="container">
			<div class="row">
				<div class=" col-sm-12 shadow-lg p-3 mb-5 bg-white rounded" style="text-align:center;">
					<!--Formulaire d'inscription -->
					<form method='POST' name='form'>
						<div class="col-sm-12 shadow-lg p-3 mb-5 bg-white rounded">
						    <label for="nomcli">Nom</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type='text' value='Entrez votre nom' name='nomcli'><br>
							<label for='prenomcli'>Prenom</label>&nbsp;&nbsp;
							<input type='text' value='Entrez votre prénom' name='prenomcli'>
							<br> </div>
						<div class="col-12 shadow-lg p-3 mb-5 bg-white rounded">
							<div class="col-sm-12">
								<label for='Adressecli'>Adresse</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<input type='text' value='Entrez votre adresse' name='Adressecli'> </div>
							<div class="col-sm-12">
								<label for='CPcli'>Code Postal</label>
								<input type='text' value=' Entrez votre code postal ' name='CPcli'>
								<label for='Villecli'>Ville</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<input type='text' value='Entrez votre ville' name='Villecli'>
							</div>
							<div class="col-sm-12">
								<label for='Payscli'>Pays</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<input type='text' value='Entrez votre pays' name='Payscli'>
							</div>
							<br> </div>
						<div class="col-sm-12  shadow-lg p-3 mb-5 bg-white rounded">
							<div class="col-sm-12">
								<label for='fixecli'>Telephone</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<input type='text' value='Telephone fixe' name='fixecli'>&nbsp;&nbsp;&nbsp;
								<label for='GSMcli'>Portable</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<input type='text' value='Numéro de portable' name='GSMcli'>
							</div>
							<div class="col-sm-12">
								<label for='emailcli'>Email</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<input type='text' value='Entrez votre email' name='emailcli'>
							</div>
							<br> </div>

						<br>
						<br> Nom utilisateur
						<input type="text" value="user" name="user"> Mot de passe
						<input type="password" value="passw" name="passw">
						<br>
						<input type='text' name='action' value='save' hidden>
						<br>
						<br>
						<input type='submit' onclick="clearscreen()" name='submitcli' value='Sauvegarder' class='btn btn-info col-sm-6'><a href='connexion.php' class='btn btn-danger col-sm-6'>Annuler</a> </form>
				</div></div></div>
				<?php	if (!empty($_POST['submitcli'])) {
    //ajout d'un utilisateur

    $req2 = 'INSERT INTO clients set idcli = NULL, nom_utilisateur = :user, mot_de_passe = :passw, nomcli = :nomcli, prenomcli = :prenomcli, Adressecli = :Adressecli, CPcli = :CPcli, Villecli = :Villecli,Payscli = :Payscli, fixecli = :fixecli,GSMcli = :GSMcli, emailcli = :emailcli, niveau = :niveau';

    $query = $pdo->prepare($req2, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $query->execute(array(
        ':user' => $_POST['user'],
        ':passw' => md5($_POST['passw']),
        ':nomcli' => $_POST['nomcli'],
        ':prenomcli' => $_POST['prenomcli'],
        ':Adressecli' => $_POST['Adressecli'],
        ':CPcli' => $_POST['CPcli'],
        ':Villecli' => $_POST['Villecli'],
        ':Payscli' => $_POST['Payscli'],
        ':fixecli' => $_POST['fixecli'],
        ':GSMcli' => $_POST['GSMcli'],
        ':emailcli' => $_POST['emailcli'],
        ':niveau' => "clients",
    ));
    echo 'le compte utilisateur a été ajouté ';
    echo "<script type='text/javascript'>document.location.replace('connexion.php');</script>";
}
?>

				<?php
include "include/footer.php";
?>
					<script>
						function clearscreen() {
							console.clear();
						}
					</script>