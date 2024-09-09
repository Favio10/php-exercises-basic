<?php
# Consigna: Declara dos variables enteras y dos variables decimales. Realiza e imprime las siguientes operaciones: suma, resta, producto y módulo entre las variables enteras y las decimales. Luego, calcula e imprime el doble de cada variable. Finalmente, calcula la suma y el producto de todas las variables juntas.
# Hint: Utiliza las operaciones matemáticas básicas en PHP (+, -, *, %).

$int1 = 10;
$int2 = 15;
$dec1 = 5.5;
$dec2 = 8.8;

echo "suma de enteros: ". $intsuma = $int1 + $int2;
echo "suma de decimales: ". $decsuma = $dec1 + $dec2;

echo "resta de enteros: ". $intresta = $int1 - $int2;
echo "resta de decimales: ". $decresta = $dec1 - $dec2;

echo "producto de enteros: ". $intprod = $int1 * $int2;
echo "producto de decimales: ". $decprod = $dec1 * $dec2;

echo "modulo de enteros: ". $intmod = $int1 % $int2;
echo "modulo de decimales: ". $decmod = $dec1 % $dec2;

$dobleInt1 = $int1 * 2;
$dobleInt2 = $int2 * 2;
$dobleDec1 = $dec1 * 2;
$dobleDec2 = $dec2 * 2;

echo "El doble de $int1 es: $dobleInt1";
echo "El doble de $int2 es: $dobleInt2";
echo "El doble de $dec1 es: $dobleDec1";
echo "El doble de $dec2 es: $dobleDec2";



?>