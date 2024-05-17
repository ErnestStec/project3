<?php
   // functie: product naar cart toevoegen
   // auteur: Ernest  

session_start();
require_once('functions.php');

if(isset($_GET['productcode'])){
    $productcode = $_GET['productcode'];
    $product = getProduct($productcode);

    if($product){
        if(!isset($_SESSION['cart'])){
            $_SESSION['cart'] = array();
        }

        $found = false;
        foreach($_SESSION['cart'] as &$item){
            if($item['productcode'] == $product['productcode']){
                $item['quantity'] += 1;
                $found = true;
                break;
            }
        }

        if(!$found){
            $product['quantity'] = 1;
            $_SESSION['cart'][] = $product;
        }

        echo "<script>alert('Product is added to cart');</script>";
    } else {
        echo "<script>alert('Can't find a product');</script>";
    }
}

header('Location: main.php');
?>
