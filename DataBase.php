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
}