<?php

class ArticleController extends Controller{

	public function show(){
		$twig = $this->container['twig'];
		$dataBase = $this->container['dataBase'];
		$postModel = $this->container['postModel'];
		$commentaireModel = $this->container['commentaireModel'];

		$resultat = $postModel->getAllNews($dataBase);
		echo $twig->render('article.html.twig', array('resultat' => $resultat));
	}

	public function showOne($id){
		$twig = $this->container['twig'];
		$dataBase = $this->container['dataBase'];
		$postModel = $this->container['postModel'];
		$commentaireModel = $this->container['commentaireModel'];
		$resultat = $postModel->getOneNews($dataBase, $id, $commentaireModel);
		echo $twig->render('articleOne.html.twig', array('resultat' => $resultat));
	}
}