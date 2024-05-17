<?php
   // functie: cart met producten
   // auteur: Ernest  
session_start();
require_once('functions.php');
?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>
<body>
    <h1>Your cart</h1>
    <table>
        <tr>
            <th>Productcode</th>
            <th>Naam</th>
            <th>Merk</th>
            <th>Prijs</th>
            <th>Hoeveelheid</th>
            <th>Verwijder</th>
        </tr>
        <?php
        if(isset($_SESSION['cart']) && count($_SESSION['cart']) > 0){
            foreach($_SESSION['cart'] as $item){
                echo "<tr>";
                echo "<td>{$item['productcode']}</td>";
                echo "<td>{$item['naam']}</td>";
                echo "<td>{$item['merk']}</td>";
                echo "<td>{$item['prijs']}</td>";
                echo "<td>{$item['quantity']}</td>";
                echo "<td>
                        <form method='post' action='remove_from_cart.php?productcode={$item['productcode']}'>
                            <button>Verwijder</button>
                        </form>
                      </td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='6'>Cart is empty</td></tr>";
        }
        ?>
    </table>
    <br>
    <a href="main.php">Back to home</a>
</body>
</html>
