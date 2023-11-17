<?php

	$sDebutHtml = <<<EOT
	<!DOCTYPE html>
	<html>
		<head>
        
	<meta name="viewport"content="width=device-width, initial-scale=1.0">
	<title>Page contact</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://creativecommons.org/licenses/by/4.0/">

	</head>
   
	<body>
	

EOT;

$sBody = '';


$sFinHtml = <<<EOT
    </body>
</html>
EOT;


	$sBody.='<script src="https://kit.fontawesome.com/4c65222911.js" crossorigin="anonymous"></script>';
    
	//<!-- Barre de navigation -->
	
	$sBody.='<nav>';
	$sBody.='<h2><a href="Page_acceuil.php"><img src="images\Logo_Empire_bay.png" alt="Clique sur le logo pour aller à la page acceuil width="200" height="150" " /></a></h2>';
		
	$sBody.='</nav>';
	
	//<!-- Fin de la barre de navigation -->
	
	$sBody.='<section id="featured" class="my-5 pb-5">';
	
	$sBody.='<div class="container text-center mt-5 py-5">';
	$sBody.='<h2>CONTACTEZ-NOUS ! </span></span></h2></div><div id="comp-l0ojbbyf" class="_1Q9if" data-testid="richTextElement"><p class="font_9" style="text-align:center; line-height:1.875em; font-size:15px;"><span class="color_15"><a href= "https://www.google.be/maps/place/Haute+Ecole+Libre+de+Bruxelles+Ilya+Prigogine+-+D%C3%A9partement+Technologies+et+Economie/@50.8179124,4.3948173,17z/data=!3m1!4b1!4m5!3m4!1s0x47c3c44494b26cf1:0x4003887dcbd79f04!8m2!3d50.8179124!4d4.397006">Boulevard du Triomphe 1 accès 2, Batiment HA, CP 220/01, 1050 Bruxelles</a>';
	$sBody.='</span></p></div><div id="comp-l0ojbq4v" class="_1Q9if" data-testid="richTextElement"><p class="font_9" style="text-align:center; line-height:1.875em; font-size:15px;"><span class="color_15">0483 53 80 185</span></p></div>';
		
	$sBody.=<<<EOT
			
		<center>
			<h5>Rejoignez nous sur les réseaux sociaux :</h5><br>
			
			<p><a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></p>
			<p><a href="https://fr-fr.facebook.com/"><i class="fa-brands fa-facebook-f"></i></p>
			<p><a href="https://login.live.com/login.srf?wa=wsignin1.0&rpsnv=13&ct=1650361363&rver=7.0.6737.0&wp=MBI_SSL&wreply=https%3a%2f%2foutlook.live.com%2fowa%2f%3fnlp%3d1%26RpsCsrfState%3dc3191dc4-c82b-a0e1-037a-d2af7fa58d33&id=292841&aadredir=1&CBCXT=out&lw=1&fl=dob%2cflname%2cwld&cobrandid=90015"><i class="fa-solid fa-at"></i></p>
		</center>
			
		
	
	</section>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
EOT;


//affichage 
echo $sDebutHtml.$sBody.$sFinHtml;