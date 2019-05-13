<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/login.css?<?php echo rand(); ?>">
<link rel="icon" href="Images/meteo.png">
<title>Schuméteo</title>
  </head>
  <body>
    <style>
body {
  background: url("Images/bg.png"); no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  background-position: top 100px;
      }
</style>
    <center>
      <a href="Index2.php"><strong>Retour</strong></a>
    <h2>Ajouter un message</h2>
    <form class="" action="Traitement/TraitementAjouterMessage.php" method="post">
      <input type="text" name="info" value="" placeholder="Information"><br><br>

      <input type="submit" name="" value="Ajouter">

    </form>

  </center>
  </body>
</html>
