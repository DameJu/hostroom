<?php
session_start();
require_once("include/connect_mysql.php");
    
?>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <!-- affichage correct sur tout support =responsive, niveau de zoom à 1 -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  
    <!--    Font awesome-->
    <!--    https://fontawesome.bootstrapcheatsheets.com/#-->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>


<style>
    #img{transition:0.5s;} /* durée de l'animation en secondes*/
#img:hover{transform : scale(1.2);} /* Zoom de l'image. La taille normale est 1 */
    </style>



</head>
<body>
    <?php



	include("include/menu.php");
	
?>


    <div class=container>
        <div class=row>
            <div class='col-9 ' style='text-align:center;background:#40E5FF;'>
                <h1> Resumé de la Reservation</h1>
                <h4>
                    <?php
 
 $start_time=0;
$end_time=0;
	




	$start_time=strtotime($_REQUEST["start_time"]);



	$end_time=strtotime($_REQUEST["end_time"]);

	
	
$number_nights=(($end_time-$start_time)/86400);?>
                    <div id=logement>



                        <?php
	$date_deb = date('d/m/Y', $start_time );
		$date_f = date('d/m/Y', $end_time );
	



?><?php
$req7 = $pdo->query("select * from clients where idcli = '" . $_SESSION['idcli'] . "'");
$em =$req7->fetch();


		$genres= $pdo->query("select Idcat, genre from categorie where  Idcat='".$_POST['genre']."'");
								 $genre = $genres->fetch();
		echo "<br>";

		
		echo "Vous avez pris ".$number_nights . " nuits du " . $date_deb . " au " . $date_f." pour ";
	echo $_REQUEST["guests"]. " personnes dans un ".$genre['genre']."." ;
   $i = $_REQUEST["guests"];

		 
			$message = $em['nomcli'] . " a pris ".$number_nights . " nuits du " . $date_deb . " au ". $date_f." pour ". $_REQUEST['guests']. " personnes dans un ".$genre['genre']."." ;
          

            ini_set("SMTP", "smtp.orange.fr");
            ini_set("smtp_port", "25"); // sachant que le port ressemblera sûrement à quelquechose comme 8025
            ini_set("sendmail_from", "bigot.catherine@club-internet.fr");

            $headers = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
            $headers .= 'From: ' . $em['emailcli'] . "\r\n" . 'Reply-To: ' . $em['emailcli'] . "\r\n" .'Cc: ' . $em['emailcli'] . "\r\n" . 'X-Mailer: PHP/' . phpversion();
            $maile = "bigot.catherine@club-internet.fr ";
            mail($maile, 'Reservation', $message, $headers);
    


//			Met a jour sur la base  la table reservation	 
	 $result = $pdo->prepare('INSERT INTO reservation (genre, client, datedebut, datefin) VALUES (:genre, :idcli, :date, :datefin)');
		$result->execute(array(
			':genre' =>$_POST['genre'],
		
			':idcli' => $_SESSION['idcli'],
            ':date' => $_REQUEST['start_time'],
  			':datefin' => $_REQUEST['end_time']
			
							  ));
		echo '<br>Reservation ajoutée';
?>
	

			
		<br>un mail vous a été envoyé
               </h4></div>
               <div class='col-3'><img id="img" src='images/pouce.jpg'width=50%></div>
        <br><br><br>
        <!-- retour à la session du client  -->
        	<a href="membres.php?idcli=<?=$_SESSION['idcli'] ?> "><button class='btn btn-success'>Retour</button></a>
		
            </div></div>
    </div> <br>
<?php
 include("include/footer.php")	;	
		
?>
		
	

		
			
			
		
   
            <script src="../js/jquery-3.2.1.min.js"></script>

            
</body>

</html>
