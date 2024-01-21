<?php  
session_start();//on doit continuer la session pour qu'on puisse la terminer ou la détruire

session_destroy(); // Détruire la session

header('location:login.php');// On redirige

?>