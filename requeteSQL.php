<?php
function getDatabaseConnexion() {
    try {
        $user = "admin";
        $pass = "adminpwd";
        $pdo = new PDO('mysql:host=localhost;dbname=chichapomme', $user, $pass);
         $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         echo "ca marche !";
        return $pdo; /*retourne uniquement la variable PDO dans d'autres fonction*/

    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
}


// récupere tous les items
function getAllUsers() {
    $con = getDatabaseConnexion();
    $requete = 'SELECT * from tabChichaPomme'; /* va chercher toute les collonne dans notre table */
    $rows = $con->query($requete); /* prépare et éxécute les données*/
    $recipe = $rows->fetchAll(); /* afficher le tout de la requètes PDO */
    return $recipe;
}

function ajout($ref,$nom,$resum,$prixAchat,$prixVente,$quantite)
{
    try 
    {
        $con = getDatabaseConnexion();
        $insert = "INSERT INTO `tabChichaPomme`(`Référence`, `Nom article`, `Description`, `Prix d'achat unitaire`, `Prix de vente unitaire`, `Quantité`)
        VALUES ('$ref','$nom','$resum','$prixAchat','$prixVente','$quantite')";

        $con->exec($insert);
    }

     catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
}
?>