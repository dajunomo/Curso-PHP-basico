<?php

//michi 1: 9
//michi 2: 4
//michi 3: 3
//michi 4: 9
//michi 5: 1

$michi = 4;

switch ($michi) {

    //ejemplo casos iguales
    case 1:
    case 4:
        echo "su numero favorito es el 9";
        break;  /* no olvidar el break ya que es el cierre del caso, 
                el caso que no haya ningun break en algun caso lo tomara hasta el siguiente break como esta en el ejemplo */

    case 2:
         echo "su numero favorito es el 4";
         break;    

    case 3:
        echo "su numero favorito es el 3";
         break;

    case 4:
        echo "su numero favorito es el 9";
        break;

    case 5:
        echo "su numero favorito es el 1";
        break;

    default:
    echo "este michi no existe :(";

}

echo "\n"


?>