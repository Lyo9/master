<?php

/****************************************************************************************************************/
/**************************************Vue/changerLangue.php*******************************************************/
/*******************************Création : 02/12 par Maxime Pie *************************************************/
/*Appelé par le contrôleur lorsque le visiteur clique sur "feedback" ***************************************************/
/****************************************************************************************************************/ 


if(isset($_SESSION['langue']))
{
    $langue = $_SESSION['langue']; 

    if($langue == "fr")
    {
        echo '<a href = "./index.php?langue=en"><img class = "country-flag" src = "./ressources/drapeauangleterre.png" alt = "Drapeau anglais"></img></a>'; 
    }
    else if($langue == "en")
    {
        echo '<a href = "./index.php?langue=fr"><img class = "country-flag" src = "./ressources/drapeaufrance.png" alt = "Drapeau français"></img></a>'; 
    }
}


?>