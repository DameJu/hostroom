 <!-- affichage correct sur tout support =responsive, niveau de zoom à 1 -->
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<style>
.col-sm-3{
	display: inline-block;
}
</style>


<?php
session_start();
	require_once "include/connect_mysql.php";
	$idsession = $_SESSION['idcli'];
	echo $idsession;
?>

<div class=container>
	<div class=row>
		<br/>
		<div class=col-12>
			<h2>Liste reservation </h2>
<?php $req = $pdo->query("select `idreserv`, `datedebut`,`datefin`, categorie.genre FROM reservation  inner join categorie on categorie.Idcat = reservation.genre   where client = '" . $_SESSION['idcli'] . "'");?>
<table>
	<thead>
            <tr>
                <th class="text-center">Date debut</th>
                <th class="text-center">Date fin</th>
                <th class="text-center">nombre de jours </th>
                <th class="text-center">Genre</th>
            </tr>
    </thead>
    <tbody>
        <?php while ($data = $req->fetch(PDO::FETCH_ASSOC)): ?>
    	    <tr>
                <td class="text-center"><?php $datede = strftime('%d-%m-%Y', strtotime($data['datedebut']));
echo $datede?></td>
                <td class="text-center"><?php $datef = strftime('%d-%m-%Y', strtotime($data['datefin']));
echo $datef?></td>

		      <td class="text-center">
<?php
//  creation d'un intervalle entre deux dates pour signaler le nombre  de nuitées//
	$date = new datetime($data["datefin"]);
	$date2 = new datetime($data["datedebut"]);
	$diff = $date->diff($date2);
	$interval = $diff->format("%a");
	echo $interval;
?>			
				</td>
                <td class="text-center">
				<?=$data['genre']?></td>
                </tr>
                <?php endwhile?>

            </tbody>
        </table>
    </div>
</div>
</div>


<h2>Entrer date de reservation</h2>
<br/>

<!--formulaire choix de chambre  Chambre  -->
<div id=formlog ><h4>Reservation Chambres d'hôtes</h4>
<form action="" method=post  > 
				  </div>
			</div>
			<?php $reponse = $pdo->query("SELECT Idcat , genre  FROM `categorie` where 1");?>
<div class="col-sm-3">
				<strong><?php echo "nombre invites "; ?></strong>
				<br/>
				<div class="input-group">

	<select name="genre" id="genre" class="form-control">
	<?php while ($cat = $reponse->fetch(PDO::FETCH_ASSOC)): ?>

<option value="<?=$cat['Idcat']?>"><?=$cat['genre']?></option>

		<?php endwhile?>

			</select>
	</div></div>
	<input type="submit" name="submit" class="btn btn-primary btn-md" value="rechercher"/>
</form>
<br>
 
 <?php 
 if (!empty($_POST['genre']))
    {
// ecriture de la  liste des reservations de la chambre indiqué ci dessus  
	echo 'Chambre '. $_REQUEST['genre'];
	echo'<table><tr><td> date debut</td><td> date fin</td></tr>' ;
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	 $req = $pdo->query("SELECT * FROM reservation where genre = '". $_REQUEST['genre'] . "'");
	while ($res = $req->fetch(PDO::FETCH_ASSOC)):?>
		<tr><td><?= $res["datedebut"]?></td><td><?= $res["datefin"]?></td></tr>
		<?php endwhile;
		?>
		<br>
		<!-- Validation du formulaire de reservation  -->
		<!-- Validité des dates voir si date de  fin  est bien superieure à la date de début  -->
<script>
		function ValidateForm(form)
{
	if(form.start_time.value=="")
	{
		alert("<?php echo "select_check_in"; ?>");
		return false;
	}

	if(form.end_time.value=="")
	{
		alert("<?php echo "select_check_out"; ?>");
		return false;
	}

	var start_time = Date.parse(form.start_time.value);
	var end_time = Date.parse(form.end_time.value);

	if(start_time>end_time)
	{
		alert("<?php echo "check_in_validation"; ?>");
		return false;
	}

	return true;
}
</script>
<!-- Formulaire reservations de dates et de nombres de clients avec la chambre indiquée ci dessus  -->
<form id=date method="post" action="results.php" onsubmit="return ValidateForm(this)">

<div class="panel panel-default search-result shadow-lg p-3 mb-5 bg-white rounded">

	<div class="panel-body">
		<div class="row">
<!--		choisir nombre d'invités-->

			<div class="col-sm-3">
				<strong><?php echo "nombre "; ?></strong>
				<br/>
				<div class="input-group">
					<select name="guests" id="guests" class="form-control">
						<option value=""><?php echo "select"; ?></option>
						<?php
for ($i = 1; $i <= 8; $i++) {
    echo '<option ' . ($i == 2 ? "selected" : "") . ' value="' . $i . '">' . $i . '</option>';
}
?>

					</select>


					<span class="input-group-addon"><img src="images/user.png"/></span>
<!--					chambre deja choisie dns le premier formulaire  donc celui ci est caché (hidden)-->
				  </div>
			</div>
			<div class=col-sm-3>
			
			<div class="input-group">
					<input  id="chambre" type="text" class="form-control" name="genre" value="<?php echo $_REQUEST['genre']; ?>" hidden>
	</div></div>
<!--			Date debut reservation -->
			<div class="col-sm-3" id="datedeb">
				<strong><?php echo "date "; ?></strong>

					<div class="input-group">
					<input required id="start_time" type="text" class="form-control" name="start_time">
					<span class="input-group-addon"><img src="images/calendar.png"/></span>

				  </div>

			</div>
<!--			Date fin  reservation-->
			<div class="col-sm-3">

				<strong><?php echo "Date Fin reservation" ?></strong>
					<div class="input-group">
					<input required id="end_time" type="text" class="form-control" name="end_time">
					<span class="input-group-addon"><img src="images/calendar.png"/></span>
				  </div>
			</div>
			<div class="col-sm-3"><br>
							<input type="submit" name="submitlog" class="btn btn-primary btn-md" value="rechercher"/>
			</div>
		</div>
	</div>
</div>
</form>
</div>

<?php	
 } else{
	 echo "";
 }
 ?>

<link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css"/ >
<script src="js/jquery.datetimepicker.full.min.js"></script>
<script>
	$('#start_time').datetimepicker({
		format:"m/d/Y",
		formatTime:"",
    	timepicker:0
	}
	);
	$('#end_time').datetimepicker({
		format:"m/d/Y",
		formatTime:"",
		timepicker:0
	});
</script>
<br>
