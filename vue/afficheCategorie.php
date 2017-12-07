<?php 
    //Pour chaque catégorie présente dans le tableau 
    foreach($categories as $categorie)
    {
    ?>
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


            </div>
        </div>
            <?php
        }
?>
