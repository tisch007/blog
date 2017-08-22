<?php

class AjouterController extends Controller{

	public function show(){
		$twig = $this->container['twig'];
		echo $twig->render('ajouter.html.twig');
	}

	public function add(){
		$dataBase = $this->container['dataBase'];
		$postModel = $this->container['postModel'];
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

		header('Location: ./article');
		exit;
	}
}