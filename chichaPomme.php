<?php
include("requeteSQL.php");
include("tableaux.php");
$AllItems = getAllUsers();
$ref = $_POST["ref"] ?? null;
$nom = $_POST["nomArticle"] ?? null;
$resum = $_POST["resum"] ?? null;
$prixAchat = $_POST["prixAchat"] ?? null;
$prixVente = $_POST["venteAchat"] ?? null;
$quantite = $_POST["venteAchat"] ?? null;
if (!empty($ref) && !empty($nom) && !empty($resum) && !empty($prixAchat) && !empty($prixVente) && !empty($quantite))
{
ajout($ref,$nom,$resum,$prixAchat,$prixVente,$quantite);
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>chichaPomme</title>
</head>
<body>
    <?php
    //on affiche la table
     $ref = getHeaderTable();
    afficherTab($ref);
    ?>
    <form>
        <label>Référence</label>
        <input name="ref" type="text" placeholder="Référence"/>
        <label>Le nom de l'article</label>
        <input name="nomArticle" type="text" placeholder="Le nom de l'article"/>
        <label>La description de l'article</label>
        <input name="resum" type="text" placeholder="La description de l'article"/>
        <label>Le prix d'achat unitaire</label>
        <input name="prixAchat" type="text" placeholder="Le prix d'achat unitaire"/>
        <label>Le prix de vente unitaire</label>
        <input name="venteAchat" type="text" placeholder="Le prix de vente unitaire"/>
        <label>La quantité en stock</label>
        <input name="stock" type="text" placeholder="La quantité en stock"/>
        <button type="submit" >entrée</button>
    </form>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>