<?php
    $page = "exercice3";
    include 'header.php';
    $startDate = '';
    $endDate = '';
    if(isset($_GET['startdate'])){
        $startDate = $_GET['startdate'];
    }
    if(isset($_GET['enddate'])){
        $endDate = $_GET['enddate'];
    }
?>
<div class=" jumbotron d-flex  flex-column align-items-center">
<h1>Énoncé</h1>
<p>Faire une page index.php.</p>
<p>Tester sur cette page que tous les paramètres de cette URL existent et les afficher:</p>
<p>index.php?startDate=2/05/2016&endDate=27/11/2016</p>
<a href="exo3.php?startdate=2/05/2016&amp;enddate=27/11/2016">Regarde!!!</a>
<p><?= $startDate;?></p>
<p><?= $endDate;?></p>
</div>
 <?php
    include 'footer.php';
  ?>