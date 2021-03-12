<?php
    include './page_reservation.php';
    require_once './connect_mysql.php';
?>
  
<div id="container">

<!-- zone de connexion -->
<!--formulaire de connexion pour clients et Admin-->

<form method="post" action="./login_submit.php">
    <h2>Connexion :<br></h2> 
    <p class="texte">Pseudo :</p> 
        <input class="input_res" type="text" name="username" value="
        <?php if (isset($_POST['username'])) echo htmlentities(trim($_POST['username'])); ?>">
<br>
    
   <p class="texte"> Mot de passe : </p>
        <input type="password" name="password" value="
        <?php if (isset($_POST['password'])) echo htmlentities(trim($_POST['password'])); ?>">
<br>
<br>
    <input id="input_centrer" type="submit" name="connexion" value="Valider">
<br>
<br>
    <a class="centrer_lien" href="./inscription.php">Inscription</a>
</form>

<?php
if (isset($erreur)) echo '<br /><br />',$erreur;
?>
</div><br>
        
<?php
    include './footer.php';
?>