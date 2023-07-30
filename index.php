<?php
session_start();
require_once 'admin/includes/config.php';
include 'admin/actions/viewNews.php';
include 'admin/actions/viewContentA.php';
include 'admin/actions/viewContentH.php';
include 'actions/viewContacts.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>EP|MWANGE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="img-fluid" src="imgs/c1.JPG" alt="EP|Mwange" class="d-block" style="width:100%">
    </div>
    <div class="carousel-item">
      <img class="img-fluid" src="imgs/c2.JPG" alt="EP|Mwange" class="d-block" style="width:100%;">
    </div>
    <div class="carousel-item">
      <img class="img-fluid" src="imgs/c3.JPG" alt="EP|Mwange" class="d-block" style="width:100%;">
    </div>
  </div>
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<?php include 'includes/navbar.php';?> 

<div class="container-fluid mt-3">
  <h3 id="accueil">EP MWANGE</h3>
  <p>
  L’Ecole Primaire Mwange/Sourds-Muets est situé sur la concession propre de 
  la congrégation des Frères de l’Assomption sise au n° 34, cellule Vuhumbi, 
  Quartier de l’Evêché, Commune Bulengera, Ville de Butembo. Ajoutons   
  que la concession est cadastrée  et couverte  par un certificat  
  d’enregistrement bien gardé  dans les archives  de la congrégation des Frères 
  de l’Assomption. 
  </p>
</div>

<div class="container mt-5">
  <div class="row">
    <div class="col-sm-4"> 
      <h2 id="apropos"><?= $rowA['titre']?></h2>
     
      <div class="fakeimg">
       <img class="img-fluid" src="admin/actions/upload/<?=$rowA['image']?>" width="100%" height="150">
      </div>
      <p><?= $rowA['description']?></p>

      <h3 id="historique" class="mt-4"><?= $rowH['titre']?></h3>
      <div class="fakeimg">
       <img class="img-fluid" src="admin/actions/upload/<?=$rowH['image']?>" width="100%" height="150">
      </div>
      <p><?= $rowH['description']?></p>

      <hr class="d-sm-none">
    </div>
    <div class="col-sm-8">
    <?php

while($row=mysqli_fetch_array($rows)){
?>
      <h2><?=$row['titre']?></h2>
      <h5>Par <?=$row['nom']." ".$row['postnom']?>,<?=$row['dateP']?></h5>
      <div class="fakeimg">
       <img class="img-fluid" src="admin/actions/upload/<?=$row['image']?>" width="100%" height="225">
      </div>
      <p><?=$row['description']?></p>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item text-center">
          <a class="nav-link active" href="commenter.php?id=<?=$row['id']?>">Commenter</a>
        </li>
      </ul>
<?php }?>

    </div>
  </div>
</div>
<?php
include 'includes/footer.php';
?>
</body>
</html>
