<?php
# Consigna: Crea dos arrays, uno con números impares y otro con números pares. Agrega un nuevo número al array de pares. Luego, mezcla ambos arrays en uno solo y muestra la longitud del array resultante. Finalmente, imprime el contenido del array mezclado valor por valor.
# Hint: Puedes usar array_push() para agregar un valor a un array, y array_merge() para combinar los dos arrays.

$array1 = [1, 3, 5, 7, 9];
$array2 = [2, 4, 6, 8];

$array2[] = 0;

$nuevo_arr = array_merge($array1, $array2);
echo "La longitus del array es: ". count($nuevo_arr);

foreach ($nuevo_arr as $valor) {
    echo $valor . " ";
}