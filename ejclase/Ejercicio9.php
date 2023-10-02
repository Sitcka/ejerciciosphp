<?php
/*
9. Repite el ejercicio anterior añadiendo los elementos del array uno a uno. Muestra el resultado
por pantalla.
*/
echo "<br><h1>EJercicio 8</h1>";
$array = array();

array_push($array,"Derrick White");
array_push($array,"Jaylen Brown");
array_push($array,"Jayson Tatum");
array_push($array,"Kristaps Porzingis");
array_push($array,"Al Horford");

echo "<h3>Solo nombres</h3>";
echo "<br><ol>";
foreach($array as $elemento){
    echo "<li> $elemento </li>";
}
echo "</ol>";

echo "<hr><h3>Posicion del nombre en el array</h3>";

print_r($array);