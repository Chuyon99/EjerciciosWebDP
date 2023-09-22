<?php
$numero = readline("Ingresa un numero: ");
$numero = intval($numero);

function operacionfactorial($numero) {
    if ($numero < 0) {
        return "No se puede calcular el factorial de un número negativo.";
    } else {
        $factorial = 1;
        $calculo = "{$numero}! = ";

        for ($i = 2; $i <= $numero; $i++) {
            $factorial *= $i;
            $calculo .= "{$i}";
            if ($i != $numero) {
                $calculo .= " x ";
            }
        }

        echo "5! = {$factorial}\n";
        return $calculo;
    }
}

$resultado = operacionfactorial($numero);
echo $resultado . "\n";
?>
