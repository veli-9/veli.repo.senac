<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Aluno</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
</head>

<body>
    <H1>CADASTRO DOS ALUNO</H1>
    <div class="row">
        <div class="col-12">
            <div class="alert alert-warning" role="alert">
                * SE DIGITAR INFORMAÇÕES FALSAS VOCÊ VAI PRESO NOS TERMOS DA LEI 123456123/1999
            </div>



        </div>


    </div>


    </div>

    <form id='aluno1'>
    <hr>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome">
            <label for="nome">Nome</label>
        </div>
        <br>
        <div class="form-floating mb-3">
            <input type="number" class="form-control" id="cpf" name="cpf" placeholder="Digite seu CPF">
            <label for="cpf">CPF</label>
        </div>
        <br>
        <div class="form-floating mb-3">
            <input type="number" class="form-control" id="rg" name="rg" placeholder="Digite seu RG">
            <label for="rg">RG</label>
        </div>
        <br>
        <div class="form-floating mb-3">
            <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" placeholder="Digite sua data de nascimento">
            <label for="data_nascimento">Data de Nascimento</label>
        </div>
        <br>
        <button type="button" id="btnsalvar" class="btn btn-success">SALVAR</button>



    </form>
    <script src="/js/1cadastro_aluno.js"></script>
    <script src="/js/bootstrap.js"></script>

</body>

</html>