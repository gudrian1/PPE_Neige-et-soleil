<?php
session_start();
require "constants.php";
require "functions.php";
//partie haute commune à toutes les pages
require "partie_commune_haute.php";
?>

    </br>
    <div class="container">
        <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow">
            <div>
               <a>
                <a class="btn btn-sm btn-outline-secondary" href="connexion.php">Se connecter
                
                </a>
                <a class="btn btn-sm btn-outline-secondary" href="inscription.php">S'inscrire</a>
                </a>
            </div>
            
            <?php 
        
        if (isset( $_SESSION['firstName'])){
            
            echo 'Bienvenue ';
        echo $_SESSION['firstName']; 
                  echo ' ';
                 echo $_SESSION['lastName'];
            echo '!';
            echo " C'est votre espace utilisateur.";
            
        }else {
        echo "Vous n'etes pas connecté ! </br>";
            
         
        }?>
        
           
        </div>
    </div>


        </div>
        <?php //Footer commun à toutes les pages 
            require "footer.php";  ?>
    