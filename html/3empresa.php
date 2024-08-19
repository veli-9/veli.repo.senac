<?php

use app\database\builder\InsertQuery;

require __DIR__ . '/../vendor/autoload.php';

$nome = ($_POST['nome']);
$cnpj = ($_POST['cnpj']);
$inscricao_estadual = ($_POST['inscricao_estadual']);
$data_inscricao = ($_POST['data_inscricao']);


$fieldsAndValues = [
    'nome'                  => $nome,
    'cnpj'                  => $cnpj,
    'inscricao_estadual'    => $inscricao_estadual,
    'data_inscricao'        => $data_inscricao
];
InsertQuery::table('empresa')->save($fieldsAndValues);

echo "Dados inseridos com sucesso";