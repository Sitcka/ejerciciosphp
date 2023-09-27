<?php
// 7. Dado un número constante, por ejemplo el 169 o 193, mostrar la lista de todos sus divisores. Si
// no los hay decir que el número es primo.
const NUMERO = 169;
for($i = 0; $i < NUMERO; $i++){
    if(NUMERO % $i == 0 && NUMERO % $i == 1){
        echo "<br>" . $i;
    }
    else{
        echo "Es numero primo";
    }
}