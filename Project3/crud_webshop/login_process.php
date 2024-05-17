<?php
   // functie: inloggen process
   // auteur: Ernest  

session_start();
require_once('functions.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $conn = connectDb();

    $stmt = $conn->prepare("SELECT * FROM users WHERE username = :username");
    $stmt->execute([':username' => $username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = $user['role'];
        header('Location: main.php');
    } else {
        echo "Wrong username or password. <a href='login.php'>Try again</a>";
    }
}
?>
