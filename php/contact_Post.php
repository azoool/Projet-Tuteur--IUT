<?php

	if(isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['adresse']) && isset($_POST['numero']) && isset($_POST['annee']) && isset($_POST['mail']))
		{
			try
				{
					$bdd = new PDO('mysql:host=localhost;dbname=lespagesblanches', 'root', '');
				}
			catch(Exception $e)
				{
					die('Erreur : '.$e->getMessage());
				}
 
			$req = $bdd->prepare('INSERT INTO carnet(prenom, nom, mail, annee, adresse, numero) VALUES(:prenom, :nom, :mail, :annee, :adresse, :numero)');

			$adresse = str_replace(" ", "_", $_POST['adresse']);
			$numero = str_replace(" ", "_", $_POST['numero']);	

			$req->execute(array(
			'prenom' => $_POST['prenom'],
			'nom' => $_POST['nom'],
			'mail' => $_POST['mail'],
			'annee' => $_POST['annee'],
			'adresse' => $adresse,
			'numero' => $numero,
			));	
	
		}
		
	header('Location: ../index.php?n#/recherche');
?>