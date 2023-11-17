<?php

$sDebutHtml = <<<EOT
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8>
	<meta name="viewport"content="width=device-width, initial-scale=1.0">
	<title>Atelier Empire Bay</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://creativecommons.org/licenses/by/4.0/">
	<script src="https://kit.fontawesome.com/4c65222911.js" crossorigin="anonymous"></script>
	</head>

EOT;

$sBody = '';


$sFinHtml = <<<EOT
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </body>
</html>
EOT;

$sBody.='<nav>';
$sBody.='<h2><a href="Page_acceuil.php"><img src="images\Logo_Empire_bay.png" alt="Clique sur le logo pour aller à la page qui sommes nous ? width="200" height="150" " /></a></h2>	</nav>';


  $sBody.=<<<EOT
  <section>
    <center>
      <h3>Tarifs</h3>
   </center>
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
  <div class="carousel-item active">
    <img src="images/devis.jpg" class="d-block w-100" alt="">
    <div class="carousel-caption d-none d-md-block">
      <h5>Devis</h5>
      <p></p>
    </div>
  </div>
  <div class="carousel-item">
    <img src="images/tarifs.jpg" class="d-block w-100" alt="">
    <div class="carousel-caption d-none d-md-block">
      <h5>Tarifs</h5>
      <p></p>
    </div>
  </div>
  <div class="carousel-item">
    <img src="images/depannagetarif.jpg" class="d-block w-100" alt="">
    <div class="carousel-caption d-none d-md-block">
      <h5>Tarifs Dépannage</h5>
      <p></p>
    </div>
  </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Précèdent</span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Suivant</span>
    </button>
      </div>
    </section>

EOT;
  //affichage 
  echo $sDebutHtml.$sBody.$sFinHtml;