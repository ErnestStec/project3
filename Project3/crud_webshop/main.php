<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<header>
        <div class="logo">Ernest Stec</div>
        <nav>
            <ul>
                <li><a href="main.php">Home</a></li>
                <li><a href="cart.php">Cart</a></li>
                <?php
                session_start();
                if(isset($_SESSION['user_role'])) {
                    echo '<li><a href="logout.php">Logout</a></li>';
                } else {
                    echo '<li><a href="login.php">Login</a></li>';
                    echo '<li><a href="register.php">Register</a></li>';
                }
                ?>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main>
    <?php
    // functie: Programma CRUD Product
    // auteur: Ernest   

    // Initialisatie
    include 'functions.php';
    
    // Main

    // Aanroep functie 
    crudProduct();
    ?>

</body>
</html>



