<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Aluno</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/all.min.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="home.php">APRENDE BAIXO LTDA</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Cadastros
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="1cadastro_aluno.php">Aluno</a></li>
                                        <li><a class="dropdown-item" href="2cadastro_disciplina.php">Disciplina</a></li>
                                        <li><a class="dropdown-item" href="3cadastro_empresa.php">Empresa</a></li>
                                        <li><a class="dropdown-item" href="4cadastro_professor.php">Professor</a></li>
                                        <li><a class="dropdown-item" href="5cadastro_turma.php">Turma</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                                </li>
                            </ul>
                            <form class="d-flex" role="search">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">Início</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Lista de Aluno</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="card-body">
                        <h2 class="card-title">Cadastro de Alunos</h2>
                    </div>
                </div>
                <div class="alert alert-warning" role="alert">
                    *SE DIGITAR INFORMAÇÕES FALSAS VOCÊ VAI PRESO NOS TERMOS DA LEI 666/1666
                </div>
            </div>
        </div>

        <form id="form_aluno">
        <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
        <input type="hidden" name="acao" id="acao" value="<?php echo $acao; ?>">
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
            <div class="btn-group" role="group">
                <a href="1listaaluno.php" class="btn btn-outline-warning"><i class="fas fa-arrow-left"></i> Voltar</a>
                <button type="button" id="btnsalvar" class="btn btn-outline-success"><i class="far fa-save"></i>Salvar</button>
            </div>
        </form>
    </div>
    <script src="/js/1cadastro_aluno.js"></script>
    <script src="/js/all.min.js"></script>
    <script src="/js/bootstrap.js"></script>
</body>

</html>