<?php
$nbreN=mysqli_query($con,"SELECT COUNT(*) AS nbreN FROM `nouvelles`");
$nbreN=mysqli_fetch_array($nbreN);
?>