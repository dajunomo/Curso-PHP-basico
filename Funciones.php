<?php



function get_pokemon (){

    $numero_aleatorio = rand(1, 5);

    switch  ($numero_aleatorio){

        case 1:
            echo "pikachu \n";
            break;

        case 2:
            echo "charmander \n";
            break;

        case 3:
            echo "Mewtwo \n";
            break;

        default:
        echo " lo siento, no hay pokemon para ti \n";

    }


}

for ($i=0; $i < 20; $i++) { 
    get_pokemon();
}


Echo "\n";

?>