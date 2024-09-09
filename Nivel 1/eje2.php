<?php
# Consigna: Tienes una frase almacenada en la variable $mensaje. Crea tres funciones: una que convierta la frase a mayúsculas, otra que calcule su longitud y otra que la invierta. Finalmente, imprime los resultados de cada función y la frase original concatenada con otra frase.
# Hint: Usa funciones nativas de PHP como strtoupper(), strlen() y strrev().

$mensaje = "Hola. Bienvenidos!";

function mayusc($string){
    $mayus = strtoupper($string);
    echo " Frase en mayusculas: $mayus<br>";
};

function long($string){
    $larg = strlen($string);
    echo "Longitud de la frase: $larg<br>";
};

function invier($string){
    $inv = strrev($string);
    echo "Frase invertida: $inv<br>";
};

mayusc($mensaje);
long($mensaje);
invier($mensaje);

$otro_msj = "Estaras viendo los resultados de las func =D";

echo "$mensaje $otro_msj"; 



?>