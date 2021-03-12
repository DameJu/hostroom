<?php
/*** debut de session ***/
session_start();
require_once("include/connect_mysql.php");
/*** regarde si user_id est deja connecté ***/
if(isset( $_SESSION['user_id'] ))
{
    $message = 'Users is already logged in';
}
/*** regarde si le login et mot de passe sont valides ***/
if(!isset( $_POST['username'], $_POST['password']))
{
    $message = 'login failed';
}
/*** regarde si le login est assez long ***/
elseif (strlen( $_POST['username']) > 20 || strlen($_POST['username']) < 4)
{
    $message = 'incorrect length';
}
/*** regarde si mot de passe est assez long ***/
elseif (strlen( $_POST['password']) > 20 || strlen($_POST['password']) < 4)
{
    $message = 'incorrect length';
}
/*** regarde si le login est en alpha numerique  ***/
elseif (ctype_alnum($_POST['username']) != true) 
{
   
    $message = "Username must be alpha numeric";
}
/*** regardesi le mot de passe rst en alphanumerique  ***/
elseif (ctype_alnum($_POST['password']) != true)
{
        
        $message = "Password must be alpha numeric";
}
else
{
    /*** si nous sommes ici nous l'inserons dans la base de données  ***/
    $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
        /*** codage du mot de passe avec md5 ***/
    $password = filter_var(md5($_POST['password']), FILTER_SANITIZE_STRING);
   

    
        $stmt = $pdo->prepare("SELECT idcli, Niveau, nom_utilisateur, mot_de_passe FROM clients 
                    WHERE  nom_utilisateur = :username AND mot_de_passe = :password ");
        /*** met a jour les parametres ***/
        
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->bindParam(':password', $password, PDO::PARAM_STR, 40);
        /*** execute le select préparé ***/
        $stmt->execute();
        /*** regarde pour un resultat  ***/
        $user_id = $stmt->fetchColumn();
        /*** pas de resultat alors message erreur ***/
        if($user_id == false)
        {
                $message = 'error, please try again later';header('Location: connexion.php');
        }
        /*** si resulat est bon   ***/
       else
        {$_POST['username']= $username;
                /*** met a jour la session ***/
                $_SESSION['idcli'] = $user_id;
         
                /* session admin */
           if ($user_id == "1")
                {
                 header('Location: admin.php');
                }
           /* session clients */
                else if ($user_id != "1")
                {
                    header('Location: membres.php?idcli='. $user_id);
                }
                
                  }
    }
    

?>
<html>
<head>
<title>Connexion</title>
</head>
<body>
<p><?php echo $message; ?>
</body>
</html>