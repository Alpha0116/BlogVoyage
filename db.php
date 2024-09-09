<?php

    //connexion à la base de données

    function getpdo(){

        try
        {
    
            $pdo = new PDO('mysql:host=localhost;dbname=blogvoyage;charset=utf8','root','');
        }
        catch(Exception $e)
        {
            die('Erreur: '.$e->getMessage());
        }

        return $pdo;
    }

    //affichage des 

    function afficher($table){
        $pdo=getpdo();
        $sql="SELECT * FROM $table ORDER BY date_creat";
        $req= $pdo->query($sql);
        $results=$req->fetchAll();

        return $results;
    }
?>