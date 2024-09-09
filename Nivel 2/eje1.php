<?php
# Define dos variables que contengan números enteros. Crea una función que sume estos dos números. Si los números son diferentes, simplemente devuelve la suma. 
# Si son iguales, devuelve el doble de su suma. Finalmente, imprime el resultado en pantalla.

$var1 = 20;
$var2 = 20;

function suma($a, $b) {
    if ($a == $b) {
        $sum = ($a + $b) * 2;
        echo "El resultado es: $sum";
    } 
    else {
        $sum = $a + $b;
        echo "El resultado es: $sum";
    }
}

suma($var1,$var2);