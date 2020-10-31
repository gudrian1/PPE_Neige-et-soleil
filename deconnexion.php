
<?php
require "partie_commune_haute.php";
	// Initialiser la session
	session_start();
	
	// Détruire la session.
    session_destroy(); //destroy the session 
	echo 'Vous avez été deconnecté';

exit;

require"footer.php";
?>
