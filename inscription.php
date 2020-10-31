<?php
session_start();
require "constants.php";
require "functions.php";
//partie haute commune à toutes les pages
require "partie_commune_haute.php";
?>


<?php

    $bdd = connectBDD( NAMEBDD, ROOT, HOST, MDPBDD );

    if ( isset( $_GET['mdp'] ) && $_GET['mdp'] == "forget" ) {

    $mdp = generateMdp();

    // mail( "aaa@gmail", "Reinit mdp", "Votre nouveau mdp est".$mdp );

    $mdp = sha1( $mdp );

    $requete = $bdd->query( "UPDATE users SET mdp = '".$mdp."' where id_u = 1" );
}

    ?>


<?php
               

if ( isset( $_POST['submit'] ) ) {
    //recuperation des informations
    $civ = $_POST['civ'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $mdp = sha1( $_POST['mdp'] );
    // crypte le mot de passe

    $requete = $bdd->prepare( 'INSERT INTO users(lastName,firstName,email,mdp) VALUES(:lastName,:firstName,:email,:mdp)' );
    $requete->bindValue( ':lastName', $lastName, PDO::PARAM_STR );
    $requete->bindValue( ':firstName', $firstName, PDO::PARAM_STR );
    $requete->bindValue( ':email', $email, PDO::PARAM_STR );
    $requete->bindValue( ':mdp', $mdp, PDO::PARAM_STR );
    $requete->execute();
    
    $_SESSION['id_u'] = $bdd->lastInsertId();
    $_SESSION['firstName'] = $firstName;
    $_SESSION['lastName'] = $lastName;
    
    //redirection
    header( "Location:profil.php" );
}
?> <div class="container">
    <div class="row">
        <div class="col-12">

            <form class="mt-5" action="#" method="post">
                <fieldset class="form-group">
                    <div class="row">
                        <legend class="col-form-label col-sm-2 pt-0">Civilité</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="civ" id="gridRadios1" value="Mr" checked>
                                <label class="form-check-label" for="gridRadios1">
                                    Mr
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="civ" id="gridRadios2" value="Mme">
                                <label class="form-check-label" for="gridRadios2">
                                    Mme
                                </label>
                            </div>

                        </div>
                    </div>
                </fieldset>
                <div class="form-group row">
                    <label for="inputLastName" class="col-sm-2 col-form-label">Nom</label>
                    <div class="col-sm-10">
                        <input type="text" name="lastName" class="form-control" id="inputLastName" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputfirstName" class="col-sm-2 col-form-label">Prenom</label>
                    <div class="col-sm-10">
                        <input type="text" name="firstName" class="form-control" id="inputfirstName" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" name="email" class="form-control" id="inputEmail3" required pattern="^[a-z0-9.-_]+@[a-z0-9.-_]+\.[a-z]{2,6}$">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Mot de passe</label>
                    <div class="col-sm-10">
                        <input type="password" name="mdp" class="form-control" id="inputPassword3" required pattern="[A-Aa-z0-9]+">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-2">Se souvenir de moi</div>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck1">
                            <label class="form-check-label" for="gridCheck1">
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <!--- le ? signifie passage d'argument. --->
                        <a href="index.php?mdp=forget">Mot de passe oublié</a>
                    </div>
                </div>
                <div class="form-group row">

                </div>
                <div class="col-sm-10 text-center">
                    <button type="submit" name="submit" class="btn btn-lg btn-primary btn-block">Inscription</button>
                    <br>
                    <a class="btn btn-sm btn-outline-secondary" href="index.php">Retour</a>
                </div>
            </form>
        </div>
    </div>
</div>

<?php //Footer commun à toutes les pages 
            require "footer.php";  ?>