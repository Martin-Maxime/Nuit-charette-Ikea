
<?php

$host = 'localhost';
$login = 'root';
$pass = '';
$db = 'game';

$db = new mysqli ($host,$login,$pass,$db);

if (mysqli_connect_errno ()) {
     
     die ("erreur de connexion" . $db -> connect_error);
     
}

?>
