<link rel="stylesheet" href="./style/stylesheet.css"/>
<link rel="stylesheet" href="./style/animations.css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<div class = "culture-fond">

    <img class = "image-fond" src = "./ressources/images/fond_culturel.JPG"/>

    <div class="mon-container">
        <!-- LIEUX CULTURELS-->
        <div class = "titre-categorie titre">
            <?php echo LIEUX_CULTURELS;?>
        </div>
                
        <div class = "galerie-container">

            <div class = "lieux">
                <div class="calque calque_box1">
                    <div class = "contenu-flex">
                        <div class = "article_contenu">
                            <div class = "article_title">
                                Une petite description des familles Lieux 1
                            </div>
                            <div class = "separateur"></div>
                            <div class = "article_metro_access">
                                D - Gorge de loup 
                            </div>
                            <div class = "article_body">
                                Le théâtre nouvelle génération (TNG) de Lyon 9 est fier de vous accueillir les ... Beaucoup de texte qui me passe par la tête. J'adore les pommes de terre bien cuites avec un peu d'ail en poudre et du souffre et de la soudure, tout ça tout ça ! 
                            </div>
                        </div>
                    </div>
                </div>
                <img class="images_culturelles" src="./ressources/images/lieu_culturel1.JPG">
            </div>

            <div class = "lieux">
                <div class="calque calque_box1">
                    Une petite description des familles Lieux 1
                </div>
                <img class="images_culturelles" src="./ressources/images/lieu_culturel2.JPG">
            </div>

            <div class = "lieux">
                <div class="calque calque_box1">
                    Une petite description des familles Lieux 1
                </div>
                <img class="images_culturelles" src="./ressources/images/lieu_culturel4.JPG">
            </div>

            <div class = "lieux">
                <div class="calque calque_box1">
                    Une petite description des familles Lieux 1
                </div>
                <img class="images_culturelles" src="./ressources/images/lieu_culturel1.JPG">
            </div>

            <div class = "lieux">
                <div class="calque calque_box1">
                    Une petite description des familles Lieux 1
                </div>
                <img class="images_culturelles" src="./ressources/images/lieu_culturel2.JPG">
            </div>

            <div class = "lieux">
                <div class="calque calque_box1">
                    Une petite description des familles Lieux 1
                </div>
                <img class="images_culturelles" src="./ressources/images/lieu_culturel3.JPG">
            </div>


        </div>



        <!-------------------------------------------LIEUX SPORTIFS----------------------------------------------->
        <div class = "titre-categorie titre">
            <?php echo LIEUX_SPORTIFS;?>
        </div>

        <div class = "galerie-container">

            <div class = "lieux">
                <div class="calque calque_box1">
                    <div class = "contenu-flex">
                        <div class = "article_contenu">
                            <div class = "article_title">
                                Une petite description des familles Lieux 1
                            </div>
                            <div class = "separateur"></div>
                            <div class = "article_metro_access">
                                D - Gorge de loup
                            </div>
                            <div class = "article_body">
                                Le théâtre nouvelle génération (TNG) de Lyon 9 est fier de vous accueillir les ... Beaucoup de texte qui me passe par la tête. J'adore les pommes de terre bien cuites avec un peu d'ail en poudre et du souffre et de la soudure, tout ça tout ça !
                            </div>
                        </div>
                    </div>
                </div>
                <img class="images_culturelles" src="./ressources/images/lieu_culturel1.JPG">
            </div>

            <div class = "lieux">
                <div class="calque calque_box1">
                    Une petite description des familles Lieux 1
                </div>
                <img class="images_culturelles" src="./ressources/images/lieu_culturel2.JPG">
            </div>

            <div class = "lieux">
                <div class="calque calque_box1">
                    Une petite description des familles Lieux 1
                </div>
                <img class="images_culturelles" src="./ressources/images/lieu_culturel4.JPG">
            </div>

            <div class = "lieux">
                <div class="calque calque_box1">
                    Une petite description des familles Lieux 1
                </div>
                <img class="images_culturelles" src="./ressources/images/lieu_culturel1.JPG">
            </div>

            <div class = "lieux">
                <div class="calque calque_box1">
                    Une petite description des familles Lieux 1
                </div>
                <img class="images_culturelles" src="./ressources/images/lieu_culturel2.JPG">
            </div>

            <div class = "lieux">
                <div class="calque calque_box1">
                    Une petite description des familles Lieux 1
                </div>
                <img class="images_culturelles" src="./ressources/images/lieu_culturel3.JPG">
            </div>


        </div>

    </div>




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