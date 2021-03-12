<?php
session_start();
   

        include("include/menu.php");

require_once("include/connect_mysql.php")


       ?>

<?php

 if(isset($_GET["idreserv"])) {
        $idx = $_GET["idreserv"];
    } else {
        $idx=-1;
    }
//	liste les reservations
		echo "<div id='admin'>";
$req = $pdo->query("select `idreserv`, `datedebut`,`datefin`, categorie.genre, clients.nomcli FROM reservation inner join clients on   clients.idcli = reservation.client inner join categorie on categorie.Idcat = reservation.genre order by `datedebut` desc" );?>

<div class="container">
    <div class="row">
    <div class="col-12 col-lg-12 col-md-12 col-sm-12 ">
<!--listes des reservations ADMIN avec Select + While-->
        <h1>Liste des réservations</h1><br>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="text-center">Date debut</th>
                    <th class="text-center">Date fin</th>
                    <th class="text-center">nombre de jours </th>
                    <th class="text-center">Nom client</th>
                    <th class="text-center">Genre</th>
                    <th class="text-center">Action </th>
                </tr>
            </thead>
            <tbody>
                <?php while($data = $req->fetch()): ?>
                <tr>
                     <td class="text-center"><?php $datede = strftime('%d-%m-%Y',strtotime($data['datedebut'])) ; echo $datede; ?></td>
                    <td class="text-center"><?php $datefi  = strftime('%d-%m-%Y',strtotime($data['datefin'])); ;echo $datefi; ?></td>


                    <td class="text-center">
                        <?php 
//  creation d'un intervalle entre deux dates pour signaler le nombre  de nuitées//
		                $date =  new datetime($data["datefin"]);
                        $date2 = new datetime($data["datedebut"]);
		                $diff = $date->diff($date2);
                        $interval =  $diff->format("%a");
                        echo $interval;
		                ?>        
                    </td>
                    <td class="text-center"><?= $data['nomcli'] ?></td>
                    <td class="text-center"><?= $data['genre'] ?></td>
                                <td class="text-center">
<!--           choix entre modifier la reservation ou supprimer-->
                        <a href="admin.php?idreserv=<?= $data['idreserv'] ?>&Action=delete"><button class="btn btn-danger">Supprimer</button></a>
                        <a href="reservation.php?idreserv=<?= $data['idreserv'] ?>"><button class="btn btn-success">Modifier</button></a></td>
                        
                </tr>
                <?php endwhile ?>

            </tbody>
        </table>
    </div>
</div>
</div>
<?php echo"</div>"; $req->closeCursor(); 
                        
if(isset($_REQUEST["Action"])) {

        //l'utilisateur a demandé la suppression de la fiche
        if ($_REQUEST["Action"] == "delete") {

             //Préparation de la requete SQL de suppression
            $sql = 'DELETE FROM reservation WHERE idreserv = :id';

            //on fait matcher les paramètres de notre requete avec nos variables
          $q = array(':id' => $idx);
 $req = $base -> prepare($sql);
 $req -> execute($q);
   
        }
    }
	


 include("include/footer.php");
        ?>
