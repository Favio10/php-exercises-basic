<?php
# Manipulación de Arrays:
#Crea un array de 5 números enteros. Escribe una función que recorra el array e imprima solo los números pares. 
#Luego, crea otra función que calcule la suma de todos los números en el array.
## Bonus: Ordena el array de forma ascendente y luego de forma descendente.

$arr = [2,7,9,12,34];

function soloPares(array $a) {
    foreach( $a as $valor) {
        if ($valor % 2 == 0) {
            echo "$valor \n";
        }
    }
}

function sumaTotal(array $a) {
    $total = 0;
    foreach($a as $valor) {
        $total = $total + $valor;
    }
    return $total;
}

soloPares($arr);
echo "La suma total es: " . sumaTotal($arr) . "\n";

sort($arr);
echo "Array de forma ascendente: ";
print_r($arr);

rsort($arr);
echo "Array de forma descendente: ";
print_r($arr);