<?php

namespace app\controllers;

use app\database\builder\InsertQuery;

class ControllerUsuario extends Base
{
    public function insert($request, $response)
    {
        try {
            ;            #Recupera os dados do nome e converte para uma string.
            $form = $request->getParsedBody();
            $email = filter_var($form['email'], FILTER_UNSAFE_RAW);
            $senha = filter_var($form['senha'], FILTER_UNSAFE_RAW);
            $nome = filter_var($form['nome'], FILTER_UNSAFE_RAW);
            $login = filter_var($form['login'], FILTER_UNSAFE_RAW);
            $ativo = filter_var($form['ativo'], FILTER_UNSAFE_RAW);
           
           
           
            $IsSave = InsertQuery::table('usuario')
            ->save([
                
                'email'     =>   $email,
                'senha'     =>   $senha,
                'nome'      =>   $nome,
                'login'  =>   $login,
                'ativo'     =>   $ativo
                
            ]);
            
            
            
            if ($IsSave != true) {
                $data = [
                    'status' => false,
                    'msg' => 'Restrição: ' . $IsSave,
                    'id' => 0
                ];
                $json = json_encode($data, JSON_UNESCAPED_UNICODE);
                $response->getBody()
                    ->write($json);
                return $response->withStatus(403)
                    ->withHeader('Content-type', 'application/json');
                
            }
            $data = [
                'status' => true,
                'msg' => 'Registro salvo com sucesso!',
                'id' => 0
            ];
            $json = json_encode($data, JSON_UNESCAPED_UNICODE);
            $response->getBody()
                ->write($json);
            return $response
                ->withStatus(201)
                ->withHeader('Content-type', 'application/json');
            
        } catch (\Exception $e) {
            
            return $response->withStatus(403)
                ->withHeader('Content-type', 'application/json');
        }
    }
}