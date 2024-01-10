<?php

/* $uno = 1;
$dos = 1;
$tres = 2;
$cuatro = 3;
$cinco = 5;
$seis= 8;
$siete = 13;
$ocho = 21; */

$numero_tienda = (int) readline ("dime el numero de tienda: ");
$anterior = 0;
$actual= 1;


for ($i=2; $i <= $numero_tienda ; $i++) { 
    
    $temporal = $actual;
    $actual += $anterior;
    $anterior = $temporal;

   

};

echo "hay  $actual formas de llegar"




?>