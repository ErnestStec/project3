<?php
   // functie: logout
    // auteur: Ernest  

session_start();
session_unset();
session_destroy();
header("Location: login.php");
exit();
?>
