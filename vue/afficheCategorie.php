<?php 
    //Pour chaque catégorie présente dans le tableau 

    ?>
            <div class = "titre-categorie titre">
                <?php echo $categories[$categorie];?>
            </div>
            <?php 

            if(!empty($listeArticles))
            {
            ?>
                <div class = "galerie-container">
                    <?php 
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
                    ?>
                </div>
            <?php
            }
            else
            {

                ?>
                <div class = "galerie-container">
                    <div class = "lieux">
                            Aucun article dans cette catégorie pour le moment
                    </div>     
                </div>


                <?php 

            }
?>
            <?php
        
?>
