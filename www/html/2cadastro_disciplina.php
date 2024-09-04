<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de disciplina</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
</head>

<body>
    <form id='form_disciplina'>
        <h1>Cadastro de Disciplina</h1>
        <div class="row">
            <div class="col-12">
                <div class="alert alert-warning" role="alert">
                    * SE DIGITAR INFORMAÇÕES FALSAS VOCÊ VAI PRESO NOS TERMOS DA LEI 666/1966
                </div>
            </div>
        </div>
        <hr>
        <div class="form-floating mb-3">
            <label for='nome'>Nome</label>
            <br>
            <input type="text" id='nome' class="form-control" name='nome' placeholder="Insira aqui o nome da disciplina">
        </div>
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
    <script src="/js/bootstrap.js"></script>

</body>

</html>