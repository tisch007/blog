<?php

if(!empty($_GET['id']) && is_numeric($_GET['id']) && !empty($_POST['auteur']) && is_string($_POST['auteur']) && !empty($_POST['titre']) && is_string($_POST['titre']) && !empty($_POST['chapo']) && is_string($_POST['chapo']) && !empty($_POST['contenu']) && is_string($_POST['contenu']))
	{
		$post = new Post;	
		$post->setId($_GET['id']);
		$post->setAuteur($_POST['auteur']); 
		$post->setTitre($_POST['titre']); 
		$post->setChapo($_POST['chapo']);
		$post->setContenu($_POST['contenu']);  
		$postModel->modifierNews($dataBase, $post);
	}
	else
	{
		echo 'Erreur sur le formulaire d\'ajout ou sur l\'Id';
	}

header('Location: index.php?page=article&id='. $_GET['id']);
exit;