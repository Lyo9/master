<?php
 
 /*

 PDO (PHP Data Objects) est une extension d�finissant l'interface pour acc�der � une base de donn�es depuis PHP.
 L'extention PDO (doit �tre activ�e sur votre WAMP!)
  
 */
 
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=lyo9corp;charset=utf8', 'root', '');
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
     
?>