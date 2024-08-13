<?php

use app\database\builder\InsertQuery;

require __DIR__ . '/../vendor/autoload.php';
$fieldsAndValues = [
    'nome'      => 'Pilombo dos Qualmares',
    'cpf'       => '208.901.716-41',
    'rg'        => '566158',
    'data_nascimento' => '1994-01-28'
];
InsertQuery::table('aluno')->save($fieldsAndValues);

echo "Dados inseridos com sucesso";