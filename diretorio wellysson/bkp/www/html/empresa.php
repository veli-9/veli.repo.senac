<?php

use app\database\builder\InsertQuery;

require __DIR__ . '/../vendor/autoload.php';
$fieldsAndValues = [
    'nome'                  => 'Guria Bolos',
    'cnpj'                  => '47.125.114/0001-44',
    'inscricao_estadual'    => '147.285.117.118',
    'data_inscricao'        => '2001-09-30'
];
InsertQuery::table('empresa')->save($fieldsAndValues);

echo "Dados inseridos com sucesso";