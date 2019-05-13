
<?php
session_start();
include 'Media.php';
include 'MediaManager.php';
$media = new Media([ //media est un objet de type Media
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
$connexion = $manager->connexion($media);

if($connexion) {
       $media->hydrate($connexion);
       $_SESSION['utilisateur'] = $media->getIdentifiant();
       $_SESSION['message'] = "Connexion réussie";
       header('location: ../Index2.php');

} else {
    $_SESSION['message'] = "La connexion à échouée";
       header('location: ../Connexion.php');
}

?>
