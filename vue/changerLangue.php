<?php

/****************************************************************************************************************/
/**************************************Vue/changerLangue.php*******************************************************/
/*******************************Création : 02/12 par Maxime Pie *************************************************/
/*Appelé par le contrôleur lorsque le visiteur clique sur "feedback" ***************************************************/
/****************************************************************************************************************/ 


if(isset($_SESSION['langue']))
{
    $langue = $_SESSION['langue']; 


    //Si l'utilisateur est déjà sur une page en particulier
    if(isset($_GET['action']))
    {
    	//On récupère sa page et on le renvoie dessus 
    	$page = "&action=".$_GET['action']; 
    }
    else
    {
    	$page = "";
    }

    //On analyse la valeur de la langue envoyée en get
    if($langue == "fr")
    {
    	$route = "./index.php?langue=en".$page;

        echo '<a href = "'.$route.'"><img class = "country-flag" src = "./ressources/drapeauangleterre.png" alt = "Drapeau anglais"></img></a>'; 
    }
    else if($langue == "en")
    {
    	$route = "./index.php?langue=fr".$page;
        echo '<a href = "'.$route.'"><img class = "country-flag" src = "./ressources/drapeaufrance.png" alt = "Drapeau français"></img></a>'; 
    }
}


?>