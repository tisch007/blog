<?php
require 'autoload.php';//charge toutes les classes utilisé


    require_once __DIR__ . '/vendor/autoload.php';
    $loader = new Twig_Loader_Filesystem('templates'); // Dossier contenant les templates
    $twig = new Twig_Environment($loader, array(
      'cache' => false,
      'debug' => true
    ));
    $twig->addExtension(new Twig_Extension_Debug());//permet de debug et utiliser {{ dump(resultat) }}


$db = SqlConnexion::getMysqlConnexionWithPDO();//crée une connexion a la base de donnée
$dataBase = new DataBase($db);//nouvelle objet database
$postModel = new PostModel;//nouvelle objet postmodel
$commentaireModel = new CommentaireModel;

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

