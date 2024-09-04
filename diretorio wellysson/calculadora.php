<?php
$valor1 = floatval($_POST['valor1']);
$valor2 = floatval($_POST['valor2']);
$operador = strval($_POST['operador']);
$resultado = 0.00;

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

};
$resposta = array('resultado' => $resultado);


echo json_encode($resposta);