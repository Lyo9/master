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



?>
<head>
    <link rel="stylesheet" href="stylesheet.css"/>
</head>


<div class = "contenu-accueil-main">
    <img class = "image-accueil" src = "./ressources/images/accueil.JPG" alt = "Lyon"/>
    <div class = "contenu-accueil">
        <?php
            //Premier test de texte 
            echo "<div class = 'headerMessage'>".MESSAGE_D_ACCUEIL."</div>"; 
            //Lister deux ou trois articles 
            if(isset($listeArticles))
            {
                foreach($listeArticles as $article)
                {
                    echo "<div class = 'article'> ".$article['article_titre']."</div>"; 
                }
            }
        ?>
    </div>
</div>


<?php 
?>