<?php
echo "<h4> Directorio raiz del documento donde se está ejecutando la página actual: </h4>" . dirname(__FILE__,1);
echo "<h4> Protocolo a través del cual la página está siendo solicitada:</h4>";
echo "<h4> Nombre del servidor (host) donde está alojada la página web.:</h4>";
echo "<h4> Tipo de petición HTTP que se ha ejecutado para acceder a la página.:</h4>";
echo "<h4> Dirección ip del usuario que está visitando la página:</h4>";