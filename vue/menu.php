<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="navbar" id="navbar">
    <button class="dropbtn titre ">
    <a class="btn-simple accueil" href="./index.php">Accueil</a>
    </button>
    <div class="dropdown">
        <button class="dropbtn titre histoire-vie"><a href = "./index.php?action=histoire">Histoire et vie du quartier</a>
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content titre">
            <a href="./index.php?action=histoire">Histoire</a>
            <a href="./index.php?action=histoire&sousMenu=education">Education</a>
            <a href="./index.php?action=histoire&sousMenu=liens">Liens</a>
            <a href="./index.php?action=histoire&sousMenu=infos">Infos</a>
            <a href="./index.php?action=histoire&sousMenu=industrie">Industrie</a>
            <a href="./index.php?action=histoire&sousMenu=environnement">Environnement</a>
        </div>
    </div>
    <div class="dropdown">
        <button class="dropbtn titre incontournables"><a href = "./index.php?action=incontournables">Incontournable</a>
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content titre">
            <a href="./index.php?action=incontournables&sousMenu=bonplan">Bon plan</a>
            <a href="./index.php?action=incontournables&sousMenu=galerie">Galerie</a>
        </div>

    </div>
    <div class="dropdown">
        <button  class="dropbtn titre sport"><a href = "./index.php?action=culture">Culture Sport & loisirs</a>
            <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content " >
            <a href="./index.php?action=culture&sousMenu=lieuxCulturels">Lieux culturels</a>
            <a href="./index.php?action=culture&sousMenu=lieuxSportifs">Lieux sportif</a>
            <a href="#">Infrastructures</a>
        </div>

    </div>

    <?php 
    require_once("./vue/changerLangue.php");

    ?>

</div>