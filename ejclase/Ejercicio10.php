<?php 
/*
10. Repite el ejercicio 8 creando un array asociativo. Cada posición se llamará: base, escolta, alero,
alapivot, pivot. Muestra el resultado con un foreach (clave => valor).
*/
echo "<br><h1>EJercicio 8</h1>";
$array = [
    "Base" => "Derrick White",
    "Escolta" => "Jaylen Brown",
    "Alero" =>  "Jayson Tatum",
    "Alapivot" => "Kristaps Porzingis",
    "Pivot" => "Al Horford" 
];

echo "<h3>Solo nombres</h3>";
echo "<br><ol>";
foreach($array as $claves => $valores){
    echo "<li>$claves: $valores</li>";
}
echo "</ol>";

echo "<hr><h3>Posicion del nombre en el array</h3>";

print_r($array);