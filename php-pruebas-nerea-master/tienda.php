<?php

class Comida{

    private $primero;
    private $segundo;
    private $tercero;
    private $descuento;


    public function __construct() {
        $this->food();
    }


    private function food() {
        $primero = [['Sopa',3.5], ['Pure',3.5], ['Macarrones',3.5]];
        $segundo = [['Filete',2.5], ['Pescado',2.5], ['Pollo',2.5]];
        $postre = [['Helado',1.5], ['Tarta',1.5], ['Yogurt',1.5]];

    }


}


function dameRegalo($prod1, $prod2, $prod3){
//AQUI EMPIEZA EL PRIMER DESCUENTO, POR COMPRAR TRES DEL PRIMERO TE REGALAN UNO //

    while ($prod1 == 'Sopa' || $prod1 == 'Pure' || $prod1 == 'Macarrones'){
        echo "ES UN PRIMERO!";
        if($prod2 == $prod1 && $prod3 == $prod1){
            echo "SON PRIMEROS Y SON IGUALES";
            aplicar_descuento();
        }
    }

}


$comida1 = new Comida();
print_r ($comida1);

?>

