<?php
// On active les sessions :
	session_start();
// On detruit les sessions :
	unset($_SESSION['username']);unset($_SESSION['password']);
 session_destroy();
// On redirige le visiteur vers la page désirée :
	echo "<script type='text/javascript'>document.location.replace('connexion.php');</script>";
	exit();
?>