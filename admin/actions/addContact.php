<?php
session_start();
require_once '../includes/config.php';
if(isset($_POST['submit']))
{   
  $tel=mysqli_real_escape_string($con,$_POST['telephone']);
  $wh=mysqli_real_escape_string($con,$_POST['whatsapp']);
  $fb=mysqli_real_escape_string($con,$_POST['facebook']);
     $sql="INSERT INTO `contact` 
     VALUES ('','$tel',
     '$wh',
     '$fb')";
    if (mysqli_query($con, $sql)) {
        $_SESSION['alerteS']="Contact ajouté avec succès!";
        header('Location:../contacts.php'); 
     } else {
        $_SESSION['alerteE']= "Error: " . $sql . " " . mysqli_error($con);
        header('Location:../contacts.php');
     } 
} 
    mysqli_close($con);
?>