<?php 

//VERIFICATION DES CHAMPS SAISIES 
//les champs sont bien remplies



$bdd = mysqli_connect(HOST,ROOT,MDPBDD, NAMEBDD);

function champs_remplis(){
    if(htmlentities($_POST['firstName']) != "" && htmlentities($_POST['email']) != "" && htmlentities($_POST['password']) != ""){
        return true;
    }
    return false;
}
	
function verification_avec_bdd($bdd){
    $req_users="SELECT firstName, mdp, email from USERS";
    $res_users=mysqli_query($bdd, $req_users);
    while($ligne_users = mysqli_fetch_assoc($res_users)){
        if($ligne_users['firstName'] == $_POST['firstName'] && password_verify($_POST['password'], $ligne_users['mdp']) && 
          $ligne_users['email'] == $_POST['email']){
            return true;
        }
    }
    return false;
    
}



    if(champs_remplis() && verification_avec_bdd($bdd)){
        session_start();
        $_SESSION['firstName'] = htmlentities($_POST['firstName']);
        $_SESSION['email'] = htmlentities($_POST['email']);
        $_SESSION['password'] = password_hash(htmlentities($_POST['password']), PASSWORD_DEFAULT);
        header("Location: profil.php");
    }
    else{
        echo "infos incorrectes"; 
        //echo"<a href=\"javascript:alert('Informations saisies incorrectes !')\">Mon compte</a>";
        header("Location: connexion.php");

    }

