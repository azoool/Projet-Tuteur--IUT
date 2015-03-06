<!DOCTYPE html>
<html>
	<head>
		<title>Les Pages Blanches - Ajouter Contact</title>
		<meta name="description" content="Pages blanches" />
		<link rel="stylesheet" href="css/stylesheet.css" type="text/css" />
        <link rel="stylesheet" href="css/Icomoon.css" type="text/css" />
		<link rel="stylesheet" href="css/Adaptative.css" type="text/css" />
        <link rel="stylesheet" href="css/Police.css" type="text/css" />
		<meta name="viewport" content="initial-scale=1.0" />
		<meta charset="utf-8" />
	</head>
<body>
	<header>
		<a href="index.php">Les pages blanches</a>
			<nav>
				<ul>
					<li><a href="index.php">Accueil</a></li>
					<li><a href="Modifier.php">Modifier Contact</a></li>
				</ul>	
			</nav>
	</header>
	<div id="ContentSection">
		<section>
			<div id="ContentArticle">

				<article>
					
					<h2>Veuillez entrer les informations de votre contact :</h1>
					
					<form action="php/contact_Post.php" method="post">
						
						<label for="nom">Le nom</label> : </br>
						<input type="text" name="nom" id="nom" maxlength="20" placeholder="Nom" autocomplete="off" required/>

						<label for="prenom">Le prenom</label> : </br>
						<input type="text" name="prenom" id="prenom" maxlength="30" placeholder="prenom" autocomplete="off" required/>

						<label for="annee">L'année de naissance</label> : </br>
						<input type="text" name="annee" id="annee" maxlength="4" placeholder="Année de naissance" autocomplete="off" required/>	

						<label for="adresse">L' adresse</label> : </br>
						<input type="text" name="adresse" id="adresse" maxlength="50" placeholder="adresse" autocomplete="off" required/>
        
						<label for="mail">Le mail</label> : </br>
						<input type="text" name="mail" id="mail" maxlength="50" placeholder="mail" autocomplete="off" required/>

						<label for="numero">Le numero</label> : </br>
						<input type="text" name="numero" id="numero" maxlength="15" placeholder="Numero du type 06 07 08 09 10 uniquement." autocomplete="off" required/>

						<center><input type="submit" value="Envoyer" class="bouton" /><input type="reset" value="Effacer" class="bouton"/></center>
					</form>
				</article>


			</div><!-- /ContentArticle -->
		</section>
	</div><!-- /ContentSection -->
	<div id="ContentFooter">
		<footer>
            <div class="blocFooter">
            	<h1>A Propos De Nous</h1>
            		<p>Vous pouvez commencer la saisie à partir de n'importe où sur le site !</p>
            </div>
            <div class="blocFooter">
                <h1>Liens Utiles</h1>
            		<ul>
            	    	<li><a href="http://guillaumebriday.free.fr/Guillaume">Accueil</a></li>
                    	<li><a href="">about</a></li>
            	    	<li><a href="">todo</a></li>
            	    	<li><a href="">catégorie</a></li>
            	    	<li><a href="">timer</a></li>
            	    	<li><a href="">Résolution</a></li>
            		</ul>
            </div>
            <div class="blocFooter">
                <h1>Contact</h1>
            		<ul>
            	    	<li><a href="https://www.facebook.com/ZiiCxGaming">Facebook</a> </li>
            	    	<li><a href="https://twitter.com/ZiiCxGaming">Twitter</a> </li>
            	    	<li><a href="http://instagram.com/ziic_i_eagle">instagram</a> </li>
            	    	<li><a href="http://www.youtube.com/user/ziicxgaming">ZiiC Gaming</a></li>
            	    	<li><a href="http://www.youtube.com/user/ISNampere">ISN ampere</a></li>
					</ul>
            </div>
            <p><a href="#">Retour en haut</a></p>
		</footer>
	</div><!-- /Footer -->
   </body>
</html>