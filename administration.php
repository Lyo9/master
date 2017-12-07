<!DOCTYPE html>
<html>
<head>
  <title></title>
    <link rel="stylesheet" href="./style/stylesheet.css"/>

</head>
<body>


<img class = "image-fond" src = "./ressources/images/fond_admin.JPG"/>


<?php

$motDePasse = 'lyo9corp1234'; 


//Si l'utilisateur est connecté 
if(isset($_POST['password']) && $_POST['password'] == $motDePasse)
{
  try{
  $base = new PDO('mysql:host=127.0.0.1;dbname=lyo9corp','root','');
  $base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  ?>

  <?php require_once("./vue/logo_link.php");?>

  <form method="post" action="#">
  <h1>CREER UN ARTICLE </h1>
  <fieldset class="Article">
         <legend>Article</legend> <!-- Titre du fieldset --> 

         <label for="Titre">Titre : </label>
         <input type="text" name="Titre" id="Titre" />
  <br>
         <label for="Titre">Titre Anglais : </label>
         <input type="text" name="TitreA" id="TitreA" />
  <br>

   <label for="Categorie">Catégorie : </label><br />
         <select name="Categorie" id="Categorie">
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
        <textarea name="Contenu" id="Contenu"> </textarea>
   <br>
    <label for="Contenu">Contenu Anglais: </label>

         <textarea name="ContenuA" id="ContenuA"> </textarea>
   <br>
         <label for="Image">Image : </label>
         <input type="text" name="Image" id="Image" />
         <input type="checkbox" name="Evenement" calss="Evenement" onchange="affiche()">Evenement
     </fieldset>
   
     <fieldset class="Event" style="display:none">
         <legend>Evenement</legend> <!-- Titre du fieldset -->

         <br>
         <label for="Lieu">Lieu : </label>
         <input type="text" name="Lieu" id="Lieu" />
  <br>
    <label for="Date">Date debut : </label>
                   <input type="date" name="Date">
         <br/>
           <label for="Date">Date fin (si différente) : </label>
                   <input type="date" name="DateF">
         <br/>
               <label for="Debut">Heure de Debut : </label>    <input type="time" name="Debut">
                  <label for="Fin">Heure de Fin: </label> <input type="time" name="Fin">
                                  <br/>
                  <label for="Prix">Prix: </label> <input type="text" name="Prix">
                  <br>
                  <label for="Age">Age minimum: </label> <input type="text" name="Age">
   
     </fieldset>
         <input type="submit" value="Envoyer" />
      <br/>
      </form>

      <?php 
  if (isset($_POST['id'])) {

  $sql="DELETE FROM article WHERE article_id=:id";
  $result = $base->prepare($sql);
  $result->execute(array('id' => $_POST['id']));

   echo "l'article à bien été supprimé";
  }
     
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

  $sql="INSERT INTO events (date_debut,date_fin,lieu,prix,age_minimum) VALUES (:dateDebut,:dateFin,:lieu,:prix,:age)";
  $result = $base->prepare($sql);
  $result->execute(array('dateDebut' => $DateDebutEvent,'dateFin'=>$DateFinEvent,'lieu'=>$LieuEvent,'prix'=>$PrixEvent,'age'=>$AgeMinEvent));

      $articleValide=true; // tout les champs ont été correctement renseignés
      echo "Evenement créé. ";
  }

  if ($articleValide) {
  //on récupère l'id de l'event pour la création de l'article
       $Event=$base->lastInsertId();

  }else{

    $Event=NULL;

  }

    }//fin if isset event

    //si on à pas d'evenement on a quand même un article
  else{

    $articleValide=true;

  }
  //si l'article est valide on l'ajoute en bdd
  if($articleValide){
  $sql="INSERT INTO article (article_titre,titre_anglais,article_categorie,description,description_anglais,image,id_evenement,Auteur) VALUES (:titre,:titreA,:categorie,:description,:descriptionA,:image,:event,:auteur)";
  $result = $base->prepare($sql);
  $result->execute(array('titre' => $TitreArticle,'titreA'=>$TitreArticleAnglais,'categorie'=>$CategorieArticle,'description'=>$ContenuArticle,'descriptionA'=>$ContenuArticleAnglais,'image'=>$ImageArticle,'event'=>$Event,'auteur'=>NULL));
    
  echo " Article créé. ";

  }else{

    echo "L'article n'a pas été créé.";

  }

  }//fin else champs vides

  }  //fin if isset titre...




  ?>

  <h1>ARTICLES EXISTANTS</h1>
  <?php

  $articles = $base->query('SELECT 
  article.article_id AS Id,
  article.article_titre AS Titre,
  categorie.description AS Categorie,
  article.description AS Contenue,
  article.image AS Image,
  article.id_evenement AS Event,
  events.date_debut AS DateDebut,
  events.date_fin AS DateFin,
  events.lieu AS Lieu,
  events.prix AS Prix,
  events.age_minimum AS Age
  FROM `article` LEFT JOIN categorie ON article.article_categorie=categorie.id LEFT JOIN events ON article.id_evenement=events.id WHERE 1');

  while($article = $articles->fetch()){



    echo 'Titre:'.$article['Titre']."<br>".$article['Categorie']."<br>".$article['Contenue']."<br><img src = '".$article['Image']."'/><br>";
    
    if($article["Event"]!=''){

  $dateDebut = date_create_from_format('d/M/Y:H:i:s', $article['DateDebut']);

  $dateFin = date_create_from_format('d/M/Y:H:i:s', $article['DateFin']);

        echo "Date Evenement du ".substr($article['DateDebut'],2,9)." au ".substr($article['DateFin'],2,9)."<br> Heure Evenement de ".substr($article['DateDebut'],-8,5)." à ".substr($article['DateFin'],-8,5);

    }//fin de test si un event est lié à l'article
  ?>

  <form method="post" action="#"> 
    <input type="hidden" name="id" value="<?php echo $article['Id']?>">
    <input type="submit" value="Supprimer" />
  </form>

  <form method="post" action="tests2.php"> 
    <input type="hidden" name="id" value="<?php echo $article['Id']?>">
    <input type="submit" value="Modifier" />
  </form>
  <?php


  echo "<br><br>";


  }//fin d'affichage des articles


  }// fin try

  catch(Exception $e){
    die('Erreur :'.$e->getMessage());
  }

  
}
else //Sinon on affiche l'écran de connexion 
{

  //Si l'utilisateur s'est trompé de mot de passe 
  if(isset($_POST['password']) && $_POST['password'] != $motDePasse)
  {
    $erreur = "<div class = 'erreur'>Erreur, ressayez avec un autre mot de passe</div>"; 
    $style = "border-bottom:red solid 3px"; 
  }

  ?>
  <div class = "connexion-conteneur">
    <div class = "contenu-admin">

      <?php require_once("./vue/minilogo.php");?>

      <form method="post" action="#" name = "connexionForm" class = "connexionForm">
        <input style = "<?php echo (isset($style)?$style:''); ?>" type = "password" placeholder = "Mot de passe administrateur" name = "password"></input>
        <?php echo (isset($erreur)?$erreur:'');  ?>
        <button>Se connecter</button>
      </form>

    </div>
  </div>


  <?php 
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
</script>