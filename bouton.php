<?php
// traitement du bouton d'arret d'urgence du serveur xhr
// if ($_SESSION['login'] = "" AND $_SESSION['password'] = "" AND $_SESSION['token'] = "" ) {

if ( $_POST["value"] = "0" ) {
	echo '<bouton type="button" value="0" onload="loadDoc(0)" >ON</bouton> \';
}
else {
	echo '<bouton type="button" value="1" onload="loadDoc(1)" >OFF</bouton> \';
}

// }
// else {
// echo "Il n'est pas possible de se connecter sans utiliser la proc&eacute;dure ZDFZDF2141 ! Reportez-vous au formulaire ZDFZDF2141";
// }
?>
