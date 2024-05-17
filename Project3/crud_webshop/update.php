<?php
// functie: update Product
// auteur: Ernest

require_once('functions.php');

// Test of er op de wijzig-knop is gedrukt 
if(isset($_POST['btn_wzg'])){

    // test of update gelukt is
    if(updateProduct($_POST) == true){
        echo "<script>alert('Product is gewijzigd')</script>";
    } else {
        echo '<script>alert("Product is NIET gewijzigd")</script>';
    }
}

// Test of productcode is meegegeven in de URL
if(isset($_GET['productcode'])){  
    // Haal alle info van de betreffende productcode $_GET['productcode']
    $productcode = $_GET['productcode'];
    $row = getProduct($productcode);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Wijzig Product</title>
</head>
<body>
  <h2>Wijzig Product</h2>
  <form method="post">

    <label for="name">Naam:</label>
    <input type="text" id="naam" name="naam" required value="<?php echo $row['naam']; ?>"><br>

    <input type="hidden" id="productcode" name="productcode" required value="<?php echo $row['productcode']; ?>"><br>
    <label for="merk">Merk:</label>
    <input type="text" id="merk" name="merk" required value="<?php echo $row['merk']; ?>"><br>

    <label for="prijs">Prijs:</label>
    <input type="number" id="prijs" name="prijs" required value="<?php echo $row['prijs']; ?>"><br>

    <input type="submit" name="btn_wzg" value="Wijzig">
  </form>
  <br><br>
  <a href='main.php'>Home</a>
</body>
</html>

<?php
} else {
    echo "Geen productcode opgegeven<br>";
}
?>