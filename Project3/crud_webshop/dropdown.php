<?php

//functie dropdown
// auteur Ernest

include "functions.php";

function dropDown (){}
//Haal alle product record uit de tabel
$result = GetData("product");

//Maak dropdown
  $text = "
  Choose a productcode:
  <select name='productcode' >";

  foreach ($result as $row){
    $text .= "<option value='$row[productcode]'>$row[naam]</option>\n";
}
 
$text .= "</select>";
  echo $text;

?>
