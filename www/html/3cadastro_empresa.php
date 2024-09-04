<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Empresas</title>
</head>

<body>
    <form id = 'form_empresa'>
        <h1>Cadastro de Empresas</h1>
        <hr>
        <label for='nome'>Nome</label>
        <br>
        <input type="text" id='nome' name='nome' placeholder="Insira o nome da empresa">
        <br>
        <label for="cnpj">CNPJ</label>
        <br>
        <input type="number" id="cnpj" name="cnpj" placeholder="Insira o CNPJ">
        <br>
        <label for="inscricao_estadual"></label>
        <br>
        <input type="number" id="inscricao_estadual" name="inscricao_estadual" placeholder="Insira aqui a inscrição estadual">
        <br>
        <label for="data_inscricao">CPF</label>
        <br>
        <input type="date" id="data_inscricao" name="data_inscricao">
        <br>
        <br>

        <button type= "button" id="btnsalvar">SALVAR</button>
    </form>
    <script src ="/js/3cadastro_empresa.js"></script>
</body>



</html>