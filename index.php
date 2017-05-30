 <?php 

 require 'Database.php';

 $db = DataBase::getMysqlConnexionWithPDO();
 $manager = new Database($db);
 $id = 54;
 $req = $manager->queryOne($id);
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Accueil du site</title>
 	<meta charset="utf-8" />
 </head>
 <body>
 <p>    	 
 	<?php
 	while ($donnees = $req->fetch()){
 		?>
 		<div>
 			<h3>
 				<?php echo $donnees['titre']; ?>
 			</h3>
 			<em><?php echo "Rédiger par " .$donnees['auteur']; ?></em>
 			<p><?php echo $donnees['chapo'];?></p>
 			<p><?php echo $donnees['contenu'];?></p>
 		</div>
 		<?php }
 		$req->closeCursor();
 		?>
 	</p>
 </body>
 </html>