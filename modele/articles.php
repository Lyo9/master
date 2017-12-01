<?php

          
 
    
require_once("ConnexionSql.php"); 

/*function getAnnonces($marque='',$energie='',$kms=1){

    $query = ("Select * from voitures "); 
    if($marque || $energie)
    {
        $where = "WHERE marque = '$marque' AND energie = '$energie'";      
        $query = $query.$where; 
    }

    $results = $bdd->query($query); 

    return $results; 
}*/


function getArticles(){
    global $bdd; 

    $query = "Select * from article"; 

    $results = $bdd->query($query); 

    //$data = $results->fetch();
    
    return $results; 
}
      
       
?>