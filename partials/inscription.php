<div ng-controller="MainController">
	<h3 align="center" id="titreInscription">Formulaire d'inscription</h3>
	<form class="form-horizontal">
		<div class="form-group-ins">
			<label class="col-sm-2 control-label">Nom* : </label>
			<div class="col-sm-10">
				<input type="text" name="nom" class="form-control-ins" id="nom"  required>
			</div>
		</div>
		<div class="form-group-ins">
			<label class="col-sm-2 control-label">Prénom* : </label>
			<div class="col-sm-10">
				<input type="text" name="prenom" class="form-control-ins" id="prenom"  required>
			</div>
		  </div>
		<div class="form-group-ins">
			<label class="col-sm-2 control-label">Date de naissance* : </label>
			<div class="col-sm-10">
				<input type="text" name="date_naissance" class="form-control-ins" placeholder="JJ/MM/AAAA" id="date_naissance"  required>
			</div>
		  </div>
		<div class="form-group-ins">
			<label class="col-sm-2 control-label">Adresse mail* : </label>
			<div class="col-sm-10">
				<input type="text" name="mail1" class="form-control-ins" id="mail1" placeholder="toto@mail.com"  required>
			</div>
		</div>
		<div class="form-group-ins">
			<label class="col-sm-2 control-label">Confirmez l'adresse mail* : </label>
			<div class="col-sm-10">
				<input type="text" name="mail2" class="form-control-ins" id="mail2" placeholder="toto@mail.com"  required>
			</div>
		</div>
		<div class="form-group-ins">
			<label class="col-sm-2 control-label">Mot de passe* : </label>
			<div class="col-sm-10">
				<input type="password" name="pass1" class="form-control-ins" id="mdp1"  required>
			</div>
		</div>
		<div class="form-group-ins">
			<label class="col-sm-2 control-label">Confirmez le mot de passe* : </label>
			<div class="col-sm-10">
				<input type="password" name="pass2" class="form-control-ins" id="mdp2" ng-keypress="verifRadio()" required>
			</div>
		</div>
		<div class="form-group-ins">
			<label class="col-sm-2 control-label">Vous êtes* :  </label>
			<label class="radio-inline">
				<input type="radio" name="inlineRadioOptions" id="radioEtu" value="option1"> Un ancien étudiant
			</label>
			<label class="radio-inline">
				<input type="radio" name="inlineRadioOptions" id="radioEntr" value="option2"> Une entreprise
			</label>
		</div>
		<div ng-bind-html="content"></div>
		<div class="form-group-ins">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-default" id="btnAnnuler" ng-click="closeDialog()">Annuler</button>
			</div>
		</div>
		<div class="form-group-ins">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-default" id="btnValider" ng-click="verifRadio()">Valider</button>
			</div>
		</div>
	</form>
</div>