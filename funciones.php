<?php
 

 function concatenar($nombre, $apellido){
    echo $nombre.' '.$apellido;
 }

 concatenar("bruce", "wayne");

function sumarNumeros($numeros){
    $suma = 0;
    for ($i=0; $i<4; $i++){
        $suma = $suma + $numeros[$i];
    }
    echo "\nla suma de los valores del array es: ".$suma;
}
$numeros = array(1, 2, 3, 4);
sumarNumeros($numeros);
 ?>