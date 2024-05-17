<?php
   // functie: verwijder product in cart
   // auteur: Ernest  

session_start();

if(isset($_GET['productcode'])){
    $productcode = $_GET['productcode'];

    if(isset($_SESSION['cart'])){
        foreach($_SESSION['cart'] as $key => $item){
            if($item['productcode'] == $productcode){
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart'] = array_values($_SESSION['cart']);
                break;
            }
        }
    }
}

header('Location: cart.php');
?>
