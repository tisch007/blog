<?php

class Post{


	private $id;
	private $auteur;
	private $titre;
	private $chapo;
	private $contenu;
	private $dateAjout;
	private $commentaireTableau;

	public function __construct($valeurs = [])
	{
	    if (!empty($valeurs)) // Si on a spécifié des valeurs, alors on hydrate l'objet.
	    {
	    	$this->hydrate($valeurs);
	    }
	}

	public function hydrate($donnees)
	{
		foreach ($donnees as $attribut => $valeur)
		{
			$methode = 'set'.ucfirst($attribut);
			if (is_callable([$this, $methode]))
			{
				$this->$methode($valeur);
			}
		}
	}


	/* SETTERS */
	public function setId($id)
	{
		$this->id = $id;
	}

	public function setAuteur($auteur)
	{
		$this->auteur = $auteur;
	}

	public function setTitre($titre)
	{
		$this->titre = $titre;
	}

	public function setChapo($chapo)
	{
		$this->chapo = $chapo;
	}

	
	public function setContenu($contenu)
	{
		$this->contenu = $contenu;
	}

	public function setDateAjout($dateAjout)
	{
		$this->dateAjout = $dateAjout;
	}

	public function setCommentaireTableau($commentaireTableau)
	{
		$this->commentaireTableau = $commentaireTableau;
	}

	/* GETTERS */
	public function getId()
	{
		return $this->id;
	}

	public function getTitre()
	{
		return $this->titre;
	}

	public function getChapo()
	{
		return $this->chapo;
	}

	public function getAuteur()
	{
		return $this->auteur;
	}

	public function getContenu()
	{
		return $this->contenu;
	}

	public function getDateAjout()
	{
		return $this->dateAjout;
	}

	public function getCommentaireTableau()
	{
		return $this->commentaireTableau;
	}
}
