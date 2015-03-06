<h3 align="center" id="titreInscription">Vous êtes un ancien étudiant</h3>
<form class="form-horizontal">
	<div class="form-group-ins">
		<label class="col-sm-2 control-label">Cursus de formation* : </label>
		<div class="col-sm-10">
			<input type="text" name="cursus" class="form-control-ins">
		</div>
	</div>
	<div class="form-group-ins">
		<label class="col-sm-2 control-label">Domaine du stage réalisé* : </label>
		<div class="col-sm-10">
		  	<input type="text" name="domaine" class="form-control-ins">
		</div>
	  </div>
	<div class="form-group-ins">
		<label class="col-sm-2 control-label">Employeur* : </label>
		<div class="col-sm-10">
		  	<input type="text" name="employeur" class="form-control-ins">
		</div>
	  </div>
	<div class="form-group-ins">
    	<label class="col-sm-2 control-label">Métier actuel* : </label>
    	<div class="col-sm-10">
      		<input type="text" name="métier" class="form-control-ins">
    	</div>
  	</div>
	<div class="form-group-ins">
    	<label class="col-sm-2 control-label">Entreprise actuelle* : </label>
		<div class="col-sm-10">
      		<input type="text" name="entreprise" class="form-control-ins">
    	</div>
	</div>
	<div class="form-group-ins">
		<label class="col-sm-2 control-label">Image de profil :</label>
		<input type="file" name="image" id="choixImage">
	</div>
	<div align="center">
		<input type="checkbox" id="cgu" name="conditions"><label>*J'ai lu et j'accepte les <a href="">conditions générales d'utilisation</a></label>
	</div>
	<div id="champsObligatoires"><p>Tous les champs contenant "*" sont obligatoires</p></div>
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