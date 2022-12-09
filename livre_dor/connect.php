<!-- PROJET : LIVRE D'OR
LAPLATEFORME 2022 
AUTEUR : MEHDI ROMDHANI -->

<?php

$locahost="localhost";
$user="root";
$mtp="";
$bdd_name="livredor";


$connect=mysqli_connect($locahost,$user,$mtp,$bdd_name);//connection à la bdd en local

if(!$connect){

    die("Erreur de connection" . mysqli_error());// lessage d'erreur en cas echec à la connexion 
    
}

