<?php
class PostModel{

	private function createPost($row, $commentaireTableau=''){
		$post = new Post;	
		$post->setId($row['id']);
		$post->setAuteur($row['auteur']); 
		$post->setTitre($row['titre']); 
		$post->setChapo($row['chapo']);
		$post->setContenu($row['contenu']);  
		$post->setDateAjout($row['dateAjout']);
		$post->setCommentaireTableau($commentaireTableau);
		return $post;
	}

	public function getOneNews($dataBase, $id, $commentaireModel){
		$commentaireTableau = $commentaireModel->getAllCommentaire($dataBase, $id);
		$requet = 'SELECT id, auteur, titre, chapo, contenu, DATE_FORMAT(dateAjout, \'%d/%m/%Y à %Hh%i\') AS dateAjout FROM news WHERE id = :id';
		$id = intval($id);
		$tab = [':id' => $id];
		$resultat = $dataBase->queryOne($requet, $tab);//récupère le post
		$post=[];
		$post[] = $this->createPost($resultat, $commentaireTableau);
		return $post;
	}

	public function getAllNews($dataBase){ 
		$requet = 'SELECT id, auteur, titre, chapo, contenu, DATE_FORMAT(dateAjout, \'%d/%m/%Y à %Hh%i\') AS dateAjout FROM news ORDER BY dateAjout DESC';
		$tab=[];
		$resultat = $dataBase->query($requet, $tab);
		$posts=[];
		foreach ($resultat as $value) {
			$posts[] = $this->createPost($value);
			//crée un tableau d'objet post en utilisant les setters
		}
		return $posts;
	}


	public function modifierNews($dataBase, $post){
		$sql = 'UPDATE news SET auteur = :auteur, titre = :titre, chapo = :chapo, contenu = :contenu, dateAjout = NOW() WHERE id = :id';
		$tab = [':auteur' => $post->getAuteur(), ':titre' => $post->getTitre(), ':chapo' => $post->getChapo(), ':contenu' => $post->getContenu(), 'id' => $post->getId()];
		return $dataBase->execSql($sql, $tab);//résultat est un booleen qui indique la réucite de la requete
	}

	public function ajouterNews($dataBase, $post){
		$sql = 'INSERT INTO news (auteur, titre, chapo, contenu, dateAjout) VALUES (:auteur, :titre, :chapo, :contenu, NOW())'; 
		$tab = [':auteur' => $post->getAuteur(), ':titre' => $post->getTitre(), ':chapo' => $post->getChapo(), ':contenu' => $post->getContenu()];
		return $dataBase->execSql($sql, $tab);
	}

	public function supprimerNews($dataBase, $id){
		$sql = 'DELETE FROM news WHERE :id=id';
		$id = intval($id);
		$tab = [':id' => $id];
		return $dataBase->execSql($sql, $tab);
	}
}