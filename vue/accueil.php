<?php 
/****************************************************************************************************************/
/**************************************Vue/Accueil main.php*******************************************************/
/*******************************Création : 30/11 par Maxime Pie *************************************************/
/*Appelé par le contrôleur lorsqu'aucun paramètre n'est entré ***************************************************/
/****************************************************************************************************************/ 


//Inclusion des ressources 
if($_SESSION['langue'] == "fr")
require_once("./lang/FR-fr.php");
elseif($_SESSION['langue'] == "en")
require_once("./lang/EN-en.php");


//Inclusion du menu 
?>
<img class = "image-fond" src = "./ressources/images/accueilFond.JPG"/>
<div class = "contenu-accueil-principal">
    <div class = "carrousel" id = "carrousel">

        <div class = "carrousel-element" id = "slide-1">
            <img class = "image-accueil" src = "./ressources/images/accueil.JPG" alt = "Lyon"/>
            <div class = "contenu-accueil">
                <i class = "fa fa-arrow-left defilement-carrousel carrousel-gauche" onClick="defileGauche(0)"></i>
                <div class = "contenu-carrousel-centre">
                    <?php require_once("./vue/logo.php"); ?>
                    <div class = "sous-titre-contenu titre"><?php echo SOUS_TITRE_ACCUEIL; ?></div>
                    <div id='commencer-visite' class = 'boutton-carrousel contenu' onClick = "defileDroite(0)"><?php echo COMMENCER_VISITE;?></div>
                    </div>
                <i class = "fa fa-arrow-right defilement-carrousel carrousel-droite " onClick="defileDroite(0)"></i>
            </div>
        </div>

        <div class = "carrousel-element">
            <img class = "image-accueil" src = "./ressources/images/zone_industrielle.JPG" alt = "Lyon"/>
            <div class = "contenu-accueil">
                <i class = "fa fa-arrow-left defilement-carrousel carrousel-gauche" onClick="defileGauche(1)"></i>
                <div class = "contenu-carrousel-centre">
                    <div class = "titre-contenu titre"><?php echo SLIDE_DEUX_TITRE; ?></div>
                    <div class = "sous-titre-contenu titre"><?php echo SLIDE_DEUX_TEXTE; ?></div>
                    <a  class = 'boutton-carrousel contenu' href = "./index?action=vieDuQuartier"><?php echo SLIDE_DEUX_BOUTON;?></a>
                </div>
                <i class = "fa fa-arrow-right defilement-carrousel carrousel-droite " onClick="defileDroite(1)"></i>
                </div>
        </div>
        <div class = "carrousel-element">
            <img class = "image-accueil" src = "./ressources/images/zone_histoire.JPG" alt = "Lyon"/>
            <div class = "contenu-accueil">
                <i class = "fa fa-arrow-left defilement-carrousel carrousel-gauche" onClick="defileGauche(2)"></i>
                <div class = "contenu-carrousel-centre">
                    <div class = "titre-contenu titre"><?php echo SLIDE_TROIS_TITRE; ?></div>
                    <div class = "sous-titre-contenu titre"><?php echo SLIDE_TROIS_TEXTE; ?></div>
                    <a class = 'boutton-carrousel contenu' href = "./index.php?action=incontournables"><?php echo SLIDE_TROIS_BOUTON;?></a>
                </div>
                <i class = "fa fa-arrow-right defilement-carrousel carrousel-droite " onClick="defileDroite(2)"></i>
            </div>
        </div>
        <div class = "carrousel-element">
            <img class = "image-accueil" src = "./ressources/images/zone_dynamique.JPG" alt = "Lyon"/>
            <div class = "contenu-accueil">
                <i class = "fa fa-arrow-left defilement-carrousel carrousel-gauche" onClick="defileGauche(3)"></i>
                <div class = "contenu-carrousel-centre">
                    <div class = "titre-contenu titre"><?php echo SLIDE_QUATRE_TITRE; ?></div>
                    <div class = "sous-titre-contenu titre"><?php echo SLIDE_QUATRE_TEXTE; ?></div>
                    <a id='commencer-visite' class = 'boutton-carrousel contenu' href="./index.php?action=culture"><?php echo SLIDE_QUATRE_BOUTON;?></a>
                </div>
                <i class = "fa fa-arrow-right defilement-carrousel carrousel-droite " onClick="defileDroite(3)"></i>
            </div>
        </div>
    </div> 
</div>

<div class = "contenu-hors-carrousel">
    <div class = "map-container">
        <div class = "map" id = "map">
            Placer la map ici
            <script>
              function initMap() {
                var uluru = {lat: 45.780426, lng: 4.805059};
                var map = new google.maps.Map(document.getElementById('map'), {
                  zoom: 14,
                  center: uluru
                });
                var marker = new google.maps.Marker({
                  position: uluru,
                  map: map
                });
              }
            </script>
            <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAI0Lj-V2CL0k77wK_EyyATp4SCDUmenf8&callback=initMap">
            </script>
        </div>
    </div>
    <div class = "texte-presentation-bandeau">
        <div class = "texte-presentation-titre titre">
            Lyon 9
        </div>
        <div class = "texte-presentation-header-border">
            <img src = "./ressources/images/footerSymbol.png"/>
        </div>
        <div class = "texte-presentation-contenu contenu">
            <?php echo TEXTE_PRESENTATION_CONTENU; ?>
        </div>
    </div>
</div>

<?php 

//Lister deux ou trois articles
/*if(isset($listeArticles))
{
    foreach($listeArticles as $article)
    {
        echo "<div class = 'article'> ".$article['article_titre']."</div>"; 
    }
}*/
?>
<script>
        document.getElementsByClassName('accueil')[0].classList.add("active");
</script>
