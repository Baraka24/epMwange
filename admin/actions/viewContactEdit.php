<?php
$rows=mysqli_query($con,"SELECT * FROM `contact` 
WHERE id='" . $_GET["id"] . "'");
$row=mysqli_fetch_array($rows);
?>