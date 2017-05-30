<?php

class Commentaire{

	private $id;
	private $numPost;
	private $auteur;
	private $contenu;
	private $dateAjout;

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

	public function setNumPost($numPost)
	{
		$this->numPost = $numPost;
	}

	public function setAuteur($auteur)
	{
		$this->auteur = $auteur;
	}
	
	public function setContenu($contenu)
	{
		$this->contenu = $contenu;
	}

	public function setDateAjout($dateAjout)
	{
		$this->dateAjout = $dateAjout;
	}

	/* GETTERS */
	public function getId()
	{
		return $this->id;
	}

	public function getNumPost()
	{
		return $this->numPost;
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
}
