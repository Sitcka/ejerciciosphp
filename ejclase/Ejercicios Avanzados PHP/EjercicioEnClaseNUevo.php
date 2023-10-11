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
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (isset($_POST["ienviar"]) && !empty($_POST["ienviar"])) {
        if (isset($_POST["ilista"]) && !empty($_POST["ilista"])) {
            $programacion = $_POST["ilista"];
            echo "<h4>Los lenguajes de programacion de preferencia son: </h4>";
            echo "<ol>";
            foreach ($programacion as $lenguaje) {
                echo "<li>$lenguaje</li>";
            }
            echo "</ol>";
            } else {
            echo "<h4>No has seleccionado ningun lenguaje de programacion.</h4>";
        }
    }
}

?>













