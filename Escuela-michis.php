<?php

$escuela = Array(

    array(
        "nombre" => "michi_1",
        "color" => "gris",
        "ocupacion" => "conductor",
        "comida" => 
        array(
            "favorita" => "arroz",
            "nofavorita" => "pez"
        )

    ),
    
    array(
        "nombre" => "michi_2",
        "color" => "mono",
        "ocupacion" => "gamer",
        "comida" => 
        array(
            "favorita" => "sushi",
            "nofavorita" => "purina"
        )

    ),

    
    array(
        "nombre" => "michi_3",
        "color" => "siames",
        "ocupacion" => "fotografo",
        "comida" => 
        array(
            "favorita" => "pan",
            "nofavorita" => "pollo"
        )

    ),


);

echo "la comida favorita del michi 2 es: ". $escuela[1]['comida']['favorita'];
echo "\n";
echo "El color del michi 3 es: ". $escuela[2]['color'];

?>