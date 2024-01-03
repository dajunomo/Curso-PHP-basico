<?php

 //$segundos = readline("Ingresa el tiempo en segundos: " );


 //$horas = (int) ($segundos / 3600);
 //$segundos = (int) ($segundos % 3600);
 //$minutos = (int) ($segundos / 60);
 //$segundos = (int) ($segundos % 60);

 //echo "son $horas horas, $minutos minutos y $segundos segundos";

 //echo "\n";


 $horas = readline("Ingresa el numero de horas: " );
 $minutos = readline("Ingresa el numero de minutos: " );
 $segundos = readline("Ingresa el numero de segundos: " );

 $tiempo_en_segundos = ($horas * 60 * 60) + ($minutos * 60) + $segundos;

    echo "es tiempo equivale a $tiempo_en_segundos segundos \n"


?>