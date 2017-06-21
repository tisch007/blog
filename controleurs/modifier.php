<?php

if(!empty($_GET['id']) && is_numeric($_GET['id']))
{
	$resultat = $postModel->getOneNews($dataBase, $_GET['id'], $commentaireModel);
}
else
{
	echo 'erreur sur l\'ID';
}

 echo $twig->render('modifier.html.twig', array(
        'id' => $_GET['id'],
        'Auteur' => $resultat[0]->getAuteur(),
        'Titre' => $resultat[0]->getTitre(),
        'Chapo' => $resultat[0]->getChapo(),
        'Contenu' => $resultat[0]->getContenu()
    ));