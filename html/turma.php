<?php

use app\database\builder\InsertQuery;

require __DIR__ . '/../vendor/autoload.php';
$fieldsAndValues = [
    'quantidade'        => '18',
    'data_inicio'               => '2022-01-01',
    'data_fim'                => '2026-01-01',
];
InsertQuery::table('turma')->save($fieldsAndValues);

echo "Dados inseridos com sucesso";