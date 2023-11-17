<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Prise de rendez-vous</title>
	<link rel="stylesheet" href="Page_rdv.css">
</head>
<body>

	<nav>
	<h2><a href="Page_acceuil.php"><img src="images\Logo_Empire_bay.png" alt="Clique sur le logo pour aller à la page qui sommes nous ? width="200" height="150" " /></a></h2>	</nav>
	

	<h1>Prise de rendez-vous</h1>
	<p>Pour prendre rendez vous veuillez remplir le formulaire et faire votre demande.</p>
	<form method="post">
		<input type="text" name="nom" placeholder="Nom" required>
		<input type="email" name="email" placeholder="Email" required>
		<input type="text" name="sujet" placeholder="Sujet"required>
		<textarea name="message" placeholder="Message" required></textarea>
		<input type="submit" value="Envoyer le message">
	</form>
	<?php
	
	if (isset($_POST["message"]))
	{
			
		$message = "Ce message vous a été envoyé par :
		Nom : " . $_POST["nom"] . "
		Mail : " .$_POST["email"] . "
		Message : " . $_POST["message"];
		
		$retour = mail("atelierscaletta@hotmail.com", $_POST["sujet"],$message,"From:contact@prisederdv.fr" . "\r\n" . "Reply-to:" . $_POST["email"]);
		if ($retour){
		echo "<p>Votre Email a bien été envoyé.</p>"; 
		}
	}
	
?>
</body>
</html>	