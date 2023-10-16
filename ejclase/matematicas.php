<?php
function ecuacionSegundoGrado($coeficiente1, $coeficiente2, $coeficiente3)
{
    $b = - ($coeficiente2);
    $bCuadrado = pow($coeficiente2, 2) - (4 * $coeficiente1 * $coeficiente3);
    if ($bCuadrado < 0) {
        return false;
    }
    $bRaiz =  sqrt($bCuadrado);
    $solucionPositiva = ($b + $bRaiz) / (2 * $coeficiente1);
    $solucionNegativa = ($b - $bRaiz) / (2 * $coeficiente1);
    $soluciones = array($solucionPositiva, $solucionNegativa);

    return $soluciones;
};