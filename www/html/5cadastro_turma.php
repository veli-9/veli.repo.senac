<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Professor</title>
</head>

<body>
    <form id = 'form_turma'>
        <h1>Cadastro de Turma</h1>
        <hr>
        <label for='quantidade'>Quantidade de Alunos</label>
        <br>
        <input type="number" id='quantidade' name='quantidade'>
        <br>
        <label for="data_inicio">Data de Início</label>
        <br>
        <input type="date" id="data_inicio" name="data_inicio">
        <br>
        <label for="data_fim">Data de Fim</label>
        <br>
        <input type="date" id="data_fim" name="data_fim">
        <br>
        <br>

        <button type= "button" id="btnsalvar">SALVAR</button>
    </form>
    <script src ="/js/5cadastro_turma.js"></script>
</body>



</html>