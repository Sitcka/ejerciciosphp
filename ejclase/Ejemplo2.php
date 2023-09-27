<?php
$num = 16;
$num2 = "16";
$decimal = 9.6;
$cadena = "Hola como estas: \'Pedro\'";
$resultado = (double) $num2 / $decimal;
echo gettype($decimal);
/**
 * Operadores Aritmeticos
 * Logicos: &&, ||
 * Aritmeticos: +, -, *, /, %
 * Comparacion: ==, !=, <>, !, <=, >=
 * if, else, elseif, switch
 * == igual contenido
 * === igual contenido y tipo
 * Operador nave espacial: <=> spaceship
 * Ejemplo: 2<=>2 = 0
 *          2<=>3 = -1
 *          6<=>3 = 1
 */
if($num === $num2){
    echo "<br>" . "Son iguales.";
}
else{
    echo "<br>" . "Son distintos.";
}
echo "<br>". $resultado;
/**
 * CONSTANTES
 */
define("PI",3.1416);
echo "<br>PI vale: " . PI;
const NUMAUREO = 1.15;
echo "<br>NUMAUREO vale: " . NUMAUREO;

//BUCLE FOR
echo "<br> <b> BUCLE FOR </b>";
for($i = 0; $i < 10; $i++){
    echo "<br> I vale: " . $i;
}