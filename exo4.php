<?php
    $page = "exercice4";
    include 'header.php';
   $building = '';
$room = '';
if(!empty($_GET['building'])){
    $building = $_GET['building'];
}
if(!empty($_GET['room'])){
    $room = $_GET['room'];
}
  
?>
<div class=" jumbotron d-flex  flex-column align-items-center">
<h1>Énoncé</h1>
<p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher: </p>
<p>index.php?language=PHP&server=LAMP<p>
 <p>
        <a title="url exo4" href="exo4.php?building=120&amp;room=21">Regarde!!!</a>
    <p>
    <p><?= $building ?></p>
    <p><?= $room ?></p>
</div>
 <?php
    include 'footer.php';
  ?>