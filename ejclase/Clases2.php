<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clases</title>
</head>
<body>
    <h1>Informacion de la Persona que es Profesor</h1>
    <?php
        include_once "Clases.php";
        include_once "Profesor.php";


        $persona = new Persona("Josep", 21);
        echo "<br>Nombre de la persona: " . $persona -> getNombre();
        echo "<br>";
        echo $persona;

        $profesor = new Profesor("Enrique", 34, 1);
        echo "<br>";
        echo $profesor;
        echo "<br>";
        echo "Hay en total: " . Persona::$contadorPersonas . " personas.";
    ?>
</body>
</html>