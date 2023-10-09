<?php
echo "<h2>Informacion del fichero subido.</h2>";
echo "<p>Nombre fichero:.</p>" . $_FILES['myfile']['name'];
echo "<p>Tipo/extension fichero:</p>" . $_FILES['myfile']['type'];
echo "<p>Tamaño del fichero:</p>" . $_FILES['myfile']['size'];
echo "<p>Nombre fichero temporal:</p>" . $_FILES['myfile']['tmp_name'];


//Subo el fichero al servidor
$booleano = move_uploaded_file($_FILES['myfile']['tmp_name'], "uploads/" . $_FILES['myfile']['name']);
if($booleano === true){
    echo "<h4>FIchero subido de manera correcta.</h4>";
} else {
    echo"<h4>Error al subir el fichero</h4>";
}
