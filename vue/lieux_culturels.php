<link rel="stylesheet" href="./style/stylesheet.css"/>
<link rel="stylesheet" href="./style/animations.css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<br class = "culture-fond">

    <img class = "image-fond" src = "./ressources/images/fond_culturel.JPG"/>
    
    <?php   
    $categories = array(LIEUX_CULTURELS,LIEUX_SPORTIFS, INFRASTRUCTURES); 

    ?>

    <div class="mon-container">
            <!-- LIEUX CULTURELS-->
        <?php  
        require_once("./vue/afficheCategorie.php");
        ?>
    </div>

    <div class = "categorie">               
        <div class = "titre-categorie titre">
            <?php echo $categorie;?>
        </div>
                
        <div class = "galerie-container">
            <?php 
            if(isset($listeArticles))
            {
                foreach($listeArticles as $article)
                {
                    ?>

                    <div class = "lieux">
                        <div class="calque calque_box1">
                            <div class = "contenu-flex">
                                <div class = "article_contenu">
                                    <div class = "article_title">
                                        <?php echo ($_SESSION['langue'] == 'en'? $article['titre_anglais']:$article['article_titre']);;?>
                                    </div>
                                    <div class = "separateur"></div>
                                    <div class = "article_metro_access">
                                        D - Gorge de loup 
                                    </div>
                                    <div class = "article_body">
                                        <?php 
                                        //Affiche la description dans la langue correspondante à la valeur session  
                                        echo ($_SESSION['langue'] == 'en'? $article['description_anglais']:$article['description']);?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <img class="images_culturelles" src=<?php echo '"'.$article['image'].'"'; ?>>
                    </div>                
                    <?php 
                }
            }
            ?>


        </div

</div>


<?php
 if(isset($_GET['sousMenu']) and $_GET['sousMenu']=="lieuxCulturels"){
     ?>
     <script>
         function Scrolldown() {
             window.scroll(0,0);
         }
         window.onload = Scrolldown;
     </script>
<?php
 }

if(isset($_GET['sousMenu']) and $_GET['sousMenu']=="lieuxSportifs"){
     ?>
    <script>
        function Scrolldown() {
            window.scroll(0,1120);
        }
        window.onload = Scrolldown;
    </script>
<?php
}

?>
<script>
    document.getElementsByClassName('sport')[0].classList.add("active");
</script>

