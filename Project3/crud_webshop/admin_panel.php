<?php
   // functie: admin panel
   // auteur: Ernest  

session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] != 'admin') {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel</title>
</head>
<body>
    <h1>Admin panel</h1>
    <p>Welkom, <?php echo $_SESSION['username']; ?>!</p>
    <p>U can here change products or users.</p>
    <a href="main.php">Back to home</a>
</body>
</html>
