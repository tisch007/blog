<?php


class AddCommentaireController extends Controller{

	public function addComment($id){

		$dataBase = $this->container['dataBase'];
		$commentaireModel = $this->container['commentaireModel'];

		if(!empty($id) && is_numeric($id) && !empty($_POST['auteur']) && is_string($_POST['auteur']) && !empty($_POST['contenu']) && is_string($_POST['contenu']))
		{
			$commentaire = new Commentaire;	
			$commentaire->setNumPost($id); 
			$commentaire->setAuteur($_POST['auteur']); 
			$commentaire->setContenu($_POST['contenu']);  
			$commentaireModel->ajouterCommentaire($dataBase, $commentaire);
		}
		else
		{
			echo 'Erreur sur le formulaire d\'ajout ou sur l\'id';
		}

		header('Location: ../article/'. $id);
		exit;
	}
}