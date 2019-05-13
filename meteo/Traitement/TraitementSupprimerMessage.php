<?php
session_start();
include 'Media.php';
include 'MediaManager.php';
$media = new Media([ //media est un objet de type Media
  'idsup' => $_POST['idsup'],

]);
try {
    $db = new PDO('mysql:host=localhost;dbname=meteo', 'root', '');
}
catch (PDOException $e) {
    echo 'Échec lors de la connexion : ' . $e->getMessage();
}

$manager = new MediaManager($db);
$manager->supprimermessage($media);
$_SESSION['message'] = "Votre message a bien été supprimé";
header('location: ../Index2.php');

?>
