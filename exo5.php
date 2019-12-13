<?php
    $page = "exercice5";
    include 'header.php';
    $week = '';
    if(isset($_GET['week'])){
        $week = $_GET['week'];
    }
?>
<div class=" jumbotron d-flex  flex-column align-items-center">
<h1>Énoncé</h1>
<p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher:</p>
<p>index.php?week=12</p>
<a href="exo5.php?week=12">Regarde!!!</a>
<p><?= $week;?></p>
</div>
 <?php
    include 'footer.php';
  ?>