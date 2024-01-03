<?php

$michis_felinos= true;
$michis_4_patas= true;  
$michis_vuelan=false;
$michis_programan_con_php=false;


//and

var_dump( $michis_felinos && $michis_4_patas);

//or
var_dump( $michis_4_patas or $michis_vuelan);


//NOT
var_dump(! $michis_programan_con_php);

$resultado = $michis_4_patas and $michis_programan_con_php;

var_dump($resultado);


?>