<?php

header('Content-Type: application/json');

use app\database\builder\UpdateQuery;


require __DIR__ . '/../vendor/autoload.php';


$fieldsAndValues = [
    'nome'      => 'Hulciano Luck',
    'cpf'       => '9238438',
    'rg'        => '9393010',
    'data_nascimento' => '1999-01-04'
];

$IsUpdate = UpdateQuery::table('aluno')
    ->set($fieldsAndValues)
    ->where('id', '=', 117)
    ->update();



if ($IsUpdate == true)

    $data = [
        'status' => 'true',
        'msg' => 'Dados alterados com sucesso!',
        'id' => 18
    ];
else echo 'Dados não alterados';

echo json_encode($data);