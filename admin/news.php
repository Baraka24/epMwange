<?php
session_start();
require_once 'includes/config.php';
if(!isset($_SESSION['id']))
{ 
    header('Location:index.php');
}
$directeur=$_SESSION['id'];
include 'actions/viewNews.php';
include 'actions/countNews.php';
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
<div class="container mt-3">
  <h2 class="text-center">Nouvelles|EP MWANGE</h2>
  
   <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
    Publier <span class="badge bg-danger"><?=$nbreN["nbreN"]?></span>
   </button><br><br>

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



<div class="container">





<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
         
<?php
$rows=mysqli_query($con,"SELECT * FROM `nouvelles`");
while($row=mysqli_fetch_array($rows)){
  $idN=$row['id'];
?>
        <div class="col">
          <div class="card shadow-sm">
            <img class="img-fluid" src="actions/upload/<?=$row['image']?>" width="100%" height="225">

            <div class="card-body">
              <?php
               include 'actions/countComments.php';
              ?>
              <h4 class="card-title"><?=$row['titre']?></h4>
              <p class="card-text">
                <?=$row['description']?>
              </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="../commenter.php?id=<?=$row['id']?>" type="button" class="btn btn-sm btn-primary">
                    Commentaires
                    <span class="badge bg-danger"><?=$nbreC["nbreC"]?></span>
                  </a>
                  <a href="editNews.php?id=<?=$row['id']?>" type="button" class="btn btn-sm btn-warning">
                    Editer
                  </a>
                  <a href="actions/deleteNews.php?id=<?=$row['id']?>" onclick="return confirm('Voulez-vous vraiment supprimé?')" type="button" class="btn btn-sm btn-danger">
                  Supprimer</a>
                </div>
                <small class="text-muted"><?=$row['dateP']?></small>
              </div>
            </div>
          </div>
        </div>
        <?php }?>
       
      </div>

</div>




<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title mb-3">Publier</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <form action="actions/addNews.php" method="POST" enctype="multipart/form-data">
    <div class="form-floating mb-3 mt-3">
      <input type="text" class="form-control" id="email" placeholder="Entrer le titre" name="titre">
      <label for="email">Tittre</label>
    </div>
    <div class="form-floating mt-3 mb-3">
      <input type="date" class="form-control" id="pwd" placeholder="Selectionner la date" name="dateP">
      <label for="date">Date</label>
    </div>
    <div class="form-floating">
        <textarea class="form-control" id="comment" name="description" placeholder="Description"></textarea>
        <label for="comment">Description</label>
    </div>
    <div class="form-floating mb-3 mt-3">
      <input type="file" class="form-control" id="email" placeholder="Choisir une image" name="file">
      <label for="email">Image</label>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Publier</button>
    </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
  </div>
</body>
</html>
