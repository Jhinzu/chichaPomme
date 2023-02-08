<?php
//crée les collonnes
//CREATE TABLE `chichapomme`.`tabChichaPomme` ( `ID` INT NOT NULL AUTO_INCREMENT , `Référence` VARCHAR(10) NOT NULL , `Description` TEXT NOT NULL , `Prix d'achat unitaire` FLOAT(10,2) NOT NULL , `Prix de vente unitaire` FLOAT(10.2) NOT NULL , `Quantité` INT NOT NULL , PRIMARY KEY (`ID`), UNIQUE (`Référence`)) ENGINE = InnoDB;

//premières référence
// INSERT INTO `tabChichaPomme`(`ID`, `Référence`, `Description`, `Prix d'achat unitaire`, `Prix de vente unitaire`, `Quantité`) VALUES ('','1234567890',"Avec le Pod Kroma Z, Innokin entre dans cette nouvelle génération de cigarette électronique qui propose un kit simple et ergonomique, associé à une cartouche de bonne contenance (4,5 ml) et des résistances polyvalentes. Le pod Kroma Z est en effet capable d'offrir une vape indirecte et semi-directe, car il permet de varier l'aération et d'obtenir un tirage serré ou plus aérien.Le Pod Kroma Z de Innokin propose tout le confort et la technologie du moment au vapoteur. Il est doté d'une impressionnante batterie de 3000 mAh rechargeable rapidement en USB-C, mais aussi d'une puissance idéale pour les résistances fournies.Le pod Kroma Z se distingue également par une fabrication en alliage de magnésium qui lui confère une étonnante légèreté. Il n'oublie pas l'ergonomie avec une taille compacte et une \"gâchette\" latérale pour une utilisation intuitive et confortable.Le Kit Kroma Z est livré avec une résistance Z Coil 0.3 Ω et Z Coil 0.8 Ω, soit, un bon choix pour vapoter en tirage serré ou un peu plus aérien. On note que le Kroma Z est aussi entièrement compatible avec toutes les excellentes résistances de la gamme Z Coil et Z Coil Mesh (Zenith, Zlide, etc.). Le pod Kroma Z est fabriqué par Innokin.",'20.90','30.90','150')

//save
/*<!-- On affiche notre SQL -->
    <?php foreach($recipe as $recipes) :?>
        <p><?= $recipes?><p>
    <?php endforeach ?>
    <?php print_r($recipe[0]) ?>*/
?>