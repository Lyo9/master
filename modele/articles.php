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

//Sélectionner tous les articles en fonction de la catégorie
function getArticlesByCategorie($categorie){
    global $bdd; 

    $query = "Select * from article WHERE article_categorie =".$categorie.";"; 

    $results = $bdd->query($query); 

    //$data = $results->fetch();
    
    return $results; 
}


//Sélectionner tous les articles confondus
function getArticles(){
    global $bdd; 

    $query = "Select * from article"; 

    $results = $bdd->query($query); 

    //$data = $results->fetch();
    
    return $results; 
}

//Insère un article dans la base  (à compléter)
function creerArticles($valeur){
    $query = "insert into `article` (`Id_personne`, `Nom`, `Prenom`, `Age`) VALUES (NULL, 'Leponche', 'Bob', '999')";
}

//Modifie un article dans la base (à compléter)
function modifierArticle($valeur){
   $query = "update `personne` set `Nom` = 'InoBobino' where `personne`.`Id_personne` = 1";
}
      
       
?>