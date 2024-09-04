<?php

use app\database\builder\UpdateQuery;


require __DIR__ . '/../vendor/autoload.php';


$fieldsAndValues = [
    'nome'      => 'Carlos Massas',
    'cnpj'       => '988954985894589',
    'inscricao_estadual'       => '87127878217821781278',
    'data_inscricao'       => '2000-04-09',

];

$IsUpdate = UpdateQuery::table('empresa')
    ->set($fieldsAndValues)
    ->where('id', '=', 9)
    ->update();


var_dump($IsUpdate);
