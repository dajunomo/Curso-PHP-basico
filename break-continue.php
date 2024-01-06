<?php

$tienda_cafe= array(
    "capuccino" => 27,
    "Latte" => 25,
    "Recalentado" => 10,
    "Americano" => 20,
    "mocca" => 24
);

 foreach ($tienda_cafe as $cafe => $price) {
    
   /* echo "Actualmente encontre al cafe $cafe \n";

        if ($cafe == "mocca"){
            echo"\n";
            echo "¡Encontramos a Mocca!";
            echo"\n";
            break; 
            
        };*/


        if ($cafe == "Recalentado"){
            continue;
        }

        echo "el cafe $cafe es muy rico! \n";

            echo "\n";


 }




?>