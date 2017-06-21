<?php
require 'autoload.php';//charge toutes les classes utilisé

$db = SqlConnexion::getMysqlConnexionWithPDO();//crée une connexion a la base de donnée
$dataBase = new DataBase($db);//nouvelle objet database
$postModel = new PostModel;//nouvelle objet postmodel
$commentaireModel = new commentaireModel;

//On inclut le fichier s'il existe et s'il est spécifié
if (!empty($_GET['page']) && is_file('controleurs/'.$_GET['page'].'.php'))
{
        include 'controleurs/'.$_GET['page'].'.php';
}
else
{
        include 'controleurs/accueil.php';
}
?>