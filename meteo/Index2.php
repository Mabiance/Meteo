<?php session_start();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/login.css?<?php echo rand(); ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="icon" href="Images/meteo.png">
    <title>Schuméteo</title>
  </head>
  <body></br></br>

    <style>
        body {
          background: url("Images/bg.png"); no-repeat center center fixed;
          -webkit-background-size: cover;
          -moz-background-size: cover;
          -o-background-size: cover;
          background-size: cover;
          background-position: top 100px;
          color: #fff ;
              }
    </style>
    <center>

      <?php if (isset($_SESSION['utilisateur'])){
        echo '<h3>Bonjour '. $_SESSION['utilisateur'] .'</h3>';
        echo '<br>';
           }
          if(isset($_SESSION['message'])) {
            echo $_SESSION['message'];
           $_SESSION['message'] = NULL;
           unset($_SESSION['message']);

          }
          ?>
      <a href="AjouterVideo.php"><button type="button" class="btn btn-blue btn-lg btn-block">Ajouter une vidéo</button></br></br></a>
      <a href="AjouterPhoto.php"><button type="button" class="btn btn-blue btn-lg btn-block">Ajouter une photo</button></br></br></a>
      <a href="AjouterMessage.php"><button type="button" class="btn btn-blue btn-lg btn-block">Ajouter un message</button></br></br></a>
      <a href="SupprimerVideo.php"><button type="button" class="btn btn-blue btn-lg btn-block">Supprimer une vidéo</button></br></br></a>
      <a href="SupprimerPhoto.php"><button type="button" class="btn btn-blue btn-lg btn-block">Supprimer une photo</button></br></br></a>
      <a href="SupprimerMessage.php"><button type="button" class="btn btn-blue btn-lg btn-block">Supprimer un message</button></br></br></a>
      <a href="meteo.php"><button type="button" class="btn btn-blue btn-lg btn-block">Voir le site</button></br></br></a>
      <a href="Deconnexion.php"><button type="button" class="btn btn-blue btn-lg btn-block">Déconnexion</button></br></br></a>








  </center>
  </body>
</html>
