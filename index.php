<?php
require 'autoload.php';
require_once __DIR__ . '/vendor/autoload.php';

//pimple
use Pimple\Container;
$container = new Container();

$container['postModel'] = function ($c) {
    return new PostModel;
};
$container['commentaireModel'] = function ($c) {
    return new CommentaireModel;
};
$container['db'] = function ($c) {
    return SqlConnexion::getMysqlConnexionWithPDO();
};
$container['dataBase'] = function ($c) use ($container) {
	$db = $container['db'];
    return new DataBase($db);
};
$container['twig'] = function ($c) {
	$loader = new Twig_Loader_Filesystem('templates'); 
    $twig = new Twig_Environment($loader, array('cache' => false, 'debug' => true));
   	$twig->addExtension(new Twig_Extension_Debug());
   	return $twig;
};

//router
$url = !empty($_GET['url']) ? $_GET['url'] : NULL;
$router = new Router($url);

$router->post('/mail', "Mail#send", "Mail", $container);
$router->post('/addCommentaire/:id', "AddCommentaire#addComment", "addCommentaire", $container)->with('id', '[0-9]+');
$router->get('/supprimer/:id', "Supprimer#remove", "supprimer", $container)->with('id', '[0-9]+');
$router->post('/modifier/:id', "Modifier#add", "edit", $container)->with('id', '[0-9]+');
$router->get('/modifier/:id', "Modifier#show", "modifier", $container)->with('id', '[0-9]+');
$router->post('/ajouter', "Ajouter#add", "add", $container);
$router->get('/ajouter', "Ajouter#show", "ajouter", $container);
$router->get('/article/:id', "Article#showOne", "articleOne", $container)->with('id', '[0-9]+');
$router->get('/article', "Article#show", "article", $container);
$router->get('/', "Home#show", "home", $container);
$router->run();
?>