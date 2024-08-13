<?php

use app\database\builder\InsertQuery;

require __DIR__ . '/../vendor/autoload.php';
$fieldsAndValues = [
    'nome'              => 'Neemias Palantiriano',
    'cpf'               => '241.740.028.01',
    'rg'                => '198716',
    'data_nascimento'   => '1955-12-12'
];
InsertQuery::table('professor')->save($fieldsAndValues);

echo "Dados inseridos com sucesso";