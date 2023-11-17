<?php

//Contenu
session_start();

if(isset($_SESSION['auth'])) 
{
	//on est connecté

	$sDebutHtml = <<<EOT
	<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8" />
			<link rel="stylesheet" href="Style2.css">
			<link rel="stylesheet" href="Header.css">

			<title>Page d'acceuil</title>
			<div class='logoAcceuil'>
			<h2><a href="Page_info.php"><img src="images\Logo_Empire_bay.png" alt="Clique sur le logo pour aller à la page qui sommes nous ?  "></a></h2>
			
			
			</div>
			
		</head>

		
		<body>

	
		<script>
	function myFunction() {
	  var x = document.getElementById("myMenu");
	  if (x.className === "header_menu") {
		x.className += " responsive";
	  } else {
		x.className = "header_menu";
	  }
	}

	function theFunction () 
	{
		// return true or false, depending on whether you want to allow the `href` property to follow through or not
	   }
	</script>

		<div class="header"> 
		<div class="header_texture">
		<div class="container"></div>
			<div class="header_ensemble">
				<div class="header_titre">
					<h1 class="header_logo-titre"> Atelier Empire Bay </h1>
				</div>
				<div class="header_menu" id="myMenu">
				
					<a href="Page_login.php" class="active"><i class= "fas fa-home" onclick="return theFunction();"></i> Acceuil</a>
					<a href="Page_services.php" ><i class="	fa fa-automobile"></i></i> Services </a>
					<a href="Page_Info.php" ><i class="	fa fa-info-circle"></i></i> Info </a>

					<a href="Page_tarif.php" ><i class="fa fa-money-bill-alt"></i></i> tarifs </a>
					<a href="Page_rdv.php" ><i class="fas fa-handshake"></i></i> Rendez-vous </a>
			


					<a href="Page_Contact.php" ><i class="fas fa-phone"></i> Contact</a>
					<a href="Page_logout.php"><i class="fas fa-door-open"></i> Déconnexion</a> 
					<a href="javascript:void(0);" class="icon" onclick="myFunction()">
						<i class="fa fa-bars"></i>
					  </a>
				</div>
				<div class="header_menu-toggle">
					<span class="header_toggle-logo"></span>
				</div>
			</div>
			<div class="header_grostitre">
				<h1 class="TitreHome"> Services & Entretiens  </h1></br>
				<a href="Page_rdv.php"class="VoirNouveauté">Prendre un rendez-vous </a>          
			</div>
		</div>
	</div>

	EOT;

	$sBody = '';

		
	$sFinHtml = <<<EOT

	<footer>
	<br>Merci d'avoir visité notre site , Nous espérons que notre site Web vous aura été utile ! <br>
	By Enes KIZILIRMAK, Berkay FINDIK, Dzhan HASAN, Muhammet DOGAN  © 2021 - 2022 <br><br>
	</footer>



		</body>


	</html>


	EOT;

	$sBody.='<div class="Bienvenue_auth">';
	$sBody .= '<h2>'.'Bonjour '.$_SESSION['auth'].' !'.'<br /><br></h2>';
	$sBody .='</div>';

	$sBody .="<div class='image1'>";
	$sBody.='<img src="images\acceuilphoto2.png"></div>';
	
	
	


	
	$sBody.= <<<EOT
	
	<article>
		
	<a id="quisommenous"></a><br><br><br><br><br><br><br><br><br>	
	<summary><center><h1>Qui sommes-nous ?</h1></center>
	</summary>
	

	<div class="Scal">
	<p>Moi je suis le chef de ce garage, <b> Mr. Vito SCALETTA ! </b><br>  Bienvenue sur notre site de l'Atelier Epmire Bay. </p>
	</div>
	<div class="Image_info">
	<img src="images/chef.jpg" width="300" height="300">
	</div>
	<div class="Body_Acceuil">
	<h4><p>Le garage  Atelier Empire Bay  vous accueille et vous conseille pour l’entretien et la réparation de votre véhicule.<br>
	Attentif à la qualité de nos prestations et services automobiles, le garage Atelier Empire Bay  se positionne sur <br> des critères rigoureux de savoir-faire et de compétences.
	Nous prenons en charge votre véhicule pour tous les <br> types de prestations carrosserie, peinture, mécanique de votre voiture ainsi que la réparation et le remplacement <br>
	de votre pare-brise et autre élément de vitrage. Nous réalisons toutes les formalités administratives d’assurance <br> et garantissons votre mobilité.<br><br></h4>
	

	<br><br><br><br><br><br><h1>Nos prestations :</h1>


	<h4>– Entretien et réparation d'automobiles toutes marques <br><br>
	– Révision<br><br>
	– Recharge climatisation<br><br>
	– Carrosserie et Peinture<br><br>
	– Remplacement pare brise.<br><br>
	– Dépannage<br></h4><br>
	
	</div>
	
	<br><br>
	</p>
	<ul>

	<div class='Image_info2'>
	<h4><li><b>Enes KIZILIRMAK</li><br>
	<img src="images/team1.jpg" width="200" height="200"><br>
	</div>

	<div class='Image_info3'>
	<br><li>Berkay FINDIK</li><br>
	<img src="images/team2.jpg" width="200" height="200"><br>
	</div>
	
	<div class='Image_info4'>
	<br><li>Dzhan HASAN</li><br>
	<img src="images/team3.jpg" width="200" height="200"><br>
	</div>

	<div class='Image_info5'>
	<br><li>Muhammet DOGAN</li></b></h4><br>
	<img src="images/team4png.jpg" width="200" height="200"><br>
	</div>
	</ul>
	


	</FONT>
	
	
	</article>
	

	<br><br<br><br>
	<br><br><br>
	<br><br>
	<br>
EOT;	


$sBody.='<script src="https://kit.fontawesome.com/4c65222911.js" crossorigin="anonymous"></script>';
    
//<!-- Barre de navigation -->



//<!-- Fin de la barre de navigation -->

$sBody.='<section id="featured" class="my-5 pb-5">';

$sBody.='<div class="container text-center mt-5 py-5">';
$sBody.='<div class="Contactez-nous">';
$sBody.='<h2>CONTACTEZ-NOUS ! </span></span></h2></div><div id="comp-l0ojbbyf" class="_1Q9if" data-testid="richTextElement"><p class="font_9" style="text-align:center; line-height:1.875em; font-size:15px;"><span class="color_15"><a href= "https://www.google.be/maps/place/Haute+Ecole+Libre+de+Bruxelles+Ilya+Prigogine+-+D%C3%A9partement+Technologies+et+Economie/@50.8179124,4.3948173,17z/data=!3m1!4b1!4m5!3m4!1s0x47c3c44494b26cf1:0x4003887dcbd79f04!8m2!3d50.8179124!4d4.397006">Boulevard du Triomphe 1 accès 2, Batiment HA, CP 220/01, 1050 Bruxelles</a>';
$sBody.='</div>';
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script><br><br><br><br><br><br>
EOT;

}



else 
{
	$sBody.='Veuillez vous authentifier !';
	// redirection
	header("Location: Page_login.php");
	
}

// affichage 
echo $sDebutHtml.$sBody.$sFinHtml;

// <br> <a href="Page_login.php?logout">Click for LOGOUT</a><br><br>