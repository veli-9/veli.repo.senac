<?
$id = '';
$acao = '';

if (isset($_GET['id']) and !empty($_GET['id'])) {
    $id = $_GET['id'];
    $acao = 'e';
} else {
    $id = '';
    $acao = 'c';
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Alunos</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/all.min.css">
</head>

<body>
    <div class="container">
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
                        <h2 class="card-title">Listagem de Alunos</h2>
                        <br>
                        <a href="1cadastro_aluno.php" class="btn btn-outline-success"> <i class="fas fa-user-plus"></i> Cadastro</a>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Nome</th>
                            <th>CPF</th>
                            <th>Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Godofredo Rosvaldo</td>
                            <td>893.525.225.17</td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-outline-warning">
                                        <i class="fas fa-edit"></i>
                                        Editar</button>
                                    <button type="button" class="btn btn-outline-danger">
                                        <i class="fas fa-trash"></i>
                                        Excluir</button>
                                </div>

                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="/html/js/1cadastro_aluno.js"> </script>
    <script src="/js/all.min.js"> </script>
    <script src="/html/js/bootstrap.js"> </script>
</body>

</html>