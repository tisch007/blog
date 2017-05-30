<?php

if(!empty($_GET['id']) && is_numeric($_GET['id']))
{
	$postModel->supprimerNews($dataBase, $_GET['id']);
}
else
{
	echo 'erreur sur l\'ID';
}

header('Location: index.php?page=article');
exit;