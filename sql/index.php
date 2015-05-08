 <?php

if(isset($_POST['submit']))
{
	$nom = htmlspecialchars(trim($_POST['nom']));
	$password = htmlspecialchars(trim($_POST['password']));

	if(empty($nom)) 
	{
		echo "Veuiller remplir le champ";

	} else if(empty($password))
	 {
		echo "Veuiller remplir le champ";
	}


	$db = new mysqli( 'localhost', 'root', '', 'game' );
	$login = mysqli_query($db, "SELECT * FROM userdata WHERE nom='$nom' AND password='$password'");
	$rows = mysqli_num_rows($login);
	if($rows == 1)
	{

		echo "Bienvenue <br>".$nom;
        require('config_sql.php');
        $sql00= "SELECT id FROM userdata WHERE nom='$nom'";
        if (!($result=$db-> query($sql00))){
            die('erreur SQL');
        }
        $iow = $result-> fetch_assoc();
        header("Location: accueil.php?id=".$iow['id']."");
	}

	else echo "Probleme";
}

?>


<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>connexion</title>
</head>
<body>

 	<h1>connexion</h1>

	<div id="redirection">
		<h2><a href="register.php">Inscription</a></h2>
	</div>
	<div id="box">
   		<div id="connection">
   			<form method ="post" action="index.php">

			<p>Votre nom</p>
			<input type="text" name="nom" /><br/>
			<p>Votre mot de passe</p>
			<input type="password" name="password" /><br/>

			<input type="submit" name="submit" value="se connecter">

			</form>
 
   		 </div>
   	</div>
</body>
</html>

