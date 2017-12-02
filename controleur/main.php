<?php

/****************************************************************************************************************/
/**************************************Contrôleur main.php*******************************************************/
/*******************************Création : 30/11 par Maxime Pie *************************************************/
/*Le main est appelé par index.php. Il charge les bibliothèques ainsi que la base. Définit le contenu à afficher*/
/****************************************************************************************************************/ 

//Récupération des ressources 

//Connection à la base de données  
require_once('./modele/ConnexionSql.php'); 


//Récupération du modèle d'articles 
require_once("./modele/articles.php"); 



//Traitement des données 

//S'il n'y a aucune langue sélectionnée
if(!isset($_SESSION['langue']))
{
    //On règle la langue sur français
    $_SESSION['langue']="fr"; 
}

$contenu = "./vue/accueil.php";

if(isset($_GET['action']) && $_GET['action'] == 'leavefeedback')
{
    $contenu = "./vue/feedback.php"; 
}


//Récupération des articles 
$listeArticles = getArticles();




//Appel des vues 
require_once("./vue/logo.php"); 
require_once("./vue/menu.php");
require_once($contenu);
require_once("./vue/footer.php");

?>