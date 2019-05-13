<?php

session_start();
unset($_SESSION);
$_SESSION['utilisateur']=NULL;
session_destroy();
header('location: Index.php');


 ?>
