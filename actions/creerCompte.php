<?php
session_start();
require_once '../admin/includes/config.php';
if(isset($_POST['submit']))
{   
  $tel=mysqli_real_escape_string($con,$_POST['numTel']);
  $nom=mysqli_real_escape_string($con,$_POST['nom']);
  $postnom=mysqli_real_escape_string($con,$_POST['postnom']);
  $pwdN=mysqli_real_escape_string($con,$_POST['pwd']);
  $pwd=mysqli_real_escape_string($con,md5($_POST['pwd']));
  $pwdC=mysqli_real_escape_string($con,md5($_POST['pwdC']));
  if($pwd==$pwdC)
  {
    $sql="INSERT INTO `internaute`
     VALUES ('','$nom',
     '$postnom',
     '$tel','$pwd')";
    if (mysqli_query($con, $sql)) {
        $_SESSION['alerteS']="Compte créé avec succès! Votre nom d'utilisateur est:
        "." ".$nom." "."et votre mot de passe est: ".$pwdN;
        header("Location:../auth.php?id=".$_GET["id"]); 
     } else {
        $_SESSION['alerteE']= "Error: " . $sql . " " . mysqli_error($con);
        header("Location:../auth.php?id=".$_GET["id"]);
     } 
  }
  else
  {
    $_SESSION['alerteE']="Mot de passe différent du mot de passe de confirmation!
    Réessayer svp!";
    header('Location:../auth.php');
  }
     
} 
    mysqli_close($con);
?>