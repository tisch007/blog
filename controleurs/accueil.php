<?php

$afficherMail = '';
if(!empty($_GET['mail']) && !is_int($_GET['mail']))
{
	$mail = $_GET['mail'];
	if ($mail == 1) {
		$afficherMail = 'L\'email à bien été envoyé';
	}
	elseif ($mail == 2) {
		$afficherMail = 'L\'email n\'a pas pu être envoyé';
	}
}

echo $twig->render('accueil.html.twig', array(
        'afficherMail' => $afficherMail));