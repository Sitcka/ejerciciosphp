<?php
/*
8. Construir un array con el quinteto inicial de un equipo de basket. Imprímelo usando etiquetas
html de dos formas diferentes:
a) Indicando solo los nombres.
b) Indicando la posición del nombre en el array (0, 1, 2, ...).
*/
echo "<br><h1>EJercicio 8</h1>";
$array = array("Derrick White","Jaylen Brown","Jayson Tatum","Kristaps Porzingis","Al Horford" 	);

echo "<h3>Solo nombres</h3>";
echo "<br><ol>";
foreach($array as $elemento){
    echo "<li> $elemento </li>";
}
echo "</ol>";

echo "<hr><h3>Posicion del nombre en el array</h3>";

print_r($array);