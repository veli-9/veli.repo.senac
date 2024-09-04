<?php

use app\database\builder\UpdateQuery;


require __DIR__ . '/../vendor/autoload.php';


$fieldsAndValues = [
    'nome'      => 'Salvio Sintos',
    'cpf'       => '9238438',
    'rg'        => '9393010',
    'data_nascimento' => '1999-01-04'

];

$IsUpdate = UpdateQuery::table('professor')
    ->set($fieldsAndValues)
    ->where('id', '=', 8)
    ->update();


var_dump($IsUpdate);
