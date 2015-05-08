<?php

session_start();//on démarre la session
var_dump($_SESSION['name']);
var_dump($_SESSION['steps']);



require_once('connect.php');

$id = $_GET['id'];

$sql = "SELECT id, nom, step from userdata where id= $id";

if (!($result=$db-> query($sql))){
    die('erreur SQL');
}
$row = $result-> fetch_assoc();

$_SESSION['name'] = $row['nom'];
$_SESSION['steps'] = $row['step'];

echo "Bienvenue". " " .$_SESSION['name'];?> <br>

<?php
echo "etape :". " " .$_SESSION['steps'];


?>
<a href="deconnexion.php"> déconnexion</a>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title></title>
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="styles/reset.css">
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <link rel="stylesheet" href="styles/owl.carousel.css">
    <link rel="stylesheet" href="styles/owl-carousel/owl.theme.css">

</head>
<body>


<div id="owl-demo" class="owl-carousel">
    <div>
        <iframe src="https://sketchfab.com/models/679b9375a12f41cd88eb1229ac2a36d8/embed?ui_watermark=0&amp;ui_stop=0&amp;tracking=0&amp;ui_snapshots=0&amp;internal=1&amp;autostart=1&amp;ui_infos=0" width="100%" height="563" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </div>
    <div>
        <iframe  src="https://sketchfab.com/models/679b9375a12f41cd88eb1229ac2a36d8/embed?ui_watermark=0&amp;ui_stop=0&amp;tracking=0&amp;ui_snapshots=0&amp;internal=1&amp;autostart=1&amp;ui_infos=0" width="50%" height="563" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </div>
    <div>
        <iframe  src="https://sketchfab.com/models/679b9375a12f41cd88eb1229ac2a36d8/embed?ui_watermark=0&amp;ui_stop=0&amp;tracking=0&amp;ui_snapshots=0&amp;internal=1&amp;autostart=1&amp;ui_infos=0" width="25%" height="563" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </div>
    <div>
        <iframe  src="https://sketchfab.com/models/679b9375a12f41cd88eb1229ac2a36d8/embed?ui_watermark=0&amp;ui_stop=0&amp;tracking=0&amp;ui_snapshots=0&amp;internal=1&amp;autostart=1&amp;ui_infos=0" width="10%" height="563" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </div>

</div>




</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="scripts/owl.carousel.js"></script>
<script type="text/javascript" src="scripts/main.js"></script>
</html>
