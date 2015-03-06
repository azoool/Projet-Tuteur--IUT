<div ng-controller="MainController">
	<div id="titre" align="center">
				<p>Bienvenue sur l'annuaire numérique des anciens élèves de l'IUT Informatique Lyon 1</p>
			</div>
			<hr align='center' width='100%' height='3px' color='#58715F' style="margin-top: 30px"/>
	   <div id="titreAccueil" align="center">
		<p>Accueil</p>
	</div>
	<form id="formConnexion">
		<div id="titreForm" align="center"><p>Connexion</p></div>
		<div class="form-group-con">
			<label for="exampleInputEmail1">Identifiant</label>
			<input type="email" name="identifiant" class="form-control-con" id="exampleInputEmail1" placeholder="Saisissez votre identifiant" size="25"	>
		</div>
		<div class="form-group-con">
			<label for="exampleInputPassword1">Mot de passe</label>
			<input type="password" name="motDePasse" class="form-control-con" id="exampleInputPassword1" placeholder="Saisissez votre mot de passe" size="25">
		</div>
		<div class="checkbox" align="center">
			<label>
			  <input type="checkbox">Se souvenir de moi
			</label>
		</div>
		<div id="btnForm" align="center">
			<button type="submit" class="btn btn-default">Se connecter</button>
		</div>
		<div id="lienForm" align="center">
			<a href="#null" ng-click="openInscription()"><p>Nouveau ? Inscris-toi !</p></a>
			<a href=""><p>Mot de passe oublié ?</p></a>
		</div>
	</form>
</div>