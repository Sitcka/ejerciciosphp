<?php
/*
Todo esto sera util para el futuro e importante para ciberseguridad
*/
echo "<h4> Directorio raiz del documento donde se está ejecutando la página actual: </h4>" . $_SERVER["DOCUMENT_ROOT"];
//Protocolo: http o https
//Entender que es configuracion de apache
echo "<h4> Protocolo a través del cual la página está siendo solicitada:</h4>" . $_SERVER["SERVER_PROTOCOL"];
echo "<h4> Nombre del servidor (host) donde está alojada la página web:</h4>" . $_SERVER["SERVER_NAME"];
echo "<h4> Tipo de petición HTTP que se ha ejecutado para acceder a la página:</h4>" . $_SERVER["REQUEST_METHOD"];
echo "<h4> Dirección ip del usuario que está visitando la página:</h4>" . $_SERVER["REMOTE_ADDR"];