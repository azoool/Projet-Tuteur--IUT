<?php

    if(isset($_POST['suppression'])){

			try
				{
					$bdd = new PDO('mysql:host=localhost;dbname=lespagesblanches', 'root', '');
				}
			catch(Exception $e)
				{
					die('Erreur : '.$e->getMessage());
				}
        

 
            $bdd->exec('DELETE FROM carnet WHERE id="'.$_POST['suppression'].'" ');

    }

		
	 header('Location: ../index.php?d#/recherche');
?>