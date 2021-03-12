<!doctype html>
<html lang="fr">

<head>


    <meta charset="utf-8">
    <!-- importer le fichier de style -->
    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />



    
<title>Accueil</title>

</head>

<body>

    <?php
    include("include/header.php"); 
    include("include/menu.php");
    require_once("include/connect_mysql.php");
    ?>
    

    

    
        <div id="container">
            <!-- zone de connexion -->

<!--formulaire de connexion pour clients et Admin-->
            <form method="post" action="login_submit.php">
                <h2>Connexion à l'espace membre :<br /></h2> Login : <input type="text" name="username" value="<?php if (isset($_POST['username'])) echo htmlentities(trim($_POST['username'])); ?>"><br />
                Mot de passe : <input type="password" name="password" value="<?php if (isset($_POST['password'])) echo htmlentities(trim($_POST['password'])); ?>"><br />
                <input type="submit" name="connexion" value="Connexion">
                <br>
                <a href="inscription.php">Vous inscrire</a>
            </form>

            <?php
            if (isset($erreur)) echo '<br /><br />',$erreur;
            ?>
        </div><br>
        <!--    Debut Footer  /-->
        <?php 
        include("include/footer.php");
        ?>
        <!--  FIN FOOTER-->
    </body>

    </html>
