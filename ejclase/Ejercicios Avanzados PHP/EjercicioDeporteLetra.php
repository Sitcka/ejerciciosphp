<?php
//Redireccionar a otra pagina si se da el caso de n
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (isset($_POST["ienviar"]) && !empty($_POST["ienviar"])) {
        if (isset($_POST["ilista"]) && !empty($_POST["ilista"])) {
            $programacion = $_POST["ilista"];
            foreach ($programacion as $lenguaje) {
                if(strpos(strtolower($lenguaje), 'n')){
                    header("Location: redireccion.php");
                }
                echo "<li>$lenguaje</li>";
            }
            } else {
            echo "<h4>No has seleccionado ningun lenguaje de programacion.</h4>";
        }
    }
}

?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>

<body>
    <!--4 - Realiza un formulario en el que mediante un lista desplegable selecciones tu deporte
preferido y posteriormente muestres la opción seleccionada.-->
<form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>"method="post" >
    <select name="ilista[]" id="lista" multiple >
        <option value=""></option>
        <option value="Java">Java</option>
        <option value="SQL">SQL</option>
        <option value="JavaScript">JavaScript</option>
        <option value="PHP">PHP</option>
        <option value="MongoDB">MongoDB</option>
        <option value="DOM">DOM</option>
        <option value="CSS">CSS</option>
        <option value="HTML">HTML</option>
    </select>
    <br><br>
    <input type="submit" value="Enviar" name="ienviar">
</form>
</body>
</html>
<?php
//Cuando se solicita la pagina la 1º vez no debe aparecer el mensaje
//Cuando se solicita la pagina la pagina mediante submit lo hace en POST
//header tiene que hacerse antes de cualquier echo













