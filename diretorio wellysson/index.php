<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>

<body>
    <h1>Calculadora da BRABA 1.0</h1>
    <form name="form" id="form">
        <label for="valor1">Valor 1</label>
        <br>
        <input type="number" placeholder="Digite aqui o primeiro valor:" id="valor1" name="valor1" /> <br>
        <label for="valor2">Valor 2</label>
        <br>
        <input type="number" placeholder="Digite aqui o segundo valor:" id="Valor 2" name="Valor 2" />
        <br>
        <br>
        <label for="operador">Digite aqui a operação matemática:</label>
        <br>
        <input type="text" placeholder="+, -, *, /" id="operador" name="operador" />
        <br>
        <br>
        <label for="resultado">Resultado</label>
        <br>
        <input type="text" id="resultado" placeholder="Aqui temos o resultado do campo" disabled readonly />
        <br>
        <br>
        <button type="button" id="btncalcular"> Calcular </button>

    </form>
    <script src="/js/index.js"></script>
</body>

</html>