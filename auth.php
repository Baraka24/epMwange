<?php
session_start();
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
  <h2 class="text-center">Se connecter</h2>

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
  <form action="actions/login.php?id=<?=$_GET["id"]?>" method="POST">
    <div class="mb-3 mt-3">
      <label for="email">Nom d'utilisateur:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" required>
    </div>
    <div class="mb-3">
      <label for="pwd">Mot de passe:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
    </div>
    <div class="form-check mb-3">
      <label class="form-check-label">
       <a href="" data-bs-toggle="modal" data-bs-target="#CreerCompte">Je n'ai pas de compte!</a> 
      </label>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Se connecter</button>
  </form>
      
      
  </div>  
</div>



<!-- The Modal CreerCompte start -->
<div class="modal" id="CreerCompte">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Créer un compte</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <form action="actions/creerCompte.php?id=<?=$_GET["id"]?>" method="POST" enctype="multipart/form-data">
    <div class="form-floating mb-3 mt-3">
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="nom" required>
      <label for="email">Nom</label>
    </div>
    <div class="form-floating mb-3 mt-3">
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="postnom" required>
      <label for="email">Postnom</label>
    </div>
    <div class="form-floating mb-3 mt-3">
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="numTel" required>
      <label for="email">Numero Téléphone</label>
    </div>
    <div class="form-floating mb-3 mt-3">
      <input type="password" class="form-control" id="email" placeholder="Enter email" name="pwd" required>
      <label for="email">Mot de passe</label>
    </div>
    <div class="form-floating mb-3 mt-3">
      <input type="password" class="form-control" id="email" placeholder="Enter email" name="pwdC" required>
      <label for="email">Mot de passe de confirmation</label>
    </div>

    <button type="submit" name="submit" class="btn btn-primary">Créer</button>
    </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
  </div>
<!-- The Modal CreerCompte end -->


</body>
</html>
