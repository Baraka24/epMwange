
<?php
$comments=mysqli_query($con,"SELECT `commentaires`.`id`  AS id,
 `commentaires`.`nouvelle` AS nouvelle, 
`commentaires`.`internaute` AS internaute, `commentaires`.`dateC` AS dateC, 
`commentaires`.`commentaire` AS commentaire,
internaute.nom AS nom,internaute.postnom AS postnom
FROM `commentaires`,internaute,nouvelles WHERE internaute.id=commentaires.internaute
AND `commentaires`.`nouvelle`='" . $_GET["id"] . "' 
GROUP BY `commentaires`.`id`
");
?> 