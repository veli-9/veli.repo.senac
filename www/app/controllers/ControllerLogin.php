<?php

namespace app\controllers;

use app\database\builder\SelectQuery;

class ControllerLogin extends Base
{
    public function autenticacao($request, $response)
    {
        try {

            $form = $request->getParsedBody();
            $usuario = filter_var($form['usuario'], FILTER_UNSAFE_RAW);
            $password = password_hash(filter_var($form['password'], FILTER_UNSAFE_RAW), PASSWORD_DEFAULT);

            $user = SelectQuery::select()
                ->from('usuario')
                ->where('login', '=', $usuario)
                ->fetch();
               
            //checagem do usuario   
            if (!$user) {
                $data = [

                    'status' => false,
                    'msg' => 'Usuário não encontrado!'
                ];

                $json = json_encode($data, JSON_UNESCAPED_UNICODE);
                $response->getBody()
                    ->write($json);
                return $response->withStatus(403)
                    ->withHeader('Content-type', 'application/json');


                //checagem de senha


            }
           
            if (!password_verify($password, $user['senha'])) {
                
                $data = [
                    'status' => false,
                    'msg' => 'Senha incorreta!'
                ];

                $json = json_encode($data, JSON_UNESCAPED_UNICODE);
                $response->getBody()
                    ->write($json);
                return $response->withStatus(403)
                    ->withHeader('Content-type', 'application/json');
            }

            $_SESSION['usuario'] =

                [
                    'logado' => true,
                    'nome' => $usuario
                ];

            $data = [
                'status' => true,
                'msg' => 'Senha incorreta!'
            ];

            $json = json_encode($data, JSON_UNESCAPED_UNICODE);
            $response->getBody()
                ->write($json);
            return $response->withStatus(200)
                ->withHeader('Content-type', 'application/json');
        } catch (\Exception $e) {

            var_dump($e->getMessage());
            throw new \PDOException("grosopis: " . $e->getMessage());
        }
    }

    public function login($request, $response)
    {
        $TempleteData = [
            'titulo' => 'Página de Login'
        ];
        return $this->getTwig()
            ->render($response, $this->setView('autenticacao'), $TempleteData)
            ->withHeader('Content-Type', 'text/html')
            ->withStatus(200);
    }
}
