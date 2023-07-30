<?php
session_start();
require_once 'admin/includes/config.php';
$id=$_GET["id"];
if(!isset($_SESSION['id']))
{
    header("Location:auth.php?id=". $_GET["id"]);
}
$internaute=$_SESSION['id'];
include 'admin/actions/viewNewsEdit.php';
include 'actions/viewCommentEdit.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>EP MWANGE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php
include 'includes/navbar.php';
?>
<div class="container mt-3 ">
  <h2 class="text-center">Placer votre commentaire</h2>
  <div class="row col-12 rounded-3 shadow-lg"  id="dropdownMega">
  <?php
   if(isset($_SESSION['alerteS']))
   {
    ?>
    <div class="alert alert-success">
    <strong>OK!</strong> <?= $_SESSION['alerteS']?>
    </div>
    <?php
   }
   unset($_SESSION['alerteS']);
  ?>
  <?php
  if(isset($_SESSION['alerteE']))
  {
   ?>
    <div class="alert alert-danger">
    <strong>OK!</strong> <?= $_SESSION['alerteE']?>
    </div>
   <?php
  }
  unset($_SESSION['alerteE']);
  ?>
    
      <h2><?=$row['titre']?></h2>
      <h5>Par <?=$row['nom']." ".$row['postnom']?>,<?=$row['dateP']?></h5>
      <div class="fakeimg">
       <img class="img-fluid" src="admin/actions/upload/<?=$row['image']?>" width="100%" height="225">
      </div>
      <p><?=$row['description']?></p>

      <form action="actions/editCommenter.php?idC=<?=$comment["id"]?>&&id=<?=$_GET["id"]?>" method="post">
        <div class="form-floating mb-3">
          <textarea class="form-control" id="comment" name="commentaire" placeholder="Comment goes here"><?=$comment["commentaire"]?></textarea>
          <label for="comment">Commentaire</label>
        </div>      
    <div>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item text-center">
          <button type="submit" class="nav-link active" name="submit">Appliquer</button>
        </li>
      </ul>
    </div>
    </form>
      <br><br><br>
      
    
  </div> 
  <br><br><br><br><br><br><br><br> 
</div>




</body>
</html>
