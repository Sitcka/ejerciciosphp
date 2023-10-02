<?php
/*
11. Construye un array con el nombre de 4 países. Por cada país debes almacenar su moneda y
número de habitantes. Muéstralo por pantalla.
12. Crea una función para resolver ecuaciones de segundo grado. Esta función debe recibir los
coeficientes de la ecuación y devolver un array con las soluciones. Si no hay soluciones reales
devuelve FALSE.
13. Almacena la función anterior en el fichero matemáticas.php. Crea un fichero que la incluya y la
utilice.
14. Escribe una función que reciba una cadena y compruebe si es palíndromo.
*/
$paises = [
    "Ecuador" => array("Dolar", "17000000000"),
    "Colombia" => array("Pesos Colombianos", "28000000000"),
    "Venezuela" => array("Bolivares", "51000000000"),
    "Argentina" => array("Pesos Argentinos", "45000000000")
];

foreach($paises as $clave => $valor){
    echo "<br>$clave: ";
    echo "<br>Moneda: $valor[0]&nbsp &nbsp &nbsp Numero de habitantes: $valor[1]";
}