<?php
   // functie: header van login systeem
   // auteur: Ernest  
session_start();
if (isset($_SESSION['username'])) {
    echo "<p>Logged as: ".$_SESSION['username']." (".$_SESSION['role'].") | <a href='logout.php'>Log out</a></p>";
    if ($_SESSION['role'] == 'admin') {
        echo "<p><a href='admin_panel.php'>Admin panel</a></p>";
    }
} else {
    echo "<p><a href='login.php'>Log in</a> | <a href='register.php'>Register</a></p>";
}
?>
