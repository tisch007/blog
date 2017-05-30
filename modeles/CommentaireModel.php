<?php
class CommentaireModel{

	private function createCommentaire($resultat){
		$tableauCommentaire=[];
		foreach ($resultat as $row) {
			$commentaire = new Commentaire;
			$commentaire->setId($row['id']);
			$commentaire->setNumPost($row['numPost']);
			$commentaire->setAuteur($row['auteur']);
			$commentaire->setContenu($row['contenu']);  
			$commentaire->setDateAjout($row['dateAjout']);
			$tableauCommentaire[] = $commentaire;
		}
		return $tableauCommentaire; 
	}

	public function getAllCommentaire($dataBase, $id){
		$requetCommentaire = 'SELECT * FROM commentaire WHERE numPost = :id ORDER BY dateAjout DESC';
		$id = intval($id);
		$tab = [':id' => $id];
		$resultatCommentaire = $dataBase->query($requetCommentaire, $tab);//récupère les commentaires du post
		return $this->createCommentaire($resultatCommentaire);
	}

	public function ajouterCommentaire($dataBase, $commentaire){
	$sql = 'INSERT INTO commentaire (numPost, auteur, contenu, dateAjout) VALUES (:numPost, :auteur, :contenu, NOW())'; 
	$tab = [':numPost' => $commentaire->getNumPost(), ':auteur' => $commentaire->getAuteur(), ':contenu' => $commentaire->getContenu()];
	return $dataBase->execSql($sql, $tab);
	}

	public function supprimerCommentaire($dataBase, $id){
	$sql = 'DELETE FROM commentaire WHERE numPost = :id';
	$id = intval($id);
	$tab = [':id' => $id];
	return $dataBase->execSql($sql, $tab);
	}
}