<?php
//test

//test

//test
require_once 'config.php';

function connectDb() {
    $servername = SERVERNAME;
    $username = USERNAME;
    $password = PASSWORD;
    $dbname = DATABASE;
   
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $conn;
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}

$sortOrder = "ASC"; 

if (isset($_POST["sortOrder"])) {
    $sortOrder = $_POST["sortOrder"];
}

$conn = connectDb();
$sql = "SELECT productcode, naam, merk, prijs FROM product ORDER BY prijs $sortOrder";
$query = $conn->prepare($sql);
$query->execute();
$products = $query->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Filter</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="#" method="post">
        <label for="sortOrder">Sortuj wg ceny:</label>
        <select name="sortOrder" id="sortOrder">
            <option value="ASC" <?php if($sortOrder == "ASC") echo 'selected'; ?>>Rosnąco</option>
            <option value="DESC" <?php if($sortOrder == "DESC") echo 'selected'; ?>>Malejąco</option>
        </select>
        <input type="submit" value="Sortuj">
    </form>

    <table>
        <thead>
            <tr>
                <th>Product code</th>
                <th></th>
                <th>Marka</th>
                <th>Cena</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
                <tr>
                    <td><?php echo $product['productcode']; ?></td>
                    <td><?php echo $product['naam']; ?></td>
                    <td><?php echo $product['merk']; ?></td>
                    <td><?php echo $product['prijs']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
