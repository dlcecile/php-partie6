<?php
$page = "exercice1";
include 'header.php';
$firstName = '';
$lastName = '';
if(isset($_GET['firstname'])){
    $firstName = $_GET['firstname'];
}
if(isset($_GET['lastname'])){
    $lastName = $_GET['lastname'];
}
?>
<div class=" jumbotron d-flex  flex-column align-items-center">
<h1>Énoncé</h1>
<p>Faire une page index.php. Tester sur cette page que tous les paramètres de cette URL existent et les afficher</p>
<p>index.php?lastname=Nemare&firstname=Jean</p>
<a href="index.php?lastname=Nemare&amp;firstname=Jean">Regarde!!!</a>
<p><?= $firstName;?></p>
<p><?= $lastName;?></p>
</div>
 <?php
 include 'footer.php';
  ?>