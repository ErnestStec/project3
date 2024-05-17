<?php
// auteur: Ernest
// functie: verwijder een product op basis van de id
include 'functions.php';

// Haal product uit de database
if(isset($_GET['productcode'])){

    // test of insert gelukt is
    if(deleteProduct($_GET['productcode']) == true){
        echo '<script>alert("productcode: ' . $_GET['id'] . ' is verwijderd")</script>';
        echo "<script> location.replace('main.php'); </script>";
    } else {
        echo '<script>alert("product is NIET verwijderd")</script>';
    }
}
?>

