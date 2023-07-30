<?php
session_start();
require_once 'includes/config.php';
if(!isset($_SESSION['id']))
{
    header('Location:index.php');
}
$directeur=$_SESSION['id'];
include 'actions/viewNewsEdit.php';

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
  <h2 class="text-center">Editer nouvelle </h2>

  <div class="row col-12 rounded-3 shadow-lg"  id="dropdownMega">
    
  <form action="actions/editNews.php?id=<?=$row['id']?>" method="POST" enctype="multipart/form-data">
    <div class="form-floating mb-3 mt-3">
      <input type="text" class="form-control" id="email" placeholder="Entrer le titre" value="<?=$row['titre']?>" required name="titre">
      <label for="email">Tittre</label>
    </div>
    <div class="form-floating mt-3 mb-3">
      <input type="date" class="form-control" id="pwd" placeholder="Selectionner la date" required value="<?=$row['dateP']?>"  name="dateP">
      <label for="date">Date</label>
    </div>
    <div class="form-floating">
        <textarea class="form-control" id="comment" name="description" required placeholder="Description"><?=$row['description']?></textarea>
        <label for="comment">Description</label>
    </div>
    <div class="form-floating mb-3 mt-3">
      <input type="file" class="form-control" id="email" placeholder="Choisir une image" name="file">
      <label for="email">Image</label>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Publier</button>
    </form>
</div>  
</div>




</body>
</html>
