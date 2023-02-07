<?php
//variable info de connexion rapide
    $serveur = "localhost";
    $login = "root";
    $pass = "";

    try
    {
        $mysqlClient = new PDO("mysql:host=$serveur;dbname=chichapomme;charset=utf8", $login , $pass,[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        echo "ca marche !";
        include("codeSqlChristelle.php");
        include("codeSqlDiego.php");
    }

     catch(Exception $e)
    {
        // En cas d'erreur, on affiche un message et on arrête tout
            die('Erreur : '.$e->getMessage());
    }

    //récupérer les donner de notre table ChichaPomme
    $sqlQuery = "SELECT * FROM tabchichapomme";
    $recipesStatement = $mysqlClient->prepare($sqlQuery);
    $recipesStatement->execute();
    // on a tout stocké dans une variable qui est celle ci
    $recipe = $recipesStatement->fetchAll();

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
    <!-- On affiche notre SQL -->
    <?php foreach($recipe as $recipes) :?>
        <p><?= $recipes[0]?><p>
    <?php endforeach ?>
    
</body>
</html>