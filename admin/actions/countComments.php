<?php
$nbreC=mysqli_query($con,"SELECT COUNT(internaute) AS nbreC 
FROM `commentaires` WHERE nouvelle=$idN");
$nbreC=mysqli_fetch_array($nbreC);
?>