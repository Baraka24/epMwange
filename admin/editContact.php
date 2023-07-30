<?php
session_start();
require_once 'includes/config.php';
if(!isset($_SESSION['id']))
{
    header('Location:index.php');
}
$directeur=$_SESSION['id'];
include 'actions/viewContactEdit.php';

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
  <h2 class="text-center">Editer contact </h2>

  <div class="row col-12 rounded-3 shadow-lg"  id="dropdownMega">
    
  <form action="actions/editContact.php?id=<?=$row['id']?>" method="POST" enctype="multipart/form-data">
    <div class="form-floating mb-3 mt-3">
      <input value="<?=$row['telephone']?>" type="text" class="form-control" id="email" placeholder="Enter email" name="telephone">
      <label for="email">Telephone</label>
    </div>
    <div class="form-floating mb-3 mt-3">
      <input value="<?=$row['whatsapp']?>" type="text" class="form-control" id="email" placeholder="Enter email" name="whatsapp">
      <label for="email">Whatshapp</label>
    </div>
    <div class="form-floating mb-3 mt-3">
      <input value="<?=$row['facebook']?>" type="text" class="form-control" id="email" placeholder="Enter email" name="facebook">
      <label for="email">Facebook</label>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Appliquer</button>
    </form>
</div>  
</div>




</body>
</html>
