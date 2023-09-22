<?php
$Numero1 = readline("Primer Numero: ");
$Numero2 = readline("Segundo número: ");

$num1 = intval($Numero1);
$num2 = intval($Numero2);

$resultado = $num1 / $num2;
$residuo = $num1 % $num2;
echo "Resultado = {$resultado}\n";
echo "Residuo = {$residuo}\n";
if($residuo == 0) {
    echo "El número {$num1} si es divisible entre el número {$num2}";
} else {
    echo "El número {$num1} no es divisible entre el número {$num2}";
}
?>