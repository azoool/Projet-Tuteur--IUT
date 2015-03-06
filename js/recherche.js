window.onkeydown = focus; // lorsqu'on appuie n'importe ou dans la fenêtre on donne le focus sur l'input

function focus() {  document.getElementById('searchBar'); }

 var actuelle = new Date();

function recherche() {
    var input = document.getElementById('searchBar').value.toLowerCase(); // C'est la valeur qu'on entre dans le champs input et le tout en minuscule pour la comparaison
    var inputTab = input.split(" ").length; // C'est le nombre d'espace

    

    for (i = 0 ; i < inputTab-1 ; i++)
        input = input.replace(" ",""); // Tant qu'il y a des espaces on les enlève pour simplifier la comparaison

    for(var i = 0 ; i < tableau.length ; i++){

        sousTableau = tableau[i].split(';'); // On sépare les informations d'un contact en un sousTableau
        prenom = sousTableau[0].toLowerCase().substring(0, input.length); // On récupère chaque champs en LowerCase et uniquement la partie du début à la taille de notre recherche
        nom = sousTableau[1].toLowerCase().substring(0, input.length);
        mail = sousTableau[2].toLowerCase().substring(0, input.length);
        age = (actuelle.getFullYear() - sousTableau[3] + "").substring(0, input.length); // on fait le calcul puis transformation en string puis surbstring
        adresse = sousTableau[4].toLowerCase(); // Ici pas encore de substring vu qu'on va modifier cette String
        numero = sousTableau[5].toLowerCase();      

        prenomnom = (sousTableau[0].toLowerCase() + sousTableau[1].toLowerCase()).substring(0, input.length);
        nomprenom = (sousTableau[1].toLowerCase() + sousTableau[0].toLowerCase()).substring(0, input.length);        
        adresseTab = adresse.split("_").length; // C'est ici le nombre de _
        numeroTab = numero.split("_").length;

        // Pourquoi fait on cela ?
        // Parce que nous avons fait le choix de ne pas prendre en compte les espaces dans l'input.
        // Donc il faut les enlever lors de la comparaison.
        // Mais le seul moyen de les afficher correctement c'est de mettre un signe ici "_" pour savoir lors de l'affichage ou se trouve les espaces.

        for(var k = 0 ; k < adresseTab-1 ; k++)
            adresse = adresse.replace("_", ""); // On enlève les _ tant qu'il y en a.

        for(var j = 0 ; j < numeroTab-1 ; j++)
            numero = numero.replace("_", "");

        numero = numero.substring(0, input.length); // Et enfin on fait un sbstring classique
        adresse = adresse.substring(0, input.length);

        normalise('prenom', i);
        normalise('nom', i);
        normalise('mail', i);
        normalise('annee', i);
        normalise('adresse', i);
        normalise('numero', i);
        normalise('nomprenom', i); // On enlève tous les styles aux span.

    
        if(input.length == 0) // Si le champs de recherche est vide alors on display: none tous les articles.
            for(var i = 0 ; i < tableau.length ; i++)
                document.getElementById('article'+i).style.display = "none";               
if(input == prenom || input == prenomnom || input == nom || input == nomprenom || input == age || input == adresse || input == numero || input == mail){
        if(input == prenom || input == nom || input == prenomnom || input == nomprenom)
            surlignement('nomprenom', i);

        if(input == age)
            surlignement('annee', i);

        if(input == adresse)
            surlignement('adresse', i);

         if(input == numero)
            surlignement('numero', i);

     if(input == mail)
            surlignement('mail', i);  
}
        else
            document.getElementById('article'+i).style.display = "none";

    } // fin for
} // fin recherche()

function surlignement (elem, i) {   
    document.getElementById('article'+i).style.display = "inline-block";
    document.getElementById(elem+i).className = "surlignement";
    
} // fin surlignement

function normalise (elem, i){
    document.getElementById(elem+i).className = "normalise";
} // fin normalise