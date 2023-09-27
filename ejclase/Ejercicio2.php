<?php
// 2. Crea las variables $nombre, $direccion y $mail y asígnales los valores adecuados. Muestra los
// valores en una tabla HTML.
$nombre = "Josep Pinos";
$direccion = "Urbanizacion Alameda-Casetas ";
$mail = "josep@gmail.com";
echo "<table border='1'>
        <tr>
            <th>NOMBRE</th>
            <th>DIRECCION</th>
            <th>EMAIL</th>
        </tr>
        <tr>
            <td>$nombre</td>
            <td>$direccion</td>
            <td>$mail</td>
        </tr>
    </table>";


// 7. Dado un número constante, por ejemplo el 169 o 193, mostrar la lista de todos sus divisores. Si
// no los hay decir que el número es primo.