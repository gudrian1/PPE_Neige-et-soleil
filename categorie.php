<?php
session_start();
require "constants.php";
require "functions.php";
//partie haute commune à toutes les pages
require "partie_commune_haute.php";
?>



   <?php

$titre="Voir un forum";
$bdd = connectBDD(NAMEBDD,ROOT,HOST,MDPBDD);
    
//On récupère la valeur de f
$forum ='f';


//A partir d'ici, on va compter le nombre de messages
//pour n'afficher que les 25 premiers
$query=$bdd->prepare('SELECT titre FROM category WHERE id_cat = :forum');
$query->bindValue(':forum',$forum,PDO::PARAM_INT);
$query->execute();
$data=$query->fetch();


$nombreDeMessagesParPage = 25;
$nombreDePages = $nombreDeMessagesParPage;
?> 
   
  <?php //Footer commun à toutes les pages 
            require "footer.php";  ?>
 
    