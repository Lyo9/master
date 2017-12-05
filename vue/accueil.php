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
require_once("vue/menu.php");


?>
<div class = "contenu-accueil-principal">
    <div class = "carrousel" id = "carrousel">

        <div class = "carrousel-element" id = "slide-1">
            <img class = "image-accueil" src = "./ressources/images/accueil.JPG" alt = "Lyon"/>
            <div class = "contenu-accueil">
                <i class = "fa fa-arrow-left defilement-carrousel carrousel-gauche" onClick="defileGauche(0)"></i>
                <div class = "contenu-carrousel-centre">
                    <div class = "titre-contenu titre">Lyon 9</div>
                    <div class = "sous-titre-contenu titre"><?php echo SOUS_TITRE_ACCUEIL; ?></div>
                    <div id='commencer-visite' class = 'boutton-carrousel contenu'><?php echo COMMENCER_VISITE;?></div>
                </div>
                <i class = "fa fa-arrow-right defilement-carrousel carrousel-droite " onClick="defileDroite(0)"></i>
            </div>
        </div>

        <div class = "carrousel-element">
            <img class = "image-accueil" src = "./ressources/images/zone_industrielle.JPG" alt = "Lyon"/>
            <div class = "contenu-accueil">
                <i class = "fa fa-arrow-left defilement-carrousel carrousel-gauche" onClick="defileGauche(1)"></i>
                <div class = "contenu-carrousel-centre">
                    <div class = "titre-contenu titre">Lyon 9</div>
                    <div class = "sous-titre-contenu titre"><?php echo SOUS_TITRE_ACCUEIL; ?></div>
                    <div id='commencer-visite' class = 'boutton-carrousel contenu'><?php echo COMMENCER_VISITE;?></div>
                </div>
                <i class = "fa fa-arrow-right defilement-carrousel carrousel-droite " onClick="defileDroite(1)"></i>
                </div>
        </div>
        <div class = "carrousel-element">
            <img class = "image-accueil" src = "./ressources/images/zone_histoire.JPG" alt = "Lyon"/>
            <div class = "contenu-accueil">
                <i class = "fa fa-arrow-left defilement-carrousel carrousel-gauche" onClick="defileGauche(2)"></i>
                <div class = "contenu-carrousel-centre">
                    <div class = "titre-contenu titre">Lyon 9</div>
                    <div class = "sous-titre-contenu titre"><?php echo SOUS_TITRE_ACCUEIL; ?></div>
                    <div id='commencer-visite' class = 'boutton-carrousel contenu'><?php echo COMMENCER_VISITE;?></div>
                </div>
                <i class = "fa fa-arrow-right defilement-carrousel carrousel-droite " onClick="defileDroite(2)"></i>
            </div>
        </div>
        <div class = "carrousel-element">
            <img class = "image-accueil" src = "./ressources/images/zone_dynamique.JPG" alt = "Lyon"/>
            <div class = "contenu-accueil">
                <i class = "fa fa-arrow-left defilement-carrousel carrousel-gauche" onClick="defileGauche(3)"></i>
                <div class = "contenu-carrousel-centre">
                    <div class = "titre-contenu titre">Lyon 9</div>
                    <div class = "sous-titre-contenu titre"><?php echo SOUS_TITRE_ACCUEIL; ?></div>
                    <div id='commencer-visite' class = 'boutton-carrousel contenu'><?php echo COMMENCER_VISITE;?></div>
                </div>
                <i class = "fa fa-arrow-right defilement-carrousel carrousel-droite " onClick="defileDroite(3)"></i>
            </div>
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

