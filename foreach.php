<?php

$tienda_cafe= array(
    "capuccino" => 27,
    "Latte" => 25,
    "Americano" => 20,
    "mocca" => 24
);

foreach ($tienda_cafe as $subindice => $price){

    echo "el cafe $subindice cuenta $$price USD";
    echo "\n";
}
echo "\n";


?>