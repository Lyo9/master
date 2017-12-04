<?php 

echo '<div class = "menu-principal">'; 
    require_once("./vue/changerLangue.php"); 
    echo "<a class = 'menu_link' href = './index.php'>Histoire du quartier</a>"; 
    echo "<a class = 'menu_link' href = 'index.php?exercice=galleries'>Culture</a>";
    echo "<a class = 'menu_link' href = 'index.php?exercice=grilles'>Sports et Loisirs</a>";
echo '</div>'; 

?>