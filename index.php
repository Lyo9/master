<?php

session_start();

if(!isset($_SESSION['langue']))
{
	echo "<div class = 'test'>Hey ! Il n'y a pas de langue ! </div>"; 
}


?>



<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="./style/stylesheet.css"/>
	<link rel="stylesheet" href="./style/animations.css"/>
	<link href="https://fonts.googleapis.com/css?family=Ubuntu|Vollkorn" rel="stylesheet">
	<link rel="stylesheet" href="./style/font-awesome/css/font-awesome.min.css">
	<script src="./javascript/carrousel.js"></script>
	<meta name="viewport">
	<title>Lyon 9</title>
</head>
<body>
<?php require_once("./controleur/main.php");?>

</body>
</html>

