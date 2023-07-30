<?php
session_start();
require_once 'includes/config.php';
if(!isset($_SESSION['id']))
{
    header('Location:index.php');
}
$directeur=$_SESSION['id'];
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
  <h2 class="text-center">Administration|EP MWANGE</h2>
  <div class="row">
   <div class="col-md-6 mb-3">
   <a href="news.php" type="button" class="btn btn-primary">
    Voir nouvelles <span class="badge bg-danger"><?=$nbreN["nbreN"]?></span>
   </a>
   </div>
   <div class="col-md-6 mb-3">
   <a href="content.php" type="button" class="btn btn-primary">
    Personnaliser le site <span class="badge bg-dark">♂</span>
   </a>
   </div>
   
  </div>
  
 
  
</div>

</body>
</html>
