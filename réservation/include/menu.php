<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" href="styles.css">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</head>

<body>
<div class="container-fluid">
<div class="row">
<div class ="col-md-12">


<!-- bg-primary-->

<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-info">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand gauche" href="#">Host room</a>
        <ul class="nav navbar-nav navbar-right">  
                <li class="nav-item droite">
                    <a class="nav-link " href="contact.php "><button>Contact</button></a>
                    </li>
                    
        
                <li class='nav-item droite'>
<!--                  si la session est activée alors bouton deconnexion sinon connexion-->
                   <?php 
                    if(session_id()  ) {echo"<a class='nav-link' href='deconnexion.php'><button>Deconnexion</button></a>";
                    }else
{echo"<a class='nav-link' href='connexion.php'><button>Connexion</button></a>";}?>
                    
                    </li>
            
            </ul>
            
        </div>
    </nav>
<!--End of bg-primary-->




</div>
    </div></div>
</body>
</html>

