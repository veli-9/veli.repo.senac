<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de disciplina</title>
</head>

<body>
    <form id='form_disciplina'>
        <h1>Cadastro de Disciplina</h1>
        <hr>
        <label for='nome'>Nome</label>
        <br>
        <input type="text" id='nome' name='nome' placeholder="Insira aqui o nome da disciplina">
        <br>
        <br>
        <label for='ativo'>Aceita os termos?</label>
        <br>
        <input type='checkbox' id='ativo' name='ativo'>
        <br>
        <br>
        <button type="button" id="btnsalvar">SALVAR</button>

    </form>
    <script src="/js/2cadastro_disciplina.js"></script>

</body>

</html>