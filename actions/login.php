<?php
session_start();
require_once '../admin/includes/config.php';
$id=$_GET["id"];
if(isset($_POST['submit']))
{
    $userName =mysqli_real_escape_string($con,$_POST["email"]);
    $userPass =mysqli_real_escape_string($con,$_POST["pswd"]);
    $hashedPass = md5($userPass);
    $query = "SELECT * FROM `internaute` WHERE `nom`= '$userName' AND `pwd` = '$hashedPass'";
    $result = mysqli_query( $con, $query);
    $row = mysqli_fetch_array($result);
    
    if($row)
    {
        $_SESSION['id']=$row['id'];
        $_SESSION['nom']=$row['nom'];
        $_SESSION['postom']=$row['postnom'];
        header("Location:../commenter.php?id=".$_GET["id"]);
    }
    else
    {
        $_SESSION['alerteE']="Mot de passe ou Nom d'utilisateur incorrect!";
        header("Location:../auth.php?id=".$_GET["id"]);
    }
}
?>