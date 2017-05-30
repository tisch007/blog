<?php

$uniqueNews = false;

if(!empty($_GET['id']) && is_numeric($_GET['id']))
{
	$uniqueNews = true;
	$resultat = $postModel->getOneNews($dataBase, $_GET['id']);
}
else
{
	$resultat = $postModel->getAllNews($dataBase);
}

include 'vues/article.phtml';

