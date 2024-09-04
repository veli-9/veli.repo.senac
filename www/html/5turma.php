<?php

use app\database\builder\InsertQuery;

require __DIR__ . '/../vendor/autoload.php';

$quantidade = ($_POST['quantidade']);
$data_inicio = ($_POST['data_inicio']);
$data_fim = ($_POST['data_fim']);


$fieldsAndValues = [
    'quantidade'      => $quantidade,
    'data_inicio'       => $data_inicio,
    'data_fim'        => $data_fim,

];
InsertQuery::table('turma')->save($fieldsAndValues);