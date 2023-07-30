<?php
session_start();
require_once '../includes/config.php';
$sql = "DELETE FROM `nouvelles` WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($con, $sql)) {
    $_SESSION['alerteE']="Nouvelle supprimée avec succès!";
       header('Location:../news.php'); 
} else {
    echo "Error deleting record: " . mysqli_error($con);
}
mysqli_close($con);
?>