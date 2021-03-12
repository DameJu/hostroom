<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
     <!-- affichage correct sur tout support -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!--    Font awesome-->
    <!--    https://fontawesome.bootstrapcheatsheets.com/#-->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    
    
    
    <title></title>
</head>
<style>
#img{transition:0.5s;} /* durée de l'animation en secondes*/
#img:hover{transform : scale(1.2);} /* Zoom de l'image. La taille normale est 1 */
  
    </style>
<body>
  <div id="carouselExampleFade" class="glider" data-ride="carousel"> <div class="carousel-inner"> <center><div class="carousel-item active"> <img id="img" class="d-block w-100"  src="images/7.jpg"  alt="First slide"> </div> <div class="carousel-item"> <img id="img" class="d-block w-100" src="images/header50.jpg"  alt="Second slide"> </div> <div class="carousel-item"> <img id="img" class="d-block w-100" src="images/header51.jpg"  alt="Third slide"> </div></center> </div> </div><br>
</body>
   <script>
       
    new Glider(document.querySelector('.glider'), {
  slidesToShow: 5,
  slidesToScroll: 1,
  draggable: true,
  dots: '.dots',
  arrows: {
    prev: '.glider-prev',
    next: '.glider-next'
  }
});
    
    
    
    </script> 





</html>

           
       
           
           
           
          

