<h3 align="center" id="titreInscription">Vous êtes une entreprise</h3>
<form class="form-horizontal">
	<div class="form-group-ins">
		<label class="col-sm-2 control-label">Nom de l'entreprise* : </label>
		<div class="col-sm-10">
			<input type="text" name="nom" class="form-control-ins">
		</div>
	</div>
	<div class="form-group-ins">
		<label class="col-sm-2 control-label">Adresse de l'entreprise* : </label>
		<div class="col-sm-10">
		  	<input type="text" name="prenom" class="form-control-ins">
		</div>
	</div>
	<div class="form-group-ins">
		<label class="col-sm-2 control-label">Prise de stagiaires* :  </label>
		<div id="priseStagiaire">
			<label class="radio-inline"	>
				<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Oui
			</label>
			<label class="radio-inline">
				<input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Non
			</label>
		</div>
	</div>
	<div class="form-group-ins">
		<label class="col-sm-2 control-label">Avez-vous déjà pris en stage<br />des étudiants de notre Université* :  </label>
		<div id="priseStagiaire">
			<label class="radio-inline">
				<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Oui
			</label>
			<label class="radio-inline">
				<input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Non
			</label>
		</div>
	</div>
	<div class="form-group-ins">
		<label class="col-sm-2 control-label">Image de profil : </label>
		<input type="file" name="Image" id="choixImage">
	</div>
	<div align="center">
		<input type="checkbox" id="cgu" name="conditions">*J'ai lu et j'accepte les <a href="">conditions générales d'utilisation</a>
	</div>
	<div id="champsObligatoires"><p>Tous les champs contenant * sont obligatoires</p></div>
	<div class="form-group-ins" ng-controller="MainController">
    	<div class="col-sm-offset-2 col-sm-10">
      		<button type="submit" class="btn btn-default" id="btnAnnuler" ng-click="openInscriptionClose()">Annuler</button>
    	</div>
  	</div>
	<div class="form-group-ins" ng-controller="MainController">
    	<div class="col-sm-offset-2 col-sm-10">
      		<button type="submit" class="btn btn-default" id="btnValider" ng-click="verifCond()">Valider</button>
    	</div>
  	</div>
</form>