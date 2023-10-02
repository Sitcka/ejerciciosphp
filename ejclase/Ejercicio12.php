<?php
/*
12. Crea una función para resolver ecuaciones de segundo grado. Esta función debe recibir los
coeficientes de la ecuación y devolver un array con las soluciones. Si no hay soluciones reales
devuelve FALSE.
*/
function ecuacionSegundoGrado($coeficiente1, $coeficiente2, $coeficiente3){
    $raiz = sqrt(pow($coeficiente2, 2))- 4 * $coeficiente1 * $coeficiente3;
    $operacion = -$coeficiente2 + $raiz;
    $solucionPositiva = $operacion / 2 * $coeficiente1;
    return $solucionPositiva;
};

    echo ecuacionSegundoGrado(2,3,2);