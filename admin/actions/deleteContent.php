<?php
session_start();
require_once '../includes/config.php';
$sql = "DELETE FROM `contenu` WHERE `categorie`='" . $_GET["categorie"] . "'";
if (mysqli_query($con, $sql)) {
    $_SESSION['alerteE']="Contenu supprimé avec succès!";
       header('Location:../contenu.php'); 
} else {
    echo "Error deleting record: " . mysqli_error($con);
}
mysqli_close($con);
?>