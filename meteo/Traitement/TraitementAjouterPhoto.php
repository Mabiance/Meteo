<?php
include 'Media.php';
include 'MediaManager.php';
session_start();
$media = new Media([ //media est un objet de type Media
  'nom' => $_POST['nom'],

]);
try {
    $db = new PDO('mysql:host=localhost;dbname=meteo', 'root', '');
}
catch (PDOException $e) {
    echo 'Échec lors de la connexion : ' . $e->getMessage();
}

$manager = new MediaManager($db);
$manager->ajouterphoto($media);

$_SESSION['message'] = "Votre photo à bien été ajoutée au site";

header('location: ../Index2.php');

?>
