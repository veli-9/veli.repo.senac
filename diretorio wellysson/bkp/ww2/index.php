<?php

use app\database\builder\InsertQuery;

require __DIR__ . '/../vendor/autoload.php';
$fieldsAndValues = [
    'codigo_banco'  => '3',
    'isbp'          => '3',
    'nome'          => 'sicosb',
    'nome_completo' => 'cooperativa dos banco alguma coisa'
];
InsertQuery::table('bank')->save($fieldsAndValues);
