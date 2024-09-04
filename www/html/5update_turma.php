<?php
header('Content-Type: application/json');

use app\database\builder\UpdateQuery;


require __DIR__ . '/../vendor/autoload.php';


$fieldsAndValues = [
    'quantidade'      => '604',
    'data_inicio'       => '2023-04-03',
    'data_fim'        => '2023-06-30'

];

$IsUpdate = UpdateQuery::table('turma')
    ->set($fieldsAndValues)
    ->where('id', '=', 18)
    ->update();

if ($IsUpdate == true)

    $data = [
        'status' => 'true',
        'msg' => 'Dados alterados com sucesso!',
        'id' => 18
    ];
else echo 'Dados não alterados';

var_dump($IsUpdate);

echo json_encode($data);
