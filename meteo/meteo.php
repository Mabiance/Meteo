
<!--Connexion a la base de donnée-->
<?php
  try {
    $db = new PDO('mysql:host=localhost;dbname=meteo', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
      }
  catch (PDOException $e) {
    echo 'Échec lors de la connexion : ' . $e->getMessage();
                          }

  include("include/header.php");

?>

<!--titre la fenetre + logo + back-background + API meteo-->
<!DOCTYPE html>
<html lang="en" dir="ltr">
<!--HEAD-->
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link rel="icon" href="Images/meteo.png">
    <link rel="stylesheet" href="test.css?<?php echo rand(); ?>">
    <title>Schuméteo</title>
  </head>
  <!--END HEAD-->

  <!--BODY-->
  <body>

    <?php
      $query = $db->prepare("SELECT * FROM info");
      $query->execute();
      $infos = $query->fetchAll();?>
    <?php foreach($infos as $info) { ?>
    <?php } ?>

  <style>
      body {
        background: url("Images/backgroundtest.png"); no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        background-position: top 100px;
            }
  </style>

<!--Affichage du message présent dans la base de donnée-->
  <marquee><h3>Bienvenue sur Shuméteo, Infos : <?php echo $info['info']; ?> </marquee><br><br><br>
    <center>
      <iframe width="560" height="315" src="https://www.youtube.com/embed/xAV1iQr_t7w" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


<!--Affichage des videos de la base de donnee meteo et de la table film-->
  <?php
    $query = $db->prepare("SELECT * FROM video");
    $query->execute();
    $films = $query->fetchAll();?>
    <?php foreach($films as $film) { ?>
    <?php } ?>
    <video controls width="420"><source src="Video/<?php echo $film['name']; ?>.mp4" type="video/mp4"></video><br>




<!--Affichage des photos de la base de données-->

  <?php
    $query = $db->prepare("SELECT * FROM photo");
    $query->execute();
    $photos = $query->fetchAll();?>
    <center><br><br>
      <div class="carousel right">
        <div class="indicator"></div>
          <div class="wrap">
            <ul>
              <?php foreach($photos as $photo) { ?>
                <li><img src="Images/<?php echo $photo['nom']; ?>.png" height=600px /></li>
              <?php } ?>
                </div>
              </ul>
            </div>
          </center>
        </div>
      </div><br><br>
        <iframe seamless width="900" height="290" frameborder="0" src="https://www.infoclimat.fr/public-api/mixed/iframeSLIDE?_ll=48.85341,2.3488&_inc=WyJQYXJpcyIsIjQyIiwiMjk4ODUwNyIsIkZSIl0=&_auth=VU8EEwB%2BU3FVeFViBnBXfgJqBTAJfwEmVysHZFo%2FAH0Aa14%2FVjYEYlU7VCkEKwYwWHUFZltgBTUHbAJ6WCpXNlU%2FBGgAa1M0VTpVMAYpV3wCLAVkCSkBJlc1B2NaNwB9AGpeOVYrBGVVP1QoBDUGO1hvBXpbewU8B2ECYFg3VzdVPgRgAGtTOVUzVSgGKVdmAmIFbQkxAT5XNwc0Wj4AZQA1XmhWYARuVTpUKAQ0BjpYaQVjW20FPgdiAmVYKlcrVU8EEwB%2BU3FVeFViBnBXfgJkBTsJYg%3D%3D&_c=b71ad0f0301aef930c09df7a49f0df07">
        </iframe>
      </body>
  <!--END BODY-->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/index.js"></script><br><br><br>
</html>
