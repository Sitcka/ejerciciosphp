<?php
//Include y required estudiarlos
include_once "matematicas.php";
/*
12. Crea una función para resolver ecuaciones de segundo grado. Esta función debe recibir los
coeficientes de la ecuación y devolver un array con las soluciones. Si no hay soluciones reales
devuelve FALSE.

*/
if($_SERVER['REQUEST_METHOD'] == "POST"){

}
function ecuacionSegundoGrado($coeficiente1, $coeficiente2, $coeficiente3)
{
    $b = - ($coeficiente2);
    $bCuadrado = pow($coeficiente2, 2) - (4 * $coeficiente1 * $coeficiente3);
    if ($bCuadrado < 0) {
        return false;
    }
    $bRaiz =  sqrt($bCuadrado);
    $solucionPositiva = ($b + $bRaiz) / (2 * $coeficiente1);
    $solucionNegativa = ($b - $bRaiz) / (2 * $coeficiente1);
    $soluciones = array($solucionPositiva, $solucionNegativa);

    return $soluciones;
};


if ($ecuacionCuadratica === false) {
    echo "<p>No tiene respuesta la ecuacion.</p>";
} else {
    $positiva = $ecuacionCuadratica[0];
    $negativa = $ecuacionCuadratica[1];
    echo "<p>Solucion positiva: $positiva</p>";
    echo "<p>Solucion negativa: $negativa</p>";
}
//Funcion de manera implicita
// echo "<p>Solucion positiva: $positiva</p>";
// echo "<p>Solucion negativa: $negativa</p>";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 12</title>
</head>

<body>
    <h1>Ecuacion de Segundo Grado</h1>
    <form action="<?= htmlspecialchars($_SERVER['PHP_SELF'])?>">
        <input type="number" name = "a">x<sup>2 +-
        <input type="number" name = "b">x +-
        <input type="number" name = "c">
        <br><br>
        <input type="submit" name="ecu" value="enviar">
    </form>
</body>

</html>