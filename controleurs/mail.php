<?php

if(!empty($_POST['nom']) && is_string($_POST['nom']) && is_string($_POST['prenom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['contenu']) && is_string($_POST['contenu']))
{
	$to = '	cyrille.tischenbach@tisch.fr';
	$from = $_POST['email'];
	$from_name = $_POST['nom'] . ' ' . $_POST['prenom'];
	$body = $_POST['contenu'];
	$subject ="formulaire de contact du blog"; 

	$resultat  = mail($to, $subject, 'Mail envoyer par : '. $from_name . ' depuis : ' . $from . ' message : ' . $body);
	if($resultat)

header('Location: index.php?mail='. $resultat);
exit;

}
else{
	header('Location: index.php');
	exit;
}