<?php

echo "<h1>Arrays asociativos</h1>";

$capitales = [
    "España" => "Madrid",
    "UK" => "Londres",
    "Francia" => "Paris"
];

//Muestra el array
//Tipos de array: indexados, asociativos y simples.
foreach($capitales as $clave => $valores){
    echo "<br>La capital de $clave es $valores.";
}

echo "<h3>Arrays multidimensionales (Arrays de arrays)</h3>";

$cestaCompra = array(
    "Frutas" => array("pera", "manzana"),
    "Verduras" => array("calabacin")
);

print_r($cestaCompra);

foreach($cestaCompra as $clave => $valores){
    echo "<br>$clave: ";
    foreach($valores as $kvalor => $vvalor){
        echo "<br>La clave es $kvalor y el valor es $vvalor";
    }
}

echo "<br>Las frutas son: ";
foreach($cestaCompra["Frutas"] as $clave => $valores){
    echo "<br>$valores";
}

echo "<hr>";

$unafruta = $cestaCompra["Frutas"][1];
$cestaCompra["Frutas"][1] = "Apple";
echo "<br>Soy la fruta : " . $cestaCompra["Frutas"][1];


echo "<br><h3>Funciones de ordenacion</h3>";
//Funcion array_pop($) quita un 
//Insertar en el ultimo elemento array_push
array_push($cestaCompra["Frutas"],"Kiwi");
print_r($cestaCompra);
$unKiwi = array_pop($cestaCompra);//Extrae el ultimo elemento del array.

echo "<br><h1>Shift y Unishift</h1>";
$elemento = array_shift($cestaCompra);//array_shift extrae al del principio.
array_unshift($cestaCompra, "Colacao");//Inserta al principio
print_r($cestaCompra);

echo "<h2>Ordenacion</h2>";
//Sort: ordena los valores pero las claves desaparecen
//Asort: ordena y mantiene las claves.
asort($capitales);
echo "<br>";
print_r($capitales);
//Asort ordena los valores de manera descendente, las claves se mantienen
//Rsort ordena los valores de manera descendente, averiguar lo demas...

echo "<br><h2>Ordenacion segun claves</h2>";
ksort($capitales);
print_r($capitales);