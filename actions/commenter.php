<?php
session_start();
$internaute=$_SESSION['id'];
require_once '../admin/includes/config.php';
if(isset($_POST['submit']))
{   
  $comment=mysqli_real_escape_string($con,$_POST['commentaire']);
  $dateC=date('Y-m-d');
     $sql="INSERT INTO `commentaires` 
     VALUES ('','" . $_GET["id"] . "','$internaute',
     '$dateC',
     '$comment')";
    if (mysqli_query($con, $sql)) {
        $_SESSION['alerteS']="Commentaire ajouté avec succès!";
        header("Location:../commenter.php?id=".$_GET["id"]); 
     } else {
        $_SESSION['alerteE']= "Error: " . $sql . " " . mysqli_error($con);
        header("Location:../commenter.php?id=".$_GET["id"]);
     } 
} 
    mysqli_close($con);
?>