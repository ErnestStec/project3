<?php
   // functie: registratie process
    // auteur: Ernest  

require_once('functions.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); 
    $role = $_POST['role'];

    $conn = connectDb();

    $stmt = $conn->prepare("SELECT * FROM users WHERE username = :username");
    $stmt->execute([':username' => $username]);
    if ($stmt->rowCount() > 0) {
        echo "Username is already taken. <a href='register.php'>Try again</a>";
    } else {

        $stmt = $conn->prepare("INSERT INTO users (username, password, role) VALUES (:username, :password, :role)");
        $stmt->execute([
            ':username' => $username,
            ':password' => $password,
            ':role' => $role
        ]);
        echo "Registration succes. <a href='login.php'>Log in</a>";
    }
}
?>
