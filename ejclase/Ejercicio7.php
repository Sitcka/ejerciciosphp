<?php
// 7. Dado un número constante, por ejemplo el 169 o 193, mostrar la lista de todos sus divisores. Si
// no los hay decir que el número es primo.
const NUMERO = 169;
$veces = 0;
for($i = 1; $i <= NUMERO; $i++){
    if(NUMERO % $i == 0){
        echo $i . "<br>";
        $veces++;
    }
}
if($veces === 0){
    echo "<br> El numero " . NUMERO . " es primo.";
}