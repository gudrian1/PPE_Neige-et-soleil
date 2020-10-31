<?php
session_start();
require "constants.php";
require "functions.php";
//partie haute commune à toutes les pages
require "partie_commune_haute.php";


if(isset($_SESSION['firstName']))
{
    echo htmlentities($_POST['lastName']);
    echo " ";
    echo htmlentities($_POST['firstName']);
    
    
}
else{
    echo "Vous devez vous connecter pour accéder à votre compte ou bien vous inscrire !";
}





//Footer commun à toutes les pages 
require "footer.php";  ?>


