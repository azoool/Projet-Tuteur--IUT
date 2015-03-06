<!DOCTYPE html>
<html lang="fr" ng-app="routeApp">

<head>
    <meta charset="utf-8" />
    <title>Annuaire numérique des anciens élèves</title>
    <link rel="stylesheet" href="web/css/style.css">
    <link rel="stylesheet" href="web/css/ngDialog-theme-default.css">
    <link rel="stylesheet" href="web/css/ngDialog.css">
	<link rel="stylesheet" href="web/css/Icomoon.css">
	<script src="js/vendor/angular.js"></script>
	<script src="js/vendor/angular-route.js"></script>
	<script src="js/vendor/angular-sanitize.js"></script>
	<script src="js/script.js"></script>
	<script src="js/vendor/ngDialog.js"></script>
	<script src="js/Autre.js" type="text/javascript"></script>
	<script src="js/recherche.js" type="text/javascript"></script>
</head>

<body onload="focus(); testURL();">
    <div id="InformationAjout" onClick="fermetureInformationAjout()">Le contact a bien été ajouté à la base de données.</div>
    <div id="InformationSuppression" onClick="fermetureInformationSuppression()">Le contact a bien été supprimé de la base de données.</div>
    <nav id="menu">
        <div>
            <ul>
                <li id="menuAccueil"><a href="#/accueil" id="lienAccueil">Accueil</a>
                </li>
                <li id="menuRecherche"><a href="#/recherche" id="lienRecherche">Recherche</a>
                </li>
                <li id="menuFaq"><a href="#/faq" id="lienFaq">Faq</a>
                </li>
                <li id="menuContact"><a href="#/contact" id="lienContact">Contact</a>
                </li>
            </ul>
        </div>
    </nav>


    <div ng-view>
        <?php require( "php/creation.php"); ?>
    </div>



</body>
</html>