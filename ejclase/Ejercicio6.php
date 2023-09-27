<?php
// 6. Imprimir los 10 primeros números de la sucesión Fibonacci. La sucesión comienza con los
// números 0 y 1; a partir de estos cada término es la suma de los dos anteriores.
$variable1 = 0;
$variable2 = 1;
for($i = 0; $i <= 10; $i++){
    $temporal = $variable1;
    $variable1 = $variable2;
    $variable2 = $temporal + $variable1;
    echo $variable1 . '<br>';
    
    
}