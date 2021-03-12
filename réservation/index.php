<!DOCTYPE html>
<html>

<head>
    <style></style>
    <!DOCTYPE html>
    <html lang="">

    <head>
       <!-- Required meta tags -->
    <meta charset="utf-8">

    <!-- affichage correct sur tout support =responsive, niveau de zoom à 1 -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   >

    <!--    Font awesome-->
    <!--    https://fontawesome.bootstrapcheatsheets.com/#-->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

        <title></title>
        <style>
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
	margin: 3em auto;
	overflow: hidden;
	position: relative;
	table-layout: fixed;
	width: 200%;
}

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
	height:25px;
}
}

        #img{transition:0.5s;} /* durée de l'animation en secondes*/
#img:hover{transform : scale(1.2);} /* Zoom de l'image. La taille normale est 1 */




        </style>
    </head>


<body>

<?php

include "include/menu.php";

?>

    <div class= "container-fluid">
        <div class="row">

 <div  class="col-md-9"  >

<!--    texte dans l encadré bleu sous le header slide      -->

                  <h2>  <center><div class="defileParent">
<span class="defile"
data-text=" Bienvenue au château d'Equirre ">

</span>
</div></center></h2>

                <p class="shadow-lg p-3 mb-5 bg-white rounded  "><strong><i>Camping familial </i> </strong>en pleine nature du Pas de Calais – convivialité, tranquillité, loisirs.
                    Situé dans l’arrière pays de la Côte d’Opale, le camping-caravaning du château d’Equirre s’étend sur 8 hectares d’un magnifique parc arboré.
                    Location d’emplacement de camping à l’année ou à la nuitée, vous pouvez choisir votre emplacement pour votre mobil-home, votre caravane, votre camping-car ou votre toile de tente.</p>
              <center><img id="img" src="images/hist%20(5).jpg" class="img-thumbnail" alt="Responsive image" width="90%"> </center></div>
<!--localisation situation geographique ;encadré bleu à droite de la page-->

            <div class="col-md-3" class="shadow-lg p-3 mb-5 bg-white rounded  ">

                <center><h2>Où </h2></center><br>
                <p>Situé dans le pays du Ternois dans le Pas de Calais dans la région des Hauts de France.<br></p>
                <p>A 85 Kilomètres de Lille, 10km de Fruges
                    Pour les amateurs de randonnées, le paysage du Ternois vous ravira par ses vallons, sa diversité et sa beauté.


                <p><br><iframe class="carte" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2539.2067522544007!2d2.2330653!3d50.4744946!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47dd0817ba8f06fd%3A0x57995a342ff3c491!2sCamping+du+Ch%C3%A2teau+d&#39;Equirre!5e0!3m2!1sfr!2sfr!4v1560074750429!5m2!1sfr!2sfr" width="100%" height="350px" frameborder="0" style="border:0" allowfullscreen></iframe></p>

            </div></div></div>
        <br>
<!--        debut des 5 cards mobil-homes , gite, etangs, salle-->
        <div class= "container-fluid">
        <div class="row">

                       <div class="card-group">

                        <div class="col-lg-3 col-md-12 col-sm-12">
                    <!--           Carte 1-->
                    <div class="card text-white bg-info mx-1">
                        <img id="img"src="images/mobil1.jpg" class="img-thumbnail"class="card-img-top" alt="Responsive image">

                        <div class="card-body">
                            <h5 class="card-title">Nos mobil-homes</h5>
                            <p class="card-text">Le meilleur des hébergements avec le meilleur des services. Profitez d'un mobil-home avec des équipements modernes pour un confort optimal.</p><br>
                            <a href="#" class="btn btn-primary d-block">Nos mobil-homes</a>
                        </div>
                            </div></div>

                    <!--               carte 2-->
                    <div class="col-lg-3 col-md-12 col-sm-12">
                    <div class="card text-white bg-info  mx-1">
                        <img id="img" src="images/1.jpg" class="img-thumbnail"class="card-img-top" alt="Responsive image">

                        <div class="card-body">
                            <h5 class="card-title">Gite grande capacité</h5>
                            <p class="card-text">Grand gîte familial de 3 grandes chambres, il peut accueillir jusqu’à 10 personnes.
Perché sur le toit du château d’Equirre, vous passerez un séjour agréable dans le confort et le calme.</p>
                            <a href="#" class="btn btn-primary d-block">Notre Gite</a>
                        </div>
                           </div></div>

                    <!--               carte 3-->
                    <div class="col-lg-3 col-md-12 col-sm-12">
                    <div class="card text-white bg-info mx-1">
                        <img id="img"src="images/salle1.%20(8).jpg" class="img-thumbnail"class="card-img-top" alt="Responsive image">

                        <div class="card-body">
                            <h5 class="card-title">salle de réception</h5>
                            <p class="card-text">3 salles de réception disponibles à la location.
Pour les mariages, baptêmes, communions, séminaires, elles peuvent accueillir de 20 à 160 convives.</p><br>
                            <a href="#" class="btn btn-primary d-block">salle de réception</a>
                        </div>
                           </div></div>
<!--               carte 4-->
                   <div class="col-lg-3 col-md-12 col-sm-12">
                    <div class="card text-white bg-info  mx-1">
                        <img id="img"src="images/etang.jpg" class="img-thumbnail" class="card-img-top" alt="Responsive image">

                        <div class="card-body">
                            <h5 class="card-title">Etangs</h5>
                            <p class="card-text">Trois parcours de pêche pour profiter de votre activité préférée : la pêche à la truite et la pêche au blanc.Sur place, vous pouvez aussi profiter des installations pour prendre vos repas</p>
                            <a href="#" class="btn btn-primary d-block">Etangs</a>
                        </div>
                    </div>
                           </div>

    </div></div></div><br><br>
<!--            fin des cards         -->

                    <!--       debut du 1 slide-->

       <div id="carousel-with-lb" class="carousel slide carousel-multi-item" data-ride="carousel">  <!--Indicators-->
        <ol class="carousel-indicators"> <li data-target="#carousel-with-lb" data-slide-to="0" class="active secondary-color"></li> <li data-target="#carousel-with-lb" data-slide-to="1" class="secondary-color"></li> <li data-target="#carousel-with-lb" data-slide-to="2" class="secondary-color"></li> </ol> <!--/.Indicators--> <!--Slides and lightbox--> <div class="carousel-inner mdb-lightbox" role="listbox"> <div id="mdb-lightbox-ui"></div>
        <!-- DEBUT 1 SLIDE-->
          <div class=" carousel-item active ">  <figure class="col-md-4 d-md-inline-block">  <img id="img"src="images/jeux.jpg"class="img-thumbnail" class="img-fluid"> </figure><figure class="col-md-4 d-md-inline-block"> <img id="img"src="images/jeux1.jpg" class="img-thumbnail"class="img-fluid">  </figure><figure class="col-md-4 d-md-inline-block"> <img id="img" src="images/jeux3.jpg" class="img-thumbnail"class="img-fluid">  </figure>

          </div>
<!--
           <!--debut slide2-->
           <div class="carousel-item">  <figure class="col-md-4 d-md-inline-block">  <img id="img" src="images/jeux4.jpg"class="img-thumbnail" class="img-fluid"> </figure><figure class="col-md-4 d-md-inline-block"> <img id="img"src="images/jeux5.jpg" class="img-thumbnail"class="img-fluid">  </figure><figure class="col-md-4 d-md-inline-block"> <img id="img" src="images/jeux6.jpg" class="img-thumbnail"class="img-fluid">  </figure>

          </div>


<!--debut du slide 3-->
           <div class="carousel-item">  <figure class="col-md-4 d-md-inline-block">  <img id= "img"src="images/header3(3).jpg"class="img-thumbnail" class="img-fluid"> </figure><figure class="col-md-4 d-md-inline-block"> <img src="images/header1.jpg" class="img-thumbnail"class="img-fluid">  </figure><figure class="col-md-4 d-md-inline-block"> <img id="img" src="images/etangs-de-peche-chateau-equirre-1600x1074.jpg" class="img-thumbnail"class="img-fluid">  </figure>

          </div>

            </div>  </div>
<!-- fin du slide -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>

  <?php
include "include/footer.php";

?>


        </body>
    </html>


