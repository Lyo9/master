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

//On vérifie s'il y a une modification des langues 
if(isset($_GET['langue']))
{
    $langue = $_GET['langue']; 
    //Si l'utilisateur a cliqué sur le drapeau français
    if($langue == 'fr')
    {
        $_SESSION['langue'] = 'fr';
    }
    elseif($langue == 'en')
    {
        $_SESSION['langue'] = 'en'; 
    }
}


//Récupération du fichier langue 
if($_SESSION['langue'] == "fr")
require_once("./lang/FR-fr.php");
elseif($_SESSION['langue'] == "en")
require_once("./lang/EN-en.php");


//Affichage de l'accueil par défaut 
$contenu = "./vue/accueil.php";


//L'utilisateur a cliqué sur un lien
if(isset($_GET['action']))
{

    $action = $_GET['action']; 

    //L'utilisateur a choisi un lien du menu culture 
    if($action == "culture")
    {
        $contenu = "./vue/lieux_culturels.php"; 
    }

    //L'utilisateur a cliqué sur "Laisser un commentaire"
    if($action == 'leavefeedback')
    {
        //Chargement de l'interface "laisser un commentaire" 
        $contenu = "./vue/feedback.php"; 
    }

    //L'utilisateur veut envoyer son mail 
    if($action == 'sendFeedback')
    {
        $statutErreur = null; 
        $messageErreurs = array(); 

        //Récupération des informations 
        $mail = $_POST['adresseMail']; 
        $objet = $_POST['feedbackObjet']; 
        $feedbackMessage = $_POST['feedbackTexte']; 

        //$pattern = "#[A-Z0-9a-z._%+-@]#"; 

        //Si toutes les valeurs sont OK (Série de tests)
        //Adresse mail nulle 
        if($mail == "")
        {
            $statutErreur = "erreur"; 
            $message = ERREUR_MAIL_INVALIDE; 
            array_push($messageErreurs,$message); 
        }

        //Adresse mail invalide 
        /*if(preg_match($pattern, $mail))
        {
            $statutErreur = "erreur"; 
            $messageErreur = ERREUR_MAIL_INVALIDE; 
        }
        */

        //Si pas d'objet dans le mail 
        if($_POST['feedbackObjet'] == "")
        {
            $objet = "Lyon 9"; 
        }

        //Si la zone de commentaire est vide 
        if($feedbackMessage == "")
        {
            $statutErreur = "erreur"; 
            $message = ERREUR_CORPS_MAIL_VIDE;
            array_push($messageErreurs,$message);       
        }


        //Si aucune erreur 
        if($statutErreur != "erreur")
        {
            //On envoie le mail 

            //On confirme le bon déroulement de l'envoi du feedback 
            $statutErreur = "succes"; 
            $message = SUCCES_ENVOI_MAIL; 
            array_push($messageErreurs,$message);
        }


        //Chargement de l'interface "Laisser un commentaire" 
        $contenu = "./vue/feedback.php"; 
    }

}




//Récupération des articles 
$listeArticles = getArticles();




//Appel des vues 
require_once("vue/menu.php");
require_once($contenu);
//require_once("./vue/footer.php");

?>