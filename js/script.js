//Déclaration de l'application routeApp
var routeApp = angular.module('routeApp', ['ngRoute','routeAppControllers','ngDialog','ngSanitize']);

//Configuration système de routage
routeApp.config(['$routeProvider',
				 function ($routeProvider) { 
					 $routeProvider
						 .when('/accueil', { templateUrl: 'partials/accueil.php', controller: 'homeCtrl' })
						 .when('/recherche', { templateUrl: 'partials/recherche.php', controller: 'rechercheCtrl' })
						 .when('/faq', { templateUrl: 'partials/faq.php', controller: 'faqCtrl' })
						 .when('/contact', { templateUrl: 'partials/contact.php', controller: 'contactCtrl' })
						 .otherwise({ redirectTo: '/accueil' });
				 }
				]);
//Déclaration des fonctions
routeApp.controller('MainController', function ($scope, ngDialog) {
	$scope.verifInscription = function () {
		var mdp = false;
		var mail = false;
		var date = false;
		var mdp1 = document.getElementById('mdp1').value;
		var mdp2 = document.getElementById('mdp2').value;
		var dateNaissance = document.getElementById('date_naissance').value;
		var mail1 = document.getElementById('mail1').value;
		var mail2 = document.getElementById('mail2').value;
		if(mail1 === mail2){
			mail = true;	
		}
		if(mdp && mail && date) {
			if(document.getElementById('radioEtu').checked){
				ngDialog.close({});
				ngDialog.open({ template: 'partials/etudiant.php', $scope: $scope });
			}
			else if(document.getElementById('radioEntr').checked){
				ngDialog.close({});
				ngDialog.open({ template: 'partials/entreprise.php', $scope: $scope });
			}
		}
	};
	$scope.verifCond = function () {
		if(document.getElementById('cgu').checked) {
			ngDialog.close({});
			ngDialog.open({ template: 'partials/confirmInscription.php', $scope:$scope });
		}
	};
	$scope.openInscription = function () {
		ngDialog.open({ template: 'partials/inscription.php', $scope: $scope });
	};  
	$scope.openInscriptionClose = function() {
		ngDialog.close({});
		ngDialog.open({ template:'partials/inscription.php', $scope: $scope });
	};
	$scope.closeDialog = function() {
		ngDialog.close({});
	};
	$scope.openBD = function () {
		ngDialog.open({ template:'partials/equipeBd.php', $scope: $scope });
	};
	$scope.openCSS = function () {
		ngDialog.open({ template:'partials/equipeCss.php', $scope: $scope });
	};
	$scope.openPHP = function () {
		ngDialog.open({ template:'partials/equipePhp.php', $scope: $scope });
	}
});

//Définition des contrôleurs
var routeAppControllers = angular.module('routeAppControllers', []);


// Contrôleur de la page d'accueil
routeAppControllers.controller('homeCtrl', ['$scope',
											function(){
												document.getElementById('menuAccueil').style.backgroundColor='#f90';
												document.getElementById('menuRecherche').style.backgroundColor='#ebddbc';
												document.getElementById('menuFaq').style.backgroundColor='#ebddbc';
												document.getElementById('menuContact').style.backgroundColor='#ebddbc';
												document.getElementById('lienAccueil').style.color='white';
												document.getElementById('lienRecherche').style.color='black';
												document.getElementById('lienFaq').style.color='black';
												document.getElementById('lienContact').style.color='black';
											}
										   ]);

//Contrôleur de la page recherche
routeAppControllers.controller('rechercheCtrl',['$scope',
												function(){
													document.getElementById('menuRecherche').style.backgroundColor='#f90';
													document.getElementById('menuAccueil').style.backgroundColor='#ebddbc';
													document.getElementById('menuFaq').style.backgroundColor='#ebddbc';
													document.getElementById('menuContact').style.backgroundColor='#ebddbc';
													document.getElementById('lienRecherche').style.color='white';
													document.getElementById('lienAccueil').style.color='black';
													document.getElementById('lienFaq').style.color='black';
													document.getElementById('lienContact').style.color='black';
												}
											   ]);

//Contrôleur de la page faq
routeAppControllers.controller('faqCtrl',['$scope',
										  function(){
											  document.getElementById('menuFaq').style.backgroundColor='#f90';
											  document.getElementById('menuAccueil').style.backgroundColor='#ebddbc';
											  document.getElementById('menuRecherche').style.backgroundColor='#ebddbc';
											  document.getElementById('menuContact').style.backgroundColor='#ebddbc';
											  document.getElementById('lienFaq').style.color='white';
											  document.getElementById('lienRecherche').style.color='black';
											  document.getElementById('lienAccueil').style.color='black';
											  document.getElementById('lienContact').style.color='black';
										  }
										 ]);

// Contrôleur de la page de contact
routeAppControllers.controller('contactCtrl', ['$scope',
											   function(){
												   document.getElementById('menuContact').style.backgroundColor='#f90';
												   document.getElementById('menuAccueil').style.backgroundColor='#ebddbc';
												   document.getElementById('menuFaq').style.backgroundColor='#ebddbc';
												   document.getElementById('menuRecherche').style.backgroundColor='#ebddbc';
												   document.getElementById('lienContact').style.color='white';
												   document.getElementById('lienRecherche').style.color='black';
												   document.getElementById('lienFaq').style.color='black';
												   document.getElementById('lienAccueil').style.color='black';
											   }
											  ]);  