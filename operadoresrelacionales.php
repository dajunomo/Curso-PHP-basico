<?php


// == igual
$a =5;
$b = "5";
$c = 9;
$d = 2;

var_dump($a== $b);
var_dump($b== $c);


// === Identico

var_dump($a===$b);

// != diferente

var_dump($a!= $b);

// !== diferente

var_dump($a !== $c);

// < menor que

var_dump($a < $c);


// > mayor que

var_dump($a > $b);

// mayor o igual que >=

var_dump($a >= $b);
var_dump($a >= $c);

// menor o igual que >=

var_dump($a <= $b);
var_dump($a <= $c);

// operador de nave espacias <=>

echo   2 <=> 1; //1
echo 1 <=> 1; // 0
echo -50 <=>  12; // -1

// ?? Fusion del null

$edad_de_pe = 23;
$edad_de_ju = 24;

echo $edad_de_ju ?? $edad_de_pe;











?>