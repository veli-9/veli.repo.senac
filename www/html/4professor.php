<?php

use app\database\builder\InsertQuery;
require __DIR__ . '/../vendor/autoload.php';

$nome = ($_POST['nome']);
$cpf = ($_POST['cpf']);
$rg = ($_POST['rg']);
$data_nascimento = ($_POST['data_nascimento']);

$fieldsAndValues = [
    'nome'              => $nome,
    'cpf'               => $cpf,
    'rg'                => $rg,
    'data_nascimento'   => $data_nascimento
];
InsertQuery::table('professor')->save($fieldsAndValues);

echo "Dados inseridos com sucesso";