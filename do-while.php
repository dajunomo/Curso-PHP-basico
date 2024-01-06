<?php


$usernames = ["pepito", "michi", "juan"];

/*
do {
echo "Esto se ejecuta por lo menos un vez"; 
} while( false); */


do{
    $username = readline ("por favor, ingresa tu nuevo nombre de usuario: ");

    echo "\n";

    } while( in_array($username, $usernames));



echo "\n"




?>