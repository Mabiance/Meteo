<?php
session_start();
include 'Media.php';
include 'MediaManager.php';
$media = new Media([ //media est un objet de type Media
  'nom' => $_POST['nom'],
  'identifiant' => $_POST['identifiant'],
  'password' => $_POST['password']
]);
try {
    $db = new PDO('mysql:host=localhost;dbname=meteo', 'root', '');
}
catch (PDOException $e) {
    echo 'Échec lors de la connexion : ' . $e->getMessage();
}

$manager = new MediaManager($db);
$manager->inscription($media);
$_SESSION['message'] = "Inscription validée";
header('location: ../Index2.php');


?>
