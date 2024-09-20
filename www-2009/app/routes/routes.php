<?php

use app\controllers\ControllerAluno;
use app\controllers\ControllerCliente;
use app\controllers\ControllerDisciplina;
use app\controllers\ControllerHome;
use app\controllers\ControllerLogin;

use Slim\Routing\RouteCollectorProxy;

$app->get('/', ControllerHome::class . ':home');
$app->get('/login', ControllerLogin::class . ':login');

$app->group('/cliente', function (RouteCollectorProxy $group) {
    $group->get('/cadastro', ControllerCliente::class . ':cadastro');
});
$app->group('/aluno', function (RouteCollectorProxy $group) {
    $group->get('/lista', ControllerAluno::class . ':lista');
});
$app->group('/disciplina', function (RouteCollectorProxy $group) {
    $group->get('/lista', ControllerDisciplina::class . ':lista');
    $group->get('/cadastro', ControllerDisciplina::class . ':cadastro');
    $group->get('/alterar/{id}', ControllerDisciplina::class . ':alterar');
    $group->post('/delete', ControllerDisciplina::class . ':delete');
});
