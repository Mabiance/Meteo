<?php
include 'Media.php';
include 'MediaManager.php';
session_start();
$media = new Media([ //media est un objet de type Media
  'name' => $_POST['name'],
name
]);
try {
    $db = new PDO('mysql:host=localhost;dbname=meteo', 'root', '');
}
catch (PDOException $e) {
    echo 'Échec lors de la connexion : ' . $e->getMessage();
}

$manager = new MediaManager($db);
$manager->ajoutervideo($media);

$_SESSION['message'] = "Votre vidéo à bien été ajoutée au site";

header('location: ../Index2.php');

?>
