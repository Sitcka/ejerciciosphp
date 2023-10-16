<?php
//Funciones normalmente al principio de los ficheros
function esPalindromo($micadena)
{
    $micadena = str_replace(strtolower($micadena), ' ', '');
    $reves = strrev($micadena);
    //strcmp compara cadenas
    if (strcmp($micadena, $reves) == 0) {
        echo "Es palindromo";
    } else {
        echo "No es palindromo";
    }
    return;
}
$cadena = "Ana lava Lana";
esPalindromo($cadena);