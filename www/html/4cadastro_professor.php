<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Professor</title>
</head>

<body>
    <form id = "form_professor">
        <h1>Cadastro de Professor</h1>
        <hr>
        <label for="nome">Nome</label>
        <br>
        <input type="text" id='nome' name='nome' placeholder="Insira aqui o nome do sabichão">
        <br>
        <label for="cpf">CPF</label>
        <br>
        <input type="number" id="cpf" name="cpf" placeholder="Insira aqui o cpf do brabo">
        <br>
        <label for="rg">RG</label>
        <br>
        <input type="number" id="rg" name="rg" placeholder="Insira aqui o rg do doido">
        <br>
        <label for="data_nascimento">data de nascimento</label>
        <br>
        <input type="date" id="data_nascimento" name="data_nascimento" placeholder="Insira aqui a data de nascimento do maluco">
        <br>
        <br>

        <button type= "button" id="btnsalvar">SALVAR</button>
    </form>
    <script src ="/js/4cadastro_professor.js"></script>
</body>



</html>