<?php
echo "CALCULADORA" . "<br>" . "<br>";
#Digite na variável abaixo o primeiro valor:    
$valor1 = 10;
#Digite na variável abaixo o segundo valor:
$valor2 = 2;
#Digite na variável abaixo o símbolo da operação a ser realizada (+, -, *, /):
$operador = "-";

switch ($operador) {
    case "+":
        $resultado = $valor1 + $valor2;
        break;
        
     case "-":
        $resultado = $valor1 - $valor2;
        break;    
        
     case "*":
        $resultado = $valor1 * $valor2;
        break;
        
     case "/":
        $resultado = $valor1 / $valor2;
        break;    
}
echo $valor1;
echo $operador;
echo $valor2;
echo " = $resultado";