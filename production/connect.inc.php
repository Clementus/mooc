﻿<?php 
    $connect_str= "mysql:host=localhost;dbname=mooc";
    $connect_user= 'root';
    $connect_pass= '';
    try
    {
        $dmysql= new PDO($connect_str, $connect_user, $connect_pass);  //isen isen
    }
    catch(PDOException $e)
    {
        //header ("location: index.php?erreur=Echec de la connexion"); //Affichage du message d'erreur sur l'index avec le méthode get
        echo "Erreur au niveau de la BDD (verifier si la BDD existe)";
        exit();
    }
?>