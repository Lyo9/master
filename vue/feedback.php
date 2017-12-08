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

?>

<img class = "image-fond" src = "./ressources/images/fond_contact.JPG"/>


<div class = "contact-conteneur">
	<div class = "contact-header titre"><?php echo FEEDBACK_HEADER;?></div>
	<div class = "contact-header-bottom-bar"></div>
	<form class = "contact-form" method = "post" name = "feedback" action = "./index.php?action=sendFeedback">

	<div class = "input-form">
		<div class = "input-icon">
			@
		</div>
		<input required placeholder = "Adresse mail" name = "adresseMail" id="adresseMail"/>
	</div>
	<div class = "input-form">
		<i class = "fa fa-question-circle input-icon">
		</i>	
		<input placeholder = "Objet" name = "feedbackObjet"/>
	</div>

	<div class = "input-form-textarea">
		<i class = "fa fa-comment-o input-icon">
		</i>	
		<textarea required placeholder = "Votre commentaire ... " name = "feedbackTexte"></textarea>
	</div>


	<button type = "submit" class = "submit-button titre"><i class = "fa fa-send-o send"></i>	 Envoyer</button>

	</form>

</div>

<?php 


?>