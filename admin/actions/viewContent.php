<?php
$rows=mysqli_query($con,"SELECT `contenu`.`id` AS id, `contenu`.`titre` AS titre, 
`contenu`.`description` AS description, `contenu`.`image` AS image, 
`contenu`.`directeur` AS idDirecteur, `contenu`.`categorie` AS categorie,
directeur.nom AS nom, directeur.postnom AS postnom FROM `contenu`,
directeur WHERE contenu.directeur=directeur.id");
?>