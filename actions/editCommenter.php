<?php
session_start();
$internaute=$_SESSION['id'];
require_once '../admin/includes/config.php';
if(isset($_POST['submit']))
{   
  $comment=mysqli_real_escape_string($con,$_POST['commentaire']);
  $dateC=date('Y-m-d');
  $sql="UPDATE `commentaires` SET `commentaire`='$comment'
   WHERE `id`='" . $_GET["idC"] . "'";
  
    if (mysqli_query($con, $sql)) {
        $_SESSION['alerteS']="Commentaire modifié avec succès!";
        header("Location:../commenter.php?id=".$_GET["id"]); 
     } else {
        $_SESSION['alerteE']= "Error: " . $sql . " " . mysqli_error($con);
        header("Location:../commenter.php?id=".$_GET["id"]);
     } 
} 
    mysqli_close($con);
?>