<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Aluno</title>
</head>

<body>
    <form id = 'aluno1'>
        <h1>Cadastro de Alunos</h1>
        <hr>
        <label for='nome'>Nome</label>
        <br>
        <input type="text" id='nome' name='nome' placeholder="Insira aqui o nome do abestado">
        <br>
        <label for="cpf">CPF</label>
        <br>
        <input type="number" id="cpf" name="cpf" placeholder="Insira aqui o cpf do abestado">
        <br>
        <label for="rg">CPF</label>
        <br>
        <input type="number" id="rg" name="rg" placeholder="Insira aqui o rg do abestado">
        <br>
        <label for="data_nascimento">CPF</label>
        <br>
        <input type="date" id="data_nascimento" name="data_nascimento" placeholder="Insira aqui a data de nascimento do abestado">
        <br>
        <br>

        <button type= "button" id="btnsalvar">SALVAR</button>
    </form>
    <script src ="/js/1cadastro_aluno.js"></script>
</body>



</html>