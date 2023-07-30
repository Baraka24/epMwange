<?php
session_start();
require_once '../includes/config.php';
$directeur=$_SESSION['id'];
if(isset($_POST['submit']))
{   
     
 $file = rand(1000,100000)."-".$_FILES['file']['name'];
 $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder="upload/";
 
 /* new file size in KB */
 /* $new_size = $file_size/1024;   */
 /* new file size in KB */
 
 /* make file name in lower case */
 $new_file_name = strtolower($file);
 /* make file name in lower case */
 
 $final_file=str_replace(' ','-',$new_file_name);
 
 if(move_uploaded_file($file_loc,$folder.$final_file))
 {
  $titre=mysqli_real_escape_string($con,$_POST['titre']);
  $dateP=mysqli_real_escape_string($con,$_POST['dateP']);
  $description=mysqli_real_escape_string($con,$_POST['description']);
     $sql="INSERT INTO `nouvelles` 
     VALUES ('','$titre',
     '$description','$final_file',
     '$dateP','$directeur')";
    if (mysqli_query($con, $sql)) {
        $_SESSION['alerteS']="Nouvelle publiée avec succès!";
        header('Location:../news.php'); 
     } else {
        $_SESSION['alerteE']= "Error: " . $sql . " " . mysqli_error($con);
        header('Location:../news.php');
     } 
 }
 else
 {
  $_SESSION['alerteE']= "Error.Please try again(Réessayer svp!)";
  header('Location:../news.php');		
 }
}
    mysqli_close($con);
?>