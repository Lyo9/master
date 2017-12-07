<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="navbar" id="navbar">
    <a class="btn-simple" href="./index.php">Accueil</a>
    <div class="dropdown">
        <button class="dropbtn titre">Histoire et vie du quartier
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content titre" style="gray">
            <a href="#">Histoire</a>
            <a href="#">Liens</a>
            <a href="#">Education</a>
            <a href="#">Infos</a>
            <a href="#">Industrie</a>
            <a href="#">Environnement</a>
        </div>
    </div>
    <div class="dropdown">
        <button class="dropbtn titre">Incontournable
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content titre">
            <a href="#">Galerie</a>
            <a href="#">Bon plan</a>
        </div>

    </div>
    <div class="dropdown">
        <button  class="dropbtn titre"><a href = "./index.php?action=culture">Culture Sport & loisirs</a>
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content " >
            <a href="./index.php?action=culture&sousMenu=lieuxCulturels">Lieux culturels</a>
            <a href="./index.php?action=culture&sousMenu=lieuxSportifs">Lieux sportif</a>

            <a href="#">Infranstructure</a>
        </div>

    </div>

    <?php 
    require_once("./vue/changerLangue.php");

    ?>

</div>