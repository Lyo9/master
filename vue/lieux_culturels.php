<link rel="stylesheet" href="./style/stylesheet.css"/>
<link rel="stylesheet" href="./style/animations.css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<div class = "culture-fond">

    <img class = "image-fond" src = "./ressources/images/fond_culturel.JPG"/>
    
    <?php   
    $categories = array(
        1=>LIEUX_CULTURELS, 2 => LIEUX_SPORTIFS, 3 =>INFRASTRUCTURES); 
    ?>
        <div class="mon-container">
        <?php 
        $categorie = 1; 
        foreach($listeCategories as $listeArticles)
        {   
            ?>        
            <div class = "categorie">               
                <?php  
                include("./vue/afficheCategorie.php");
                ?>

            </div>
                <?php 
            $categorie++; 
        }
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

