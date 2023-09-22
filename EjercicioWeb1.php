<?php
$iva = 16;
echo "El IVA es de {$iva}% \n";

$Precio = readline("Ingrese el precio de lo que quiera comprar: ");
$precio = intval($Precio);

$valoriva = ($iva/100)*$precio;
$resultado = $precio + $valoriva;
echo "IVA: {$valoriva}\n";
echo "Precio + IVA: {$resultado}\n";
?>