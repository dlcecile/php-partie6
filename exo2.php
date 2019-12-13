<?php
$page = "exercice2";
include 'header.php';
$firstName = '';
$lastName = '';
$Years = 0;
if(isset($_GET['firstname'])){
    $firstName = $_GET['firstname'];
}
if(isset($_GET['lastname'])){
    $lastName = $_GET['lastname'];
}
if(isset($_GET['years'])){
    $Years = $_GET['years'];
}

?>
<div class=" jumbotron d-flex  flex-column align-items-center">
    <h1 class="display-4">Énoncé</h1>
        <p>Faire une page index.php. </p>
        <p>Tester sur cette page que le paramètre age existe et si c'est le cas l'afficher sinon le signaler :</p>
        <p>index.php?lastname=Nemare&firstname=Jean</p>
            <a title="voir le profil de l'utilisateur" href="exo2.php?lastname=Nemare&amp;firstname=Jean&amp;years=0">Regarde!!!</a>
        <p><?= $firstName;?></p>
        <p><?= $lastName;?></p>
        <?php if (isset($_GET['years']) && $_GET['years'] != '') { ?>
        <p><?= $Years ?></p>
                                                                                            <?php } ?>
</div>
 <?php 
 include 'footer.php'; 
 ?>