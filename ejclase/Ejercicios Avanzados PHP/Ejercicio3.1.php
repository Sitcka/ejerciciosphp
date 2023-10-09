<?php
const PI = 3.1416;
if(isset($_GET["ienviar"]) && !empty($_GET["ienviar"])){
    if(isset($_GET["iradio"]) && !empty($_GET["iradio"])){
        $radio = $_GET["iradio"];
        $area = PI *  pow($radio,2);
        echo "<h4>El area del circulo es: $area</h4>";
    }
    else if(isset($_GET["ialtura"]) && !empty($_GET["ialtura"])){
        $altura = $_GET["ialtura"];
        if(isset($_GET["ibase"]) && !empty($_GET["ibase"])){
            $base = $_GET["ibase"];
            $areaTriangulo = ($base * $altura) / 2;
            echo "<h4>El area del triangulo es: $areaTriangulo</h4>";
        }
    }
    else if(isset($_GET["ilado"]) && !empty($_GET["ilado"])){
        $lado = $_GET["ilado"];
        $areaCuadrado = pow($lado, 2);
        echo "<h4>El area del cuadrado es: $areaCuadrado</h4>";
    }
    else{
        echo "No has introducido algun dato solicitado.";
    }
}