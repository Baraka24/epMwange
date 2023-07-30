<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li>
       <a class="navbar-brand" href="#">
        <img src="imgs/logoo.jpg" alt="Avatar Logo" style="width:20%;" class="rounded-pill"> 
       </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">Accueil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php#historique">Historique</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php#apropos">Apropos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php#contacts">Contactez-nous</a>
      </li>
      <?php
       if(isset($_SESSION['id']))
       {
           ?>
            <li class="nav-item">
             <a class="nav-link text-danger" href="logout.php"><strong>Se déconnecter</strong></a>
            </li>
           <?php
       }
      ?>
      
    </ul>
  </div>
</nav>