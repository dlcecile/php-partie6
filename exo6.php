<?php
    $page = "exercice6";
    include 'header.php';
    $building = '';
    $room = '';
    if(isset($_GET['building'])){
        $building = $_GET['building'];
    }
    if(isset($_GET['room'])){
        $room = $_GET['room'];
    } 
?>
<div class=" jumbotron d-flex  flex-column align-items-center">
<h1>Énoncé</h1>
<p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher:</p>
<p>index.php?building=12&room=101</p>
<a href="exo6.php?building=12&amp;room=101">Regarde!!!</a>
<p><?= $building;?></p>
<p><?= $room;?></p>
</div>
 <?php
    include 'footer.php';
  ?>
