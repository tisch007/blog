<?php

if(!empty($_POST['auteur']) && is_string($_POST['auteur']) && !empty($_POST['titre']) && is_string($_POST['titre']) && !empty($_POST['chapo']) && is_string($_POST['chapo'])
	&& !empty($_POST['contenu']) && is_string($_POST['contenu']))
{
	$post = new Post;	
	$post->setAuteur($_POST['auteur']); 
	$post->setTitre($_POST['titre']); 
	$post->setChapo($_POST['chapo']);
	$post->setContenu($_POST['contenu']);  
	$postModel->ajouterNews($dataBase, $post);
}
else
{
	echo 'Erreur sur le formulaire d\'ajout';
}

header('Location: index.php?page=article');
exit;