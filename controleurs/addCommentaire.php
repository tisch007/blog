<?php

if(!empty($_GET['id']) && is_numeric($_GET['id']) && !empty($_POST['auteur']) && is_string($_POST['auteur']) && !empty($_POST['contenu']) && is_string($_POST['contenu']))
{
	$commentaire = new Commentaire;	
	$commentaire->setNumPost($_GET['id']); 
	$commentaire->setAuteur($_POST['auteur']); 
	$commentaire->setContenu($_POST['contenu']);  
	$commentaireModel->ajouterCommentaire($dataBase, $commentaire);
}
else
{
	echo 'Erreur sur le formulaire d\'ajout ou sur l\'id';
}


header('Location: index.php?page=article&id='. $_GET['id']);
exit;