<?php
include './header.php';
?>

 <a href="contact.php "><button>Contact</button></a>

<!--si la session est activée alors bouton deconnexion, sinon connexion-->
<?php
if(session_id()) {echo"<a href='deconnexion.php'><button>Deconnexion</button></a>";
                    }else
{echo"<a href='connexion.php'><button>Connexion</button></a>";}
?>            
