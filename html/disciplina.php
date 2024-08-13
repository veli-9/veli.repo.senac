<?php

use app\database\builder\InsertQuery;

require __DIR__ . '/../vendor/autoload.php';
$fieldsAndValues = [
    'nome'                  => 'Matemática',
    'ativo'                 => true
];
InsertQuery::table('disciplina')->save($fieldsAndValues);

echo "Dados inseridos com sucesso";