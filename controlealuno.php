<?php
#Aguardamos 2 seg.
sleep(2);
#Define o cabeçalho para JSON, será o tipo de resposta
header('Content-Type: application/json');
$FieldsAndValues = [
    'nome' => 'WILTON WILL DE PAULO',
    'cpf' => '123.123.123-12'
];
$IsUpdate = true;/*UpdateQuery::table('aluno')
    ->set($FieldsAndValues)
    ->where('id', '=', 1)
    ->update();*/
$response = [];
if ($IsUpdate !== true) {
    #Cria um array associativo para retornar como JSON
    $response = [
        'status' => false,
        'msg' => 'Eu não quero cadastrar nada to com preguiça',
        'id' => 0
    ];
    #Converte o array em JSON e envia a resposta
    echo json_encode($response);
    die;
}
#Cria um array associativo para retornar como JSON
$response = [
    'status' => True,
    'msg' => 'E doido tu é o bichão mesmo em!',
    'id' => 1
];
#Converte o array em JSON e envia a resposta
echo json_encode($response);
