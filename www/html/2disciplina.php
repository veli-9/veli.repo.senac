<?php

use app\database\builder\InsertQuery;

require __DIR__ . '/../vendor/autoload.php';

$nome = ($_POST['nome']);
$ativo = (isset($_POST['ativo']) and !is_null($_POST['ativo'])) ? true : false;

$fieldsAndValues = [
    'nome'                  => $nome,
    'ativo'                 => $ativo
];
InsertQuery::table('disciplina')->save($fieldsAndValues);