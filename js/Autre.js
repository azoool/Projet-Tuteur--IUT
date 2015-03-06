/* ====================================================================== PHP ============================================================================================ */

function testURL() {
    if(window.location.search != "")
        if(location.search == "?n") // j'ai mis n mais on peut bien mettre ce que l'on veut
            animationInformationAjout();
        else if(location.search == "?d")
            animationInformationSuppression();
}




function animationInformationAjout () {
    document.getElementById('InformationAjout').style.top = "0px";
    timerAnimation = setTimeout("fermetureInformationAjout()",3000);
} 
function fermetureInformationAjout () {
    document.getElementById('InformationAjout').style.top = "-100px";
    clearTimeout(timerAnimation);
}
function animationInformationSuppression () {
    document.getElementById('InformationSuppression').style.top = "0px";
    timerAnimation = setTimeout("fermetureInformationSuppression()",3000);
}
function fermetureInformationSuppression () {
    document.getElementById('InformationSuppression').style.top = "-100px";
    clearTimeout(timerAnimation);
}


/* ===================== Changement de position ===================== */

function colonne() {
    for(var i = 0 ; i < tableau.length ; i++){
        document.getElementById('article'+i).className = "articlePresentation";
        document.getElementById('delete'+i).className = "DeleteColone";
    }
}

function ligne() {
    for(var i = 0 ; i < tableau.length ; i++){
        document.getElementById('article'+i).className = "articlePresentationLigne";
        document.getElementById('delete'+i).className = "DeleteLigne";
    }
}

function visibilite(DeleteID){
    document.getElementById(DeleteID).style.display ="block";
}



/* ====================================================================== JAVASCRIPT ============================================================================================ */

/* A ajouter si on ne passe pas par la base de données.

var tableau = ["Guillaume;Briday;guillaumebriday@gmail.com;1994;304_Rue_Garibaldi;06_76_42_83_79", // Correspond à tableau[0] et Guillaume à sousTableau[0] par exemple
                "Ugo;Tollet;aucuneidee@gmail.com;1993;77_Rue_Pré_Gaudry;06_21_92_15_96", // On met des tirets pour connaitre l'emplacement des espaces
                "Arthur;Freiche;aucuneidee@gmail.com;1995;1_Rue_Marteret;04_26_55_57_28",
                "Ariane;Chevalier;aucuneidee@gmail.com;1995;35_rue_des_bites;04_26_55_57_28",
                "Maelle;Louise;aucuneidee@gmail.com;1995;15_Rue_Eugene_Vial;06_07_08_09_10",
                "Laura;Benat;aucuneidee@gmail.com;1995;Grand_Trou;04_26_55_57_28",
                "Rodolphe;Pelissier;aucuneidee@gmail.com;1994;Neuville_lyon;06_07_09_08_10",
                "Quentin;Meltzheim;aucuneidee@gmail.com;1995;21_rue_président_edouard_herriot;06_11_32_74_67"
              ];

function creation() {
    for(var i = 0 ; i < tableau.length ; i++){
            sousTableau = tableau[i].split(';');
            prenom = sousTableau[0];
            nom = sousTableau[1];
            mail = sousTableau[2]
            age = sousTableau[3]
            adresse = sousTableau[4];
            numero = sousTableau[5];

            age = actuelle.getFullYear() - age;

            numeroTab = numero.split("_");
            numero = ""; // numero devient un string et surtout il est vide 
            for(var l = 0 ; l < numeroTab.length ; l++)
                numero += numeroTab[l] + " "; // On concatene numero avec le numero le numeroTab pour éviter d'utiliser replace pour rien vu que le sous tableau est déjà créé.

            adresseTab = adresse.split("_").length;            
            for (var j = 0 ; j < adresseTab-1 ; j++)
                adresse = adresse.replace("_"," "); // On met des espaces tant qu'il y a des _

            // Comme on ne connait pas le nombre de contacts, on ne va pas s'amuser à créer à la main un <article> par contact...

            nouveauArticle = document.createElement('article'); // On créer une balise <article>
            nouveauArticle.id = 'article'+ i; // Avec l'id article+i pour les distinguer et intéragir avec elles.
            nouveauArticle.className = "articlePresentation";
            nouveauArticle.innerHTML = "<h1><span id=\"nomprenom"+i+"\"><span id=\"nom"+i+"\">"+nom+"</span> <span id=\"prenom"+i+"\">"+prenom+"\</span></span></h1> <span class=\"age\"> &bull; <span id=\"annee"+i+"\">"+age+" ans</span></span><span id=\""+i+"\" class=\"PetiteCroix\" onclick=\"visibilite(\"delete"+i+"\"); \"></span><div id=\"delete"+i+"\" class=\"DeleteColone\" onclick=\"cacher(\"article"+i+"\");\">Supprimer</div><div><p>Mail : <span id=\"mail"+i+"\"><a href=\"mailto:"+mail+"\">"+mail+"</a></span></p><p>Adresse : <span id=\"adresse"+i+"\">"+adresse+"</span></p><p>Numéro : <span id=\"numero"+i+"\">"+numero+"</span></p></article>";

            document.getElementById("ContentArticle").appendChild(nouveauArticle); // Une fois le texte placé on créer définitivement larticle et on le place sous ContentArticle en dernière position.
    }
} // fin creation*/