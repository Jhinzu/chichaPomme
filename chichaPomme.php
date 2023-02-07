<?php
include("requeteSql.php");
getDataBaseConnexion();
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
        <p><?= $recipes?><p>
    <?php endforeach ?>
    <?php print_r($recipe[0]) ?>
</body>
</html>