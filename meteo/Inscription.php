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


    <form class="box" action="Traitement/TraitementInscription.php" method="post">
      <h3>INSCRIPTION</h3>
      <input type="text" name="nom" value="" placeholder="Nom">
      <input type="text" name="identifiant" value="" placeholder="Identifiant">
      <input type="password" name="password" value="" placeholder="Mot de Passe">
    <input type="submit" name="" value="Inscription"></a>

    </form>

  </center>
  </body>
</html>
