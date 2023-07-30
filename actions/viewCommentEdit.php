<?php
$comments=mysqli_query($con,"SELECT `commentaires`.`id`  AS id,
 `commentaires`.`nouvelle` AS nouvelle, 
`commentaires`.`internaute` AS internaute, `commentaires`.`dateC` AS dateC, 
`commentaires`.`commentaire` AS commentaire,
internaute.nom AS nom,internaute.postnom AS postnom
FROM `commentaires`,internaute,nouvelles WHERE internaute.id=commentaires.internaute
AND nouvelles.id='" . $_GET["id"] . "' 
AND commentaires.id='" . $_GET["idC"] . "'
");
$comment=mysqli_fetch_array($comments);
?>