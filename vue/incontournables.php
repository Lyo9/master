<link rel="stylesheet" href="./style/stylesheet.css"/>
<link rel="stylesheet" href="./style/animations.css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<div class = "culture-fond">

    <img class = "image-fond" src = "./ressources/images/fond_culturel.JPG"/>

    <?php   
    $categories = array(GALERIE,BONS_PLANS); 
    ?>

    <div class="mon-container">
            <!-- LIEUX CULTURELS-->
        <?php  
        require_once("./vue/afficheCategorie.php");
        ?>
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

if(isset($_GET['sousMenu']) and $_GET['sousMenu']=="bonplan"){
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
        document.getElementsByClassName('incontournables')[0].classList.add("active");
    </script>

