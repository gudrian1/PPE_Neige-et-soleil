<?php

require "constants.php";
require "functions.php";
//partie haute commune à toutes les pages
require "partie_commune_haute.php";
require "check_connexion.php";
echo $_SESSION['firstName'];

//si l'utilisateur est déja connecté il est redirigé vers la page profil

//if(isset($_POST['firstName']))
		
	//	header( "Location:profil.php" );
	
?>


<div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow">
    <form class="form-signin" action="#" method="post">
        <div class="text-center mb-4">
            <br>
            <img src="img/cube.jpg" width="72" height="72">
            <br>
            <h1 class="h3 mb-3 font-weight-normal">Connexion :</h1>
        </div>
        <div class="form-label-group">
            <input type="text" id="inputfirstName" class="form-control" placeholder="prenom" name="firstName" required autofocus>
            <label for="inputfirstName">Prenom </label>
        </div>
        <div class="form-label-group">
            <input type="email" id="inputEmail3" class="form-control" placeholder="Email address" name="email" required autofocus>
            <label for="inputEmail3">Email </label>
        </div>

        <div class="form-label-group">
            <input type="password" id="inputPassword3" class="form-control" placeholder="Password" name="password" required>
            <label for="inputPassword3">Mot de passe</label>
        </div>


        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Connexion</button>
    </form>
    <br>
    <a class="btn btn-sm btn-outline-secondary" href="index.php">Retour</a>
</div>




<?php require "footer.php";  ?>