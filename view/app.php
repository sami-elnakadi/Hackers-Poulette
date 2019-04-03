<?php
$page = $_GET['page'];

    if($page === 'Accueil'){
        require 'view/accueil.php';
    }
    else if($page === 'Produits'){
        require 'view/produits.php';
    }else if($page === 'Contact'){
        require 'view/formulaire.php';
    }
?>