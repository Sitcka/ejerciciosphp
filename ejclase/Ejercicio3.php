<?php
// 3. Realiza un conversor de euros a pesetas. La cantidad en euros que se quiere convertir deberá
// estar almacenada en una variable.
$cantidad = 50;
$pesetas = (double) $cantidad * 166.386;
echo "Euros: " . $cantidad . "&nbsp &nbsp" . "Pesetas: $pesetas";