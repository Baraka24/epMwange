<?php
$contacts=mysqli_query($con,"SELECT * FROM `contact`
");
$contact=mysqli_fetch_array($contacts);
?>