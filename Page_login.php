<?php
	session_start();
	require_once('Page_connectionDB.php');

//Structure HTML
$sDebutHtml = <<<EOT
<!DOCTYPE html>
<html>
	<head>
		
		<link rel="stylesheet" href="Style2.css">
		

		<title>Page de Login</title>
		<meta charset="utf-8" />
	
	</head>
	<body>
EOT;

$sBody = '';
	
$sFinHtml = <<<EOT

	</body>
</html>
EOT;

//Creation de Formulaire 
$sFormulaire= <<<EOT

	<form class="box" method="post" action="Page_login.php">
	<h2><a href="Page_info.php"><img src="images\Logo_Empire_bay.png" alt="Clique sur le logo pour aller à la page qui sommes nous ? width="200" height="150" " /></a></h2>

	<h1 class="box-title">Connectez-Vous ! </h1><br><br><br>
	 	<table>

			<tr>
				<td><input type ="text" class="box-input" name="login" placeholder="Votre login" required> <br></td>
			</tr>

			<tr>
				<td><p><input type ="password" class="box-input" name="password" placeholder="Votre Mot de passe" required> <br></td></p>
			</tr>

			
			<tr>
				<p><td><input type = "submit" name="auth" value="Se connecter" class="box-button"></td></p>
			</tr>

			<tr>
				<p><td><input type="reset" name="reset" value="Effacer" class="box-reset" /></td></p>
			</tr>


			

		</table>
		<br> <p class="box-register"> <a href="Page_register.php"> Vous n'avez pas de compte ?</a></p>
	</form>


	
EOT;



$sBody.=$sFormulaire;


// Action 
$sMessageErreur='';

//Deconnection de la page d'acceul vers la page login
if(isset($_GET['logout']))
{
	//Destruction de la session 
	session_destroy(); 
	header('Location: Page_login.php');
}

if(isset($_SESSION['auth'])) 
{
	header('Location: Page_acceuil.php');
}

if(isset($_POST['auth']))
{	
	if (!empty($_POST['login']) AND !empty($_POST['password'])) 
	{
	
		try
		{
			global $dbh;
		$sRequest ='SELECT `login`, `password` FROM `utilisateurs` WHERE login=:login AND password=:password';
		$stmt = $dbh->prepare($sRequest);
		$stmt->bindValue(':login',$_POST['login'],PDO::PARAM_STR);
		$stmt->bindValue(':password',$_POST['password'],PDO::PARAM_STR);
		$stmt->execute();

		if($stmt->rowCount() == 1)
		{
			// if ($utilisateur = $stmt->fetch(PDO::))
			$sMessageErreur = 'authentification reussie';
			$_SESSION['auth'] = $_POST['login'];
			header('Location: Page_acceuil.php');
		}

		else // Mauvais login/pass on affiche $sMessageErreur
		{
			$sMessageErreur='Mauvais login ou password';
		}

	}
		catch (PDOException $e)
		{
			echo 'Message : '.$e->getMessage();
		}

	}

	else
	{
		//message erreur affiche form
		$sMessageErreur='Veuillez remplir les 2 champs !';
	}
}


else
{
	//Affiche form 
} 

$sBody.=$sMessageErreur;


//affichage 
echo $sDebutHtml.$sBody.$sFinHtml;
