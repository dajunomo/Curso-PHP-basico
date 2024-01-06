<?php

$bonificaciones = 100;
$minimo = 100;
$dinero_retirar = readline ("Hola, para retirar las bonificaciones debe tener minimo 100 USD, ingrese el valor a retirar: ");

if($dinero_retirar >= $minimo ){


   if ($dinero_retirar <= $bonificaciones){

                        if ($bonificaciones >= $minimo) {

                            echo "Perfecto, puedes retirar las donaciones, tienes la siguiente cantidad disponible: " . $bonificaciones . " USD" ;

                             } else {

                            echo "Lo sentimos, no puede retirar, actualmente cuenta con: ". $bonificaciones . " USD" ;

                        }}

                             else {
                            echo "lo sentimos la cantidad disponible de dinero es: " . $bonificaciones . " USD";

                        }

}else {

    echo "lo sentimos, el numero valor minimo para retirar son 100 USD, por favor rectifica el valor a retirar.";
    
}

?>