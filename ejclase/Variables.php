<?php
echo"<h1>VARIABLES</h1>";
$saludo = "hola";
//Case sensetive: variables, pero funciones no.
echo "<br>Un saludo: $saludo";
echo "<h3>Concatenar variables</h3>";
$despedida = " y adios.";
$saludo .= $despedida;
$numero = 20;
$numero += 3;
//Las comillas simples en un "echo" no interpreta las varibles.
echo "<br>$saludo con numero $numero";
//++$numero $numero++;
$var = 100;
$var2 = &$var; // var2 es una referencia de var
$var3 = $var;  //var3 es una referencia de var

echo "<br>var es: " ,$var;
echo "<br>var2 es: " ,$var2;
echo "<br>var3 es: " ,$var3;

$var2 = 333;

echo "<br>var es: " ,$var;
echo "<br>var2 es: " ,$var2;
echo "<br>var3 es: " ,$var3;

echo "<h3>Variable de variables</h3>";
$vehiculo = "coche";
$$vehiculo = "audi";

echo "<br>El $vehiculo es de marca $coche";
echo "<br>El $vehiculo es de marca " . ${$vehiculo};