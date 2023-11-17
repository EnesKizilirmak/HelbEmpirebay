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
<body>
<nav>
<h2><a href="Page_acceuil.php"><img src="images\Logo_Empire_bay.png" alt="Clique sur le logo pour aller à la page qui sommes nous ? width="200" height="150" " /></a></h2>	</nav>
<section>
	<div class="container text-center mt-5 py-5">
			<h3>Révision</h3>
			<hr>
			
		</div>
	
	<div class="card" style="width: 18rem; text-center col-lg-3 col-md-4 col_12">
  <img src="images/revision.png" class="card-img-top" width="200" height="150">
  <div class="card-body">
    <h5 class="card-title">Révision</h5>
    <p class="card-text">Indispensable, la révision de votre véhicule est un point essentiel à respecter dans le carnet d'entretien de votre auto ! </p>
    <a href="Page_rdv.php" class="btn btn-primary">Prendre rendez-vous</a>
  </div>
</div>

<div class="container text-center mt-5 py-5">
			<h3>Réparation</h3>
			<hr>
			
		</div>

<div class="card" style="width: 18rem; text-center col-lg-3 col-md-4 col_12">
  <img src="images/reparation.png" class="card-img-top" width="200" height="150">
  <div class="card-body">
    <h5 class="images/card-title">Réparation</h5>
    <p class="card-text">Un problème avec votre voiture ? Obtenez gratuitement un devis pour vos réparations auto. </p>
    <a href="Page_rdv.php" class="btn btn-primary">Prendre rendez-vous</a>
  </div>
</div>

<div class="container text-center mt-5 py-5">
			<h3>Dépannage</h3>
			<hr>
			
		</div>

<div class="card" style="width: 18rem; text-center col-lg-3 col-md-4 col_12">
  <img src="images/depannage.png" class="card-img-top" width="200" height="150">
  <div class="card-body">
    <h5 class="card-title">Dépannage</h5>
    <p class="card-text">Besoin de dépannage ? Prenez rendez-vous ou appellez-nous en URGENCE au 0483 53 80 185 !</p>
    <a href="Page_rdv.php" class="btn btn-primary">Prendre rendez-vous</a>
  </div>
</div>
</div>
<br>
<div class="urgence">
<a href="https://www.google.be/search?q=num%C3%A9ro+d%C3%A9pannage+auto&newwindow=1&sxsrf=APq-WBvXZsYEwcIVQKDjzFtSATEz48GW7Q%3A1649205134870&source=hp&ei=jt9MYornMcuZkwXflYn4DQ&iflsig=AHkkrS4AAAAAYkztnj-elkJwO3pV2utYeksTU22Uyl7Q&ved=0ahUKEwiK5uPxl_72AhXLzKQKHd9KAt8Q4dUDCAc&uact=5&oq=num%C3%A9ro+d%C3%A9pannage+auto&gs_lcp=Cgdnd3Mtd2l6EAMyBQgAEIAEMgUIABCABDIJCAAQyQMQFhAeMgYIABAWEB4yBggAEBYQHjIGCAAQFhAeMgYIABAWEB4yBggAEBYQHjICCCYyAggmOgYILhAnEBM6BAgjECc6EQguEIAEELEDEIMBEMcBENEDOgsILhCABBDHARDRAzoOCC4QgAQQxwEQ0QMQ1AI6EQguEIAEELEDEIMBEMcBEKMCOgsIABCABBCxAxCDAToGCCMQJxATOgQIABBDOgoILhDHARDRAxBDOg4ILhCABBCxAxDHARCvAToLCC4QgAQQxwEQrwE6BwguENQCEEM6BwgAELEDEEM6BwgAEMkDEEM6CAgAEIAEELEDOgoIABCxAxCDARBDOgoIABCABBBGEPsBUABYmEVg41NoAHAAeACAAU-IAdgJkgECMjGYAQCgAQE&sclient=gws-wiz" class="btn btn-danger">URGENCE</a>


<div/>

	
	</section>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>




EOT;

$sBody = '';


$sFinHtml = <<<EOT

 </body>
</html>
EOT;
//affichage 
echo $sDebutHtml.$sBody.$sFinHtml;