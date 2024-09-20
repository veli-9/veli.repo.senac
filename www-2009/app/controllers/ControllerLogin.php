<?php

namespace app\controllers;

use app\database\builder\SelectQuery;

class ControllerLogin extends Base
{
    public function login($request, $response)
    {
        $TempleteData = [
            'nome' => $_SESSION['nome'],
            'idade' => $_SESSION['idade'],
        ];
        return $this->getTwig()
            ->render($response, $this->setView('login'), $TempleteData)
            ->withHeader('Content-Type', 'text/html')
            ->withStatus(200);
    }
}

/*

$login = $_POST['login'];
$senha = $_POST['senha';


SelectQuery::table('usuario')

;