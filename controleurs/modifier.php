<?php

if(!empty($_GET['id']) && is_numeric($_GET['id']))
{
	$resultat = $postModel->getOneNews($dataBase, $_GET['id'], $commentaireModel);
}
else
{
	echo 'erreur sur l\'ID';
}

include 'vues/modifier.phtml';