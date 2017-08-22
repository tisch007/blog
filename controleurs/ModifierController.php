<?php

class ModifierController extends Controller{

	public function show($id){
		$twig = $this->container['twig'];
		$dataBase = $this->container['dataBase'];
		$postModel = $this->container['postModel'];
		$commentaireModel = $this->container['commentaireModel'];
		$resultat = $postModel->getOneNews($dataBase, $id, $commentaireModel);
		echo $twig->render('modifier.html.twig', array(
	        'id' => $id,
	        'Auteur' => $resultat[0]->getAuteur(),
	        'Titre' => $resultat[0]->getTitre(),
	        'Chapo' => $resultat[0]->getChapo(),
	        'Contenu' => $resultat[0]->getContenu()
	    ));
	}

	public function add($id){
		$dataBase = $this->container['dataBase'];
		$postModel = $this->container['postModel'];
		if(!empty($_POST['auteur']) && is_string($_POST['auteur']) && !empty($_POST['titre']) && is_string($_POST['titre']) && !empty($_POST['chapo']) && is_string($_POST['chapo']) && !empty($_POST['contenu']) && is_string($_POST['contenu']))
		{
			$post = new Post;
			$post->setId($id);	
			$post->setAuteur($_POST['auteur']); 
			$post->setTitre($_POST['titre']); 
			$post->setChapo($_POST['chapo']);
			$post->setContenu($_POST['contenu']);
			$postModel->modifierNews($dataBase, $post);
		}
		else
		{
			echo 'Erreur sur le formulaire d\'ajout';
		}

		header('Location: ../article');
		exit;
	}
}