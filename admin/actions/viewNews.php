<?php
$rows=mysqli_query($con,"SELECT `nouvelles`.`id` AS id, 
`nouvelles`.`titre` AS titre, `nouvelles`.`description` AS description, 
`nouvelles`.`image` AS image, `nouvelles`.`dateP` AS dateP, 
`nouvelles`.`directeur`AS idDirecteur,directeur.nom AS nom,
directeur.postnom AS postnom 
FROM `nouvelles`,directeur WHERE nouvelles.directeur=directeur.id");

?>