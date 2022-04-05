<?php
$edades = array(1, 5, 7, 2, 6, 10);

function bodega_correspondiente($arrayEdades){
    foreach ($arrayEdades as $edad) {
       switch ($edad) {
           case $edad > 0 && $edad < 5:
              concatenate($edad, "inferior");
               break;
            case $edad >= 5 && $edad < 7:
                concatenate($edad, "media");
                break;
            case $edad > 7:
                concatenate($edad, "alta");
                break;

            default:
                echo "El estudiante con edad indefinida tiene un espacio en la bodega de al lado.". PHP_EOL;
                break;
       }
    }
   
}

function concatenate ($edad, $espacio){
  echo "El estudiante de $edad años tendra sus juguetes en la parte $espacio de la bodega.". PHP_EOL;
}
bodega_correspondiente($edades);
?>

