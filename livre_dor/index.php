<!-- PROJET : LIVRE D'OR
LAPLATEFORME 2022 
AUTEUR : MEHDI ROMDHANI -->

<?php

session_start(); // start d'une session

?>


<!DOCTYPE html>
<html lang="Fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Feuille de style css -->
    <link rel="stylesheet" href="style.css">
    <!-- Import font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
    <!-- Titre de la page -->
    <title>Livre d'or</title>
</head>
<body>

<?php include("include/header.php") ?>

    <div class="container-welcome">
      
      <?php if(!isset($_SESSION['login'])){ // si la session n'est pas start ?>

      <h1>Laissez une empreinte</h1>
      
        <small><i>" Est poète qui rompt l’accoutumance "</i></small>
        <br>
        <small><i> Saint-John Perse </i></small>

        <?php }else{?>
        
        <?= '<h1> '.ucwords($_SESSION['login'])." ".' veut laisser son empreinte </h1>';?> <!--fonction ucwords pour mettre la premiere lettre en majuscules -->
        
       <?php } ?>



    </div>
    

    <div class="container-index">

        <a href="https://github.com/mehdi-romdhani" target="_blank"><img src="img/25231.png" alt="github"></a>
        

    </div>
 

</body>
</html>

