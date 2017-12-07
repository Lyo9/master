<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

try{


$base = new PDO('mysql:host=127.0.0.1;dbname=lyon9corp','root','');
$base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

var_dump($_POST);

//select dans la base l'article actuel pour préremplir les champs

$sql='SELECT 
article.article_id AS Id,
article.article_titre AS Titre,
article.titre_anglais AS TitreA,
categorie.description AS Categorie,
article.description AS Contenue,
article.description_anglais AS ContenueA,
article.image AS Image,
article.id_evenement AS Event,
DATE_FORMAT(events.date_debut,"%Y-%m-%d") AS DateDebut,
DATE_FORMAT(events.date_debut,"%H:%i") AS HeureDebut,
DATE_FORMAT(events.date_fin,"%Y-%m-%d") AS DateFin,
DATE_FORMAT(events.date_fin,"%H:%i") AS HeureFin,
events.lieu AS Lieu,
events.prix AS Prix,
events.age_minimum AS Age
FROM `article` LEFT JOIN categorie ON article.article_categorie=categorie.id LEFT JOIN events ON article.id_evenement=events.id WHERE article.article_id=:id';
$result = $base->prepare($sql);
$result->execute(array('id' => $_POST['id']));

$article=$result->fetch(); 

?>

<p><a href="testp2.html">  retour au site </a></p>

<form method="post" action="tests.php">
<h1>MODIFIER UN ARTICLE </h1>
<fieldset class="Article">
       <legend>Article</legend> <!-- Titre du fieldset --> 

       <label for="Titre">Titre : </label>
       <input type="text" name="Titre" id="Titre" value="<?php echo $article['Titre']?>" />
<br>
       <label for="Titre">Titre Anglais : </label>
       <input type="text" name="TitreA" id="TitreA" value="<?php echo $article['TitreA']?>" />
<br>

 <label for="Categorie">Catégorie : </label><br />
       <select name="Categorie" id="Categorie" value="<?php echo $article['Categorie']?>" >
           <optgroup label="Histoire et vie du quartier">
               <option value="1">Histoire</option>
               <option value="2">Liens</option>
               <option value="3">Education</option>
               <option value="4">Informations</option>
               <option value="5">Industries</option>
               <option value="6">Environnement</option>
           </optgroup>
           <optgroup label="Incontournables">
               <option value="7">Galerie</option>
               <option value="8">Bon Plan</option>
           </optgroup>
           <optgroup label="Culture Sport & Loisirs">
               <option value="9">Lieux culturels</option>
               <option value="10">Lieux Sportifs</option>
               <option value="11">Infrastructure</option>
           </optgroup>
       </select>
    <br>

       <label for="Contenu">Contenu : </label>
       <input type="textarea" name="Contenu" id="Contenu"  value="<?php echo $article['Contenue']?>"/>
 <br>
  <label for="Contenu">Contenu Anglais: </label>
       <input type="textarea" name="ContenuA" id="ContenuA"  value="<?php echo $article['ContenueA']?>"/>
 <br>
       <label for="Image">Image : </label>
       <input type="text" name="Image" id="Image"  value="<?php echo $article['Image']?>" />
       <input type="checkbox" name="Evenement"  calss="Evenement" <?php if ($article['Event']!=NULL) {
	echo'checked=\"checked\"';
} ?> onchange="affiche()">Evenement
   </fieldset>


   <fieldset class="Event">
       <legend>Evenement</legend> <!-- Titre du fieldset -->

       <br>
       <label for="Lieu">Lieu : </label>
       <input type="text" name="Lieu" id="Lieu"  value="<?php echo $article['Lieu']?>"/>
<br>
  <label for="Date">Date debut : </label>
                 <input type="date" name="Date"  value="<?php echo $article['DateDebut']?>">
       <br/>
         <label for="Date">Date fin (si différente) : </label>
                 <input type="date" name="DateF"   value="<?php echo $article['DateFin']?>">
       <br/>
             <label for="Debut">Heure de Debut : </label>    <input type="time" name="Debut"  value="<?php echo $article['HeureDebut']?>">
                <label for="Fin">Heure de Fin: </label> <input type="time" name="Fin"   value="<?php echo $article['HeureFin']?>">
                                <br/>
                <label for="Prix">Prix: </label> <input type="text" name="Prix"  value="<?php echo $article['Prix']?>">
                <br>
                <label for="Age">Age minimum: </label> <input type="text" name="Age"   value="<?php echo $article['Age']?>">
 
   </fieldset>

		<input type="hidden" name="id" value="<?php echo $_POST['id'];?>">
       <input type="submit" value="Update" />
    <br/>
    </form>
 <?php 
   
   $articleValide=false;
   $Event=NULL;
//teste si les champs existent
if (isset($_POST['Titre']) && isset($_POST['Contenu']) && isset($_POST['Categorie']) && isset($_POST['Image'])&&isset($_POST['TitreA']) && isset($_POST['ContenuA'])) {

// teste si ils sont vides

  if (($_POST['Titre'] || $_POST['Contenu'] || $_POST['Image'] || $_POST['Categorie'] || $_POST['TitreA'] || $_POST['ContenuA'])== ''){
    
    echo "Champs non renseignés. ";

  }else{

  $TitreArticle=$_POST['Titre'];
  $ContenuArticle=$_POST['Contenu'];
  $ImageArticle=$_POST['Image'];
  $CategorieArticle=$_POST['Categorie'];
  $TitreArticleAnglais=$_POST['TitreA'];
  $ContenuArticleAnglais=$_POST['ContenuA'];

// teste si la checkbox evenement est cochée

if (isset($_POST['Evenement'])&&$_POST['Evenement']=='on') { 

    if(isset($_POST['Date']) && isset($_POST['Debut']) && isset($_POST['Fin']) && isset($_POST['Prix']) && isset($_POST['Age']) && isset($_POST['Lieu'])){
 
      $DateDebutEvent=$_POST['Date'].' '.$_POST['Debut'];
      $PrixEvent=$_POST['Prix'];
      $AgeMinEvent=$_POST['Age'];
      $LieuEvent=$_POST['Lieu'];

//test si la date de fin est vide ( identique à celle de debut)
      if($_POST['DateF']==''){

          $DateFinEvent=$_POST['Date'].' '.$_POST['Fin']; //prépare la date pour etre en format DATETIME dans la Bdd

      }

      else{

         $DateFinEvent=$_POST['DateF'].' '.$_POST['Fin'];
      }

    }//fin if isset Date ...

    //teste la validité de la date
if (($_POST['Date']>$_POST['DateF']) || $_POST['DateF']==''&&$_POST['Debut']>$_POST['Fin']) {
  echo "Erreur de saisie la date de debut (ou heure de debut) doit etre antérieur à la date de fin. ";
}
else{

  //ajout de l'event en base

$sql="UPDATE `events` SET `date_debut`=:dateDebut,`date_fin`=:dateFin,`lieu`=:lieu,`prix`=:prix,`age_minimum`=:age WHERE id=:id";
$result = $base->prepare($sql);
$result->execute(array('dateDebut' => $DateDebutEvent,'dateFin'=>$DateFinEvent,'lieu'=>$LieuEvent,'prix'=>$PrixEvent,'age'=>$AgeMinEvent,'id'=>$article['Event']));

    $articleValide=true; // tout les champs ont été correctement renseignés
    echo "Evenement créé. ";
}

  }//fin if isset event

  //si on à pas d'evenement on a quand même un article
else{

  $articleValide=true;

}
//si l'article est valide on l'ajoute en bdd
if($articleValide){
$sql="UPDATE article SET `article_titre`=:Titre,`titre_anglais`=:TitreA,`article_categorie`=:Categorie,`description`=:Contenue,`description_anglais`=:ContenueA,`image`=:Image,`id_evenement`=:Event,`Auteur`=:auteur WHERE article_id = :id";
$result = $base->prepare($sql);
$result->execute(array('Titre' => $TitreArticle,'TitreA'=>$TitreArticleAnglais,'Categorie'=>$CategorieArticle,'Contenue'=>$ContenuArticle,'ContenueA'=>$ContenuArticleAnglais,'Image'=>$ImageArticle,'Event'=>$Event,'auteur'=>NULL,'id'=>$_POST['id']));
  
echo " Article créé. ";

}else{

  echo "L'article n'a pas été créé.";

}

}//fin else champs vides

}  //fin if isset titre...



 }// fin try

catch(Exception $e){
  die('Erreur :'.$e->getMessage());
}

    ?>
</body>
</html>
<script>
    function affiche() {
                var etat=document.getElementsByTagName('fieldset')[0].children[19].checked; 
                if(etat==true)
                {
                    document.getElementsByClassName('Event')[0].style.display='block';
                }else{
                    document.getElementsByClassName('Event')[0].style.display='none';

                }
    }
    function etatInit(){
    	document.getElementsByClassName('Event')[0].style.display='none';
    }
</script>

   <?php if($article['Event']==NULL)
   {
   	?>
<script>
	etatInit();
</script>
<?php 
}
?>