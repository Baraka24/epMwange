<?php
session_start();
require_once 'includes/config.php';
if(!isset($_SESSION['id']))
{
    header('Location:index.php');
}
$directeur=$_SESSION['id'];
include 'actions/viewContent.php';
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
  <h2 class="text-center">Contenu|EP MWANGE</h2>
  
   <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#Historique">
    Personnaliser <span class="badge bg-danger">Historique</span>
   </button>
   <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#Apropos">
    Personnaliser <span class="badge bg-danger">Apropos</span>
   </button>
   <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#myModal">
    Contacts
    <a href="contacts.php">
     <span class="badge bg-danger">Personnaliser</span>
    </a> 
   </button>


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
    <strong>Echec!</strong> <?= $_SESSION['alerteE']?>
    </div>
   <?php
  }
  unset($_SESSION['alerteE']);
  ?>



   <div class="table-responsive mt-3">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>#</th>
          <th>Titre</th>
          <th>Description</th>
          <th>Catégorie</th>
          <th>Image</th>
         
        </tr>
      </thead>
      <tbody>
      <?php
        
        $i=0;

        foreach($rows as $row):
          $i++;
         ?>
        <tr>
          <td><?= $i?></td>
          <td><?= $row['titre']?></td>
          <td><?= $row['description']?></td>
          <td><?= $row['categorie']?></td>
          <td>
          <img class="img-fluid" src="actions/upload/<?=$row['image']?>" width="100%" height="150">
          <br><br>
          <center>
          <a href="editContent.php?categorie=<?= $row['categorie']?>"> 
          <span class="badge bg-warning text-dark">
            Editer contenu (<?= $row['categorie']?>)
          </span>
          </a><br><br>
          <a href="actions/deleteContent.php?categorie=<?= $row['categorie']?>"> 
          <span class="badge bg-danger" onclick="return confirm('Voulez-vous vraiment supprimé?')">
            Supprimer contenu (<?= $row['categorie']?>)
          </span>
          </a>
          </center>
          </td>
        </tr>
         <?php  endforeach ?>
        
      </tbody>
    </table>
  </div>
 
 
</div>



<!-- The Modal Historique start -->
<div class="modal" id="Historique">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Personnaliser Historique</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <form action="actions/addHistorique.php" method="POST" enctype="multipart/form-data">
    <div class="form-floating mb-3 mt-3">
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="titre">
      <label for="email">Tittre</label>
    </div>
    
    <div class="form-floating">
        <textarea class="form-control" id="comment" name="description" placeholder="Comment goes here"></textarea>
        <label for="comment">Description</label>
    </div>
    <div class="form-floating mb-3 mt-3">
      <input type="file" class="form-control" id="email" placeholder="Enter email" name="file">
      <label for="email">Image</label>
    </div>
    <!-- <div class="form-floating mb-3">
    
        <select class="form-select" id="sel1" name="categorie">
          <option value="Historique">Historique</option>
          <option value="Apropos">Apropos</option>
        </select>
        <label for="sel1" class="form-label">Selectionner catégorie (selectionner une):</label>
    </div> -->
    <button type="submit" name="submit" class="btn btn-primary">Personnaliser</button>
    </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
  </div>
<!-- The Modal Historique end -->



<!-- The Modal Apropos start -->
<div class="modal" id="Apropos">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Personnaliser Apropos</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <form action="actions/addApropos.php" method="POST" enctype="multipart/form-data">
    <div class="form-floating mb-3 mt-3">
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="titre">
      <label for="email">Tittre</label>
    </div>
    
    <div class="form-floating">
        <textarea class="form-control" id="comment" name="description" placeholder="Comment goes here"></textarea>
        <label for="comment">Description</label>
    </div>
    <div class="form-floating mb-3 mt-3">
      <input type="file" class="form-control" id="email" placeholder="Enter email" name="file">
      <label for="email">Image</label>
    </div>
<!--     <div class="form-floating mb-3">
    
        <select class="form-select" id="sel1" name="categorie">
          <option value="Apropos">Apropos</option>
          <option value="Apropos">Apropos</option>
        </select>
        <label for="sel1" class="form-label">Selectionner catégorie (selectionner une):</label>
    </div> -->
    <button type="submit" name="submit" class="btn btn-primary">Personnaliser</button>
    </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
  </div>
<!-- The Modal Apropos end -->
</body>
</html>
