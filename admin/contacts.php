<?php
session_start();
require_once 'includes/config.php';
if(!isset($_SESSION['id']))
{
    header('Location:index.php');
}
$directeur=$_SESSION['id'];
include 'actions/viewContact.php';
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
  <h2 class="text-center">Contacts|EP MWANGE</h2>
  
   
   <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#Contact">
    Contacts
     <span class="badge bg-danger">Personnaliser</span>
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
          <th>Telephone</th>
          <th>Whatshapp</th>
          <th>Facebook</th>
          <th></th>
         
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
          <td><?= $row['telephone']?></td>
          <td><?= $row['whatsapp']?></td>
          <td><?= $row['facebook']?></td>
          <td>
          
          <center>
          <a href="editContact.php?id=<?= $row['id']?>"> 
          <span class="badge bg-warning text-dark">
            Editer
          </span>
          </a><br>
          <a href="actions/deleteContent.php?categorie=<?= $row['categorie']?>"> 
          <!-- <span class="badge bg-danger" onclick="return confirm('Voulez-vous vraiment supprimé?')">
            Supprimer
          </span> -->
          </a>
          </center>
          </td>
        </tr>
         <?php  endforeach ?>
        
      </tbody>
    </table>
  </div>
 
 
</div>



<!-- The Modal Contact start -->
<div class="modal" id="Contact">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Personnaliser Contact</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <form action="actions/addContact.php" method="POST" enctype="multipart/form-data">
    <div class="form-floating mb-3 mt-3">
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="telephone">
      <label for="email">Telephone</label>
    </div>
    <div class="form-floating mb-3 mt-3">
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="whatsapp">
      <label for="email">Whatshapp</label>
    </div>
    <div class="form-floating mb-3 mt-3">
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="facebook">
      <label for="email">Facebook</label>
    </div>
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
<!-- The Modal Contact end -->


</body>
</html>
