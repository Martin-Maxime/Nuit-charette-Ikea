<meta charset="utf-8">

<?php

if(isset($_POST['submit']))
{
	$nom = htmlspecialchars(trim($_POST['nom']));
	$email = htmlspecialchars(trim($_POST['email']));
	$password = htmlspecialchars(trim($_POST['password']));
	$repeatpassword = htmlspecialchars(trim($_POST['repeatpassword']));

	if ($nom&&$email&&$password&&$repeatpassword)
	{
		if(strlen($nom)>=4)
		{
			if(strlen($password)>=6)
			{
				if($password==$repeatpassword)
				{

				$db = new mysqli( 'localhost', 'root', '', 'game' );
				$query = mysqli_query($db, "INSERT INTO userdata VALUES ('','$nom','$email','$password','','')");
                    require('config_sql.php');
                $sql01= "SELECT id FROM userdata WHERE nom='$nom' AND email='$email' AND password='$password'";
                if (!($result=$db-> query($sql01))){
                        die('erreur SQL');
                }
                $aow = $result-> fetch_assoc();
                    echo $aow['id'];
                $sql102 = "INSERT INTO ressources VALUES ('', '".$aow['id']."', '0', '0', '0', '0', '0', '0', '0', '100', '0', '0', '1', '0', '0', '0', '0', '20', '0', '0', '0', '0')";
                if (!($result=$db-> query($sql102))){
                    die('erreur SQL');
                }
                    $sql103 = "UPDATE userdata SET user_id='".$aow['id']."' WHERE id='".$aow['id']."'";
                    if (!($result=$db-> query($sql103))){
                        die('erreur SQL');
                    }

                header("Location: index.php");


				}echo "mot de passe pas identiques";

			} else echo "Mot de passe trop court !!";

		}else echo "Nom trop court !!";
	}
	else echo "Veuillez saisir tout les champs";

}

?>



<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>connexion</title>
</head>
<body>
	<div>
		<h2><A href="index.php" title="Retour a l'acceuil"><IMG src="img/fleche.png"></A></h2>
		<p>Acceuil</p>
	</div>

	<div id="box">

	   	<div id="formulaire">
   	
			<form method="post" action="register.php"
			<p>Votre nom d'utilisateur</p>
			<input type="text" name="nom">
			<p>Votre email</p>
			<input type="text" name="email">
			<p>Votre mot de passe</p>
			<input type="password" name="password">
			<p>Retaper votre mot de passe</p>
			<input type="password" name="repeatpassword"><br><br>
			<input type="submit" name="submit" value="valider">

			</form>
   		 </div>
   	</div>
   </body>
 </html>