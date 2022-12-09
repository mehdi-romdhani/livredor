<!-- PROJET : LIVRE D'OR
LAPLATEFORME 2022 
AUTEUR : MEHDI ROMDHANI -->

<!-- PAGE DE DECONNEXION -->

<?php

session_start();
unset($_SESSION['login']);

session_destroy(); 
header("location: connexion.php");