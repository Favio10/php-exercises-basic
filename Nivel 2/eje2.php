<?php
#Tienes una palabra almacenada en una variable, así como un carácter que reemplazará el primero y otro que reemplazará el último carácter de la palabra.
#Crea una función que reemplace el primer y último carácter de la palabra por los valores nuevos y luego imprima la nueva palabra en pantalla.

$variable = "MEDICO";
$caracter1 = "L";
$caracter2 = "A";

function cambio($a,$b,$c) {
    $palabraCortada = substr($a, 1, -1);

    $newPalabra = $b . $palabraCortada . $c;

    echo "La nueva palabra es $newPalabra";
}

cambio($variable, $caracter1, $caracter2);