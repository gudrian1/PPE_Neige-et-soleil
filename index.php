<?php
session_start();

//partie haute commune à toutes les pages
require "partie_commune_haute.php";
?>






     <div class="my-3 p-3 bg-white rounded box-shadow">
        <h6 class="border-bottom border-gray pb-2 mb-0">Actualité</h6>
        <div class="media text-muted pt-3">
         
          <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <strong class="d-block text-gray-dark">@username</strong>
            Minecraft - Craft une table.
          </p>
        </div>
        <div class="media text-muted pt-3">
          
          <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <strong class="d-block text-gray-dark">@username</strong>
            Minecraft - Tuer un Creeper.
          </p>
        </div>
        <div class="media text-muted pt-3">
          
          <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <strong class="d-block text-gray-dark">@username</strong>
            Minecraft - Heberger un serveur.
          </p>
        </div>
        <small class="d-block text-right mt-3">
          <a href="#">Tous les topics</a>
        </small>
      </div>



    

    <?php //Footer commun à toutes les pages 
            require "footer.php";  ?>

