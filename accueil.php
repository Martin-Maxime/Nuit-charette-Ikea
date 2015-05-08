<?php

session_start();//on démarre la session




require_once('connect.php');

$id = $_GET['id'];

$sql = "SELECT id, nom, step from userdata where id= $id";

if (!($result=$db-> query($sql))){
    die('erreur SQL');
}
$row = $result-> fetch_assoc();

$_SESSION['name'] = $row['nom'];
$_SESSION['steps'] = $row['step'];

echo "Bienvenue". " " .$_SESSION['name'];
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Billy</title>
    <link rel="stylesheet" href="styles/reset.css">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/owl.carousel.css">
</head>
<body>

<header>
    <img src="images/logo.png" class="logo" alt="Logo ikea">
    <a href="deconnexion.php" class="logout">Se déconnecter</a>
</header>
<section>
    <img src="images/billy.png" class="billy" alt="billy">
    <h1>Billy</h1>
</section>

<div id="owl-demo" class="owl-carousel">
    <div>
        <iframe src="https://sketchfab.com/models/f8417852051e4b08b9d9053053deb0e0/embed?ui_watermark=0&amp;ui_stop=0&amp;tracking=0&amp;ui_snapshots=0&amp;internal=1&amp;autostart=1&amp;ui_infos=0" width="100%" height="563" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </div>
    <div>
        <iframe src="https://sketchfab.com/models/204a8d3929974dd38fc816c253691305/embed?ui_watermark=0&amp;ui_stop=0&amp;tracking=0&amp;ui_snapshots=0&amp;internal=1&amp;autostart=1&amp;ui_infos=0" width="100%" height="563" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </div>
    <div>
        <iframe src="https://sketchfab.com/models/1e9ecf7423f8405a92a2027acbfed589/embed?ui_watermark=0&amp;ui_stop=0&amp;tracking=0&amp;ui_snapshots=0&amp;internal=1&amp;autostart=1&amp;ui_infos=0" width="100%" height="563" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
    </div>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="scripts/owl.carousel.js"></script>
<script type="text/javascript" src="scripts/main.js"></script>

</body>
</html>