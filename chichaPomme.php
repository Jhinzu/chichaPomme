<?php
//variable info de connexion rapide
    $serveur = "localhost";
    $login = "root";
    $pass = "";

    try
    {
        $mysqlClient = new PDO("mysql:host=$serveur;dbname=chichapomme;charset=utf8", $login , $pass);
        echo "ca marche !";
    }

     catch(Exception $e)
    {
        // En cas d'erreur, on affiche un message et on arrête tout
            die('Erreur : '.$e->getMessage());
    }


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chichaPomme</title>
</head>
<body>
    
</body>
</html>