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

/*
10. Repite el ejercicio 8 creando un array asociativo. Cada posición se llamará: base, escolta, alero,
alapivot, pivot. Muestra el resultado con un foreach (clave => valor).
11. Construye un array con el nombre de 4 países. Por cada país debes almacenar su moneda y
número de habitantes. Muéstralo por pantalla.
12. Crea una función para resolver ecuaciones de segundo grado. Esta función debe recibir los
coeficientes de la ecuación y devolver un array con las soluciones. Si no hay soluciones reales
devuelve FALSE.
13. Almacena la función anterior en el fichero matemáticas.php. Crea un fichero que la incluya y la
utilice.
14. Escribe una función que reciba una cadena y compruebe si es palíndromo.
*/