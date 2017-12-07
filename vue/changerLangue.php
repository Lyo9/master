<?php

/****************************************************************************************************************/
/**************************************Vue/changerLangue.php*******************************************************/
/*******************************Création : 02/12 par Maxime Pie *************************************************/
/*Appelé par le contrôleur lorsque le visiteur clique sur "feedback" ***************************************************/
/****************************************************************************************************************/ 


if(isset($_SESSION['langue']))
{
    $langue = $_SESSION['langue']; 

    if(isset($_GET['action']))
    {
    	$page = "&action=".$_GET['action']; 
    }
    else
    {
    	$page = "";
    }


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