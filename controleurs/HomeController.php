<?php

class HomeController extends Controller {

	public function show(){
		$twig = $this->container['twig'];
		$afficherMail = '';	
		echo $twig->render('accueil.html.twig', array('afficherMail' => $afficherMail));
	}
}


