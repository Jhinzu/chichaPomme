<?php
// crée la connections au serveurs
    function getDataBaseConnexion()
    {
        $serveur = "localhost";
        $login = "root";
        $pass = "";
        try
        {
            $mysqlClient = new PDO("mysql:host=$serveur;dbname=chichapomme;charset=utf8", $login , $pass,[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
            //récupérer les donner de notre table ChichaPomme
            $sqlQuery = "SELECT * FROM tabchichapomme";
            $recipesStatement = $mysqlClient->prepare($sqlQuery);
            $recipesStatement->execute();

            // on a tout stocké dans une variable qui est celle ci
            $recipe = $recipesStatement->fetchAll();

            //vérifications pour voir si il n'y a pas d'erreurs
            echo "ca marche !";
        }

        catch(Exception $e)
        {
            // En cas d'erreur, on affiche un message et on arrête tout
             die('Erreur : '.$e->getMessage());
        }
    }

    getDataBaseConnexion();

    function getAllUsers()
    {

    }

    function getUser($id)
    {

    }

    function ajout($ref,$nom,$resum,$prixAchat,$prixVente,$quantite)
    {

    }

    function modif($ref,$nom,$resum,$prixAchat,$prixVente,$quantite)
    {

    }

    function delete($id)
    {

    }

?>