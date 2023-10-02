<?php

echo "<h1>Arrays</h1>";
$array = array(6,"perro",9.8,true);
var_dump($array);
echo"<br>";
echo "<h3>Acceder a elementos</h3>";
for($i = 0; $i < count($array); $i++){
    echo "<br>Elemento vale: " . $array[$i];
}
echo "<hr>";
foreach($array as $elemento){
    echo "<br>Elemento: " . $elemento;
}

//En php los arrays son indexados, es decir por defecto lleva un indice de los elementos que hay
//Añadir elemento a un array al final del mismo.
$array [] = "otro";
$array[22] = "ultimo";
echo "<br>Numero de elementos: " . count($array);
echo "<br>El sexto elemento es: " . $array[22];
$array[99] = "el bueno";
print_r($array);

$array = array_values($array);
//Array_values reordena los indices.
echo "<br>";
print_r($array);
//Funcion in_array busca si esta ese elemento en el array. 
$array2 = array(4, "xvds", 8.8);
echo "<br>Esta el 10? " . in_array(98,$array2);
