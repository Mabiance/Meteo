<?php
include 'Media.php';
include 'MediaManager.php';
session_start();
$media = new Media([ //media est un objet de type Media
  'info' => $_POST['info'],

]);
try {
    $db = new PDO('mysql:host=localhost;dbname=meteo', 'root', '');
}
catch (PDOException $e) {
    echo 'Échec lors de la connexion : ' . $e->getMessage();
}

$manager = new MediaManager($db);
$manager->ajoutermessage($media);

$_SESSION['message'] = "Votre information à bien été ajoutée au site";

header('location: ../Index2.php');

?>
