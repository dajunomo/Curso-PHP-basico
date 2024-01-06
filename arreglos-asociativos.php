<?php

/* $edades = array (
    "carlos" => 18,
    "mr michi" => 22,
    "Juan" => 40
);

echo "la edad de carlos es ". $edades["mr michi"];
echo  "\n"; */

$cafes = array(
    "capuccino" => 50,
    "Latte" => 49,
    "Americano" => 70
);

// echo "el precio del cafe americano es de {$cafes ['Americano']}";

$personas = array (

    "carlos" => array (
        "edad" => 20,
        "apellido" => "santana"
    ),

    "Mr michi" => array (
        "edad" => 18,
        "apellido" => "Diaz"
    ),

);

echo   "la informacion de mr michi es: Edad: "
. $personas["Mr michi"]["edad"]. " Apellido: " 
. $personas["Mr michi"]["apellido"];

echo "\n"


?>