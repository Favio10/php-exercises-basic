<?php
#Manipulación de Strings:
#Escribe una función que reciba un string como parámetro y devuelva el número de vocales que contiene. 
#Luego, crea otra función que reciba un string y lo convierta a formato título (primera letra de cada palabra en mayúscula).
## Bonus: Elimina los espacios en blanco duplicados dentro de una cadena.

function vocales(string $a) {
    $vocals = ["a", "e","i","o","u","A","E","I","O","U"];
    $contador = 0;
    for ($i=0; $i < strlen($a); $i++) { 
        if (in_array($a[$i],$vocals)) {
            $contador++;
        }
    }
    return $contador;
}


function titulos(string $a){
    $tit = ucwords(strtolower($a));
    return $tit;
}

function eliminarEspaciosDuplicados($string) {
    return preg_replace('/\s+/', ' ', trim($string));  
}

echo vocales("bUen dia");

echo titulos("bUen dia");