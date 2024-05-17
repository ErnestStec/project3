<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
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

        <div class="contact-info">
            <h1>Contact Informatie</h1>
            <ul>
                <li>Naam: Ernest Stec</li>
                <li>Email: erneststec@gmail.com</li>
                <li>Phone: +31 638743093 of/en +48 577937575</li>
                <li>Address: 3081VA, Rotterdam <br> Bas Jungeriusstraat 7c </li>
            </ul>
        </div>
</body>
</html>