<?php
echo "<h2>Funciones en PHP</h2>";
// function sumar($operando1, $operando2){
//     return $operando1 + $operando2;
// }
/**
 * function sumar($operando1 = 5, $operando2 = 2){
 *   return $operando1 + $operando2;
 *   } 
 * Funciones con parametros por defecto
 */

//  function sumar($operando1, $operando2){
//     // static $contador = 0;
//     // echo "<br>Contador vale: " . $contador;
//      global $varglobal;
//      $varglobal = 123456;
//     return $operando1 + $operando2;
// }
// echo "<p>Funcion suma: </p>";
// $varglobal = 666;
// echo "<p>Variable global con valor antes de llamar a la funcion de SUMAR: $varglobal</p>";
// $funcionSuma = sumar(4, 5);
// echo "<p>Variable global con valor despues de llamar a la funcion de SUMAR: $varglobal</p>";
// $funcionSum = sumar(8, 7);
// $funcionSu = sumar(9, 3);
// echo "<p>Resultado de la suma: $funcionSuma</p>";
function aumentarSueldo(&$operando ){//objeto por referencia
    $operando *= 3;

}
$sueldo = 1000;
aumentarSueldo($sueldo);
echo "<p>Ahora tu sueldo es: $sueldo</p>";
