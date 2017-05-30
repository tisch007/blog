<?php
class DataBase
{
  /* Méthode de conection à la base de donnée */
  public static function getMysqlConnexionWithPDO()
  {
    $db = new PDO('mysql:host=localhost;dbname=news', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); 
    return $db;
  }

  public function __construct(PDO $db)
  {
    $this->db = $db;
  }

  public function query()
  {
    return $req = $this->db->query('SELECT * FROM news');
  }

  public function queryOne($id)
  {
    $requete = $this->db->prepare('SELECT id, auteur, titre, chapo, contenu FROM news WHERE id = :id');
    $requete->bindValue(':id', (int) $id, PDO::PARAM_INT);
    $requete->execute();
    return $requete;
  }
}