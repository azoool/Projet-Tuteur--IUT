<div onload="focus(); testURL();">
    

  
        <div id="ContentSection">
            <section>
                <div id="ContentArticle">
                    <article>
                        <input class="form-search" id="searchBar" autocomplete="off" type="text" placeholder="Rechercher un nom, prénom, un numéro de téléphone ou une adresse." onkeyup="recherche();"/>



                        <div id="selection"><span id="colonne" onClick="colonne();" title="Affichage Colonne"></span><span id="ligne" onClick="ligne();" title="Affichage Ligne"></span>
                        </div>

                    </article>

                    <!-- A enlever si on ne passe pas par la base de données. -->

                    <?php require( "../php/creation.php"); ?>



                </div>
                <!-- /ContentArticle -->
            </section>
        </div>
        <!-- /ContentSection -->
       
        <!-- /Footer -->

</div>
<script src="js/Autre.js" type="text/javascript"></script>
<script src="js/recherche.js" type="text/javascript"></script>