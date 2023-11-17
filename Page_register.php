<?php

require_once('Page_connectionDB.php'); 

$sDebutHtml = <<<EOT
<!DOCTYPE html>
<html>
	<head>
		<title>Page d'inscription </title>
		<link rel="stylesheet" href="Style3.css">
		<meta charset="utf-8" />
	</head>
	<body>
EOT;

$sBody = '';
$sMessageErreur = '';

$sFinHtml = <<<EOT
	</body>
</html>
EOT;

//Contenu 
$sBody .= <<<EOT

		<form method="post" action="" class="Rbox" >
		<h2><a href="Page_acceuil.php"><img src="images\Logo_Empire_bay.png" alt="Clique sur le logo pour aller à la page qui sommes nous ? width="200" height="150" " /></a></h2>
		<br><br>
		<h1 class="Rbox-title">Rejoignez-vous ! </h1>
		
		<table>
				<tr>
					<td><input type="text" name="login" class="Rbox-input" placeholder="Entrez un Login" required/></td><br>
				</tr>

				<tr>
					<td><input type="email" name="email" class="Rbox-input" placeholder="Entrez votre e-mail" required ></td><br>
				</tr>

				<tr>
					<td><input type="password" name="password" class="Rbox-input"  placeholder="Votre Mot de passe" required> <br></td></p>
				</tr>

				<tr>
					<td><input type="password" name="password2" class="Rbox-input" placeholder="Confirmez Votre Mot de passe" required> <br></td></p>
				</tr>
				
				<tr>
					<td><input type="submit" name="confirmation" value="S'inscrire" class="Rbox-button ></td>
					
				</tr>

				<tr>
					<td><input type="reset" name="reset" value="Effacer" class="Rbox-reset"></td>
				</tr>

			</table>
			<br> <p class="box-register"> <a href="Page_login.php"> Vous avez déja un compte ?</a></p>
		</form>
EOT;



if(isset($_POST['confirmation']))
{
	
	if (isset($_POST['login'])			AND isset($_POST['email']) 
										AND isset($_POST['password']) 
										AND isset($_POST['password2']))
	{
		if($_POST['password'] == $_POST['password2']	)
		{
			$sQuery ='SELECT * FROM `utilisateurs` WHERE login=:login';
			$stmt = $dbh->prepare($sQuery);
			$stmt->bindParam(':login', $_POST['login'],PDO::PARAM_STR);
			if(!$stmt->execute())
			{
				$sBody .='Erreur Execute </br>';
			}
		
			else 
			{
				$iNbResultat =$stmt->rowCount();
				if($iNbResultat==0)
				{
					$sQuery ='INSERT INTO utilisateurs (id, email, login, password) VALUES (:id, :email, :login, :password )';
					$stmt = $dbh->prepare($sQuery);
					$stmt->bindParam(':id', $_POST['id'],PDO::PARAM_STR);
					$stmt->bindParam(':email', $_POST['email'],PDO::PARAM_STR);
					$stmt->bindParam(':login', $_POST['login'],PDO::PARAM_STR);
					$stmt->bindParam(':password', $_POST['password'],PDO::PARAM_STR);

					if($stmt->execute() == false)
					{
						$sBody .='Erreur execute';
					}
					else 
					{
						$sBody .='Utilisateur ajouté à la base de données <br />';
					}
				}
				else 
				{
					$sBody .='Le login est déja utilisé !!';
				}
			}
		}
		else
		{
			$sBody .=' Les Mots de passes pas identiques ';
		}	
	}
}

$sBody.='<br><br><br>Attention le login doit être absolument unique en revanche, vous pouvez réutiliser votre email !';
// affichage 
$sBody .= $sMessageErreur;
echo $sDebutHtml.$sBody.$sFinHtml;
