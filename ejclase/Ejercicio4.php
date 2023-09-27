<?php
// 4. Imprimir la tabla de multiplicar del 8. Usar una constante para que fácilmente podamos
// adaptarla a otros números.
const MULTIPLICAR = 8;
for($i = 0; $i <= 10; $i++){
    echo "<br>" .  $i . " + " . MULTIPLICAR . " = " . $i * MULTIPLICAR; 
}