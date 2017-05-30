<?php
class DataBase
{
  public function __construct(PDO $db)
  {
    $this->db = $db;
  }

  public function query($req, $tab=[])//attend une requete et un tableau
  {
    $requete = $this->db->prepare($req);
    $requete->execute($tab);
    return $requete->fetchall();
  }

  public function queryOne($req, $tab=[])//attend une requete et un tableau
  {
    $requete = $this->db->prepare($req);
    $requete->execute($tab);
    return $requete->fetch();
  }

  public function execSql($req, $tab=[])//attend une requete et retourne un booleen
  {
    $requete = $this->db->prepare($req);
    return $requete->execute($tab);
  }
}