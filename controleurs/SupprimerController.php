<?php

class SupprimerController extends Controller{

	public function remove($id){
		$dataBase = $this->container['dataBase'];
		$postModel = $this->container['postModel'];
		$commentaireModel = $this->container['commentaireModel'];
		$postModel->supprimerNews($dataBase, $id);
		$commentaireModel->supprimerCommentaire($dataBase, $id);
		header('Location: ../article');
		exit;
	}
}