<?php 
/****************************************************************************************************************/
/**************************************Vue/feedback main.php*******************************************************/
/*******************************Création : 02/12 par Maxime Pie *************************************************/
/*Appelé par le contrôleur lorsque le visiteur clique sur "feedback" ***************************************************/
/****************************************************************************************************************/ 


//Inclusion des ressources 
if($_SESSION['langue'] == "fr")
require_once("./lang/FR-fr.php");
elseif($_SESSION['langue'] == "en")
require_once("./lang/EN-en.php");


echo "<h1>".FEEDBACK_HEADER."</h1>"

//Affichage du formulaire de feedback 
?>
<form method = "post" name = "config" action = "./index.php">

<input placeholder = "Adresse mail" name = "adresseMail" id="adresseMail"/>
<input placeholder = "Objet" name = "feedbackObjet"/>
<textarea placeholder = "Votre commentaire ... " name = "feedback"/>

<button type = "submit">Envoyer</button>

</form>

<?php 


?>