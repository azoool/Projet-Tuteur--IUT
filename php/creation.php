<?php
			
		/*     Cette fonction permet la création des articles   */

		try {   
            
            $bdd = new PDO('mysql:host=localhost;dbname=LesPagesBlanches', 'root', '');
            $bdd->exec("set names utf8");
            }
		catch(Exception $e) {   die('Erreur : '.$e->getMessage());      }
					
		$reponse = $bdd->query('SELECT * FROM carnet order by nom');

		$id = 0; // vu que le donnees ['id'] fait n'importe quoi on le remplace par une variable locale
					 
		while ($donnees = $reponse->fetch()){
			$adresse = str_replace("_", " ", $donnees['adresse']);
			$numero = str_replace("_", " ", $donnees['numero']);
			$age = date('Y') - $donnees['annee'];


			echo '<article id="article'.$id.'" class="articlePresentation" ><h1><span        id="nomprenom'.$id.'"><span id="nom'.$id.'">'.$donnees['nom'].'</span> <span id="prenom'.$id.'">'.$donnees['prenom'].'</span></span></h1> <span class="age"> &bull; <span id="annee'.$id.'">'.$age.' ans</span></span><span id="'.$id.'" class="PetiteCroix" 
            onclick="visibilite(\'delete'.$id.'\');" ></span><form action="php/suppression_Post.php" method="post"> <input type="hidden" name="suppression" value="'.$donnees['id'].'" /> <input id="delete'.$id.'" class="DeleteColone"  value="Supprimer" type="submit"/></form><div><p>Mail : <span id="mail'.$id.'"><a href="mailto:'. $donnees['mail'].'">'. $donnees['mail'].'</a></span></p><p>Adresse : <span id="adresse'.$id.'">'.$adresse.'</span></p><p>Numéro : <span id="numero'.$id.'">'.$numero.'</span></p></article>';
            
			echo "\n\n";
            
			$tab[ $id ] = $donnees['prenom'] . ';' .$donnees['nom']. ';' .$donnees['mail']. ';' .$donnees['annee']. ';' .$donnees['adresse']. ';' .$donnees['numero'];

			$id++ ;
		}

		$reponse->closeCursor();

		$json = json_encode(array_map('utf8_encode', $tab));
		echo '<script> var tableau= ' . $json .';</script>';
	?>