<?php

use app\database\builder\UpdateQuery;


require __DIR__ . '/../vendor/autoload.php';


$fieldsAndValues = [
    'nome'      => 'Educação Física',
    'ativo'       => 'false',
];

$IsUpdate = UpdateQuery::table('disciplina')
    ->set($fieldsAndValues)
    ->where('id', '=', 63)
    ->update();


var_dump($IsUpdate);
