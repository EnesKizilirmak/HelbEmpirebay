<?php

$sDebutHtml = <<<EOT
<!DOCTYPE html>
<html>
    <head>
      	<meta charset="UTF-8>
		  
	<meta name="viewport"content="width=device-width, initial-scale=1.0">
	<title>Atelier Empire Bay</title>
	<link rel="stylesheet"">
	<link rel="stylesheet" href="https://creativecommons.org/licenses/by/4.0/">
	<FONT face="Calibri">
    </head>
   

EOT;

$sBody = '';

$sFinHtml = <<<EOT
    </body>
</html>
EOT;

	// <!-- Barre de navigation -->
	$sBody.= '<nav>';
    $sBody.= '<h2><a href="Page_acceuil.php"><img src="images\Logo_Empire_bay.png" alt="Clique sur le logo pour aller à la page qui sommes nous ? width="200" height="150" " /></a></h2>';
	$sBody.= '</nav>';
	// <!-- Fin de la barre de navigation -->
	
	$sBody.= <<<EOT
	
	<article>
		
	<a id="quisommenous"></a>
	<summary><center><h1>Qui sommes-nous ?</h1></center>
	</summary>
	<b><p> Bienvenue sur notre site de l'Atelier Epmire Bay.</p> </b>

	
	<p>Moi je suis le chef de ce garage , <b> Mr Vito SCALETTA ! </b></p>
	<img src="images/chef.jpg" width="300" height="300">
	<p>Le garage  <b>Atelier Empire Bay  </b>vous accueille et vous conseille pour l’entretien et la réparation de votre véhicule.<br>
	Attentif à la qualité de nos prestations et services automobiles, le garage  <b>Atelier Empire Bay  </b>se positionne sur <br> des critères rigoureux de savoir-faire et de compétences.
	Nous prenons en charge votre véhicule pour tous les <br> types de prestations carrosserie, peinture, mécanique de votre voiture ainsi que la réparation et le remplacement <br>
	de votre pare-brise et autre élément de vitrage. Nous réalisons toutes les formalités administratives d’assurance <br> et garantissons votre mobilité.<br><br>
	

	<h3>Nos prestations :</h3>


	– Entretien et réparation d'automobiles toutes marques <br>
	– Révision<br>
	– Recharge climatisation<br>
	– Carrosserie et Peinture<br>
	– Vente de véhicules d'occasion<br>
	– Remplacement pare brise.<br>
	– Pneumatique<br>
	

	
	<br><br>
	</p>
	<ul>
	<li><b>Enes KIZILIRMAK</li>
	<div class='Image_Page_info'>
	<img src="images/team1.jpg" width="200" height="200"><br>
	<br><li>Berkay FINDIK</li>
	<img src="images/team2.jpg" width="200" height="200"><br>
	<br><li>Dzhan HASAN</li>
	<img src="images/team3.jpg" width="200" height="200"><br>
	<br><li>Muhammet DOGAN</li></b>
	<img src="images/team4png.jpg" width="200" height="200"><br>
	</div>
	</ul>

	</FONT>
	
	
	</article>
EOT;	
	
//affichage 
echo $sDebutHtml.$sBody.$sFinHtml;