<?php

$uniqueNews = false;

if(!empty($_GET['id']) && is_numeric($_GET['id']))
{
	$uniqueNews = true;
	$resultat = $postModel->getOneNews($dataBase, $_GET['id'], $commentaireModel);
}
else
{
	$resultat = $postModel->getAllNews($dataBase);
}

echo $twig->render('article.html.twig', array(
        'resultat' => $resultat,
        'uniqueNews' => $uniqueNews
    ));

