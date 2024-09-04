<?php

namespace app\database;

use PDO;

class Connection
{
    private static $pdo = null;
    public static function open(): PDO
    {
        try {
            #verifica se existe a conexão e retorna se sim
            if (static::$pdo) {
                return static::$pdo;
            }
            #define opções de conexão
            $options = [
                #configura modo de tratamento de erros
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                #modo de busca de dados (associativo)
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                #desativa emulação de prepared statements
                PDO::ATTR_EMULATE_PREPARES => false,
                #desativar conexão persistente (otimização de memória)
                PDO::ATTR_PERSISTENT => true,
                #retorna strings como strings
                PDO::ATTR_STRINGIFY_FETCHES => true,
            ];
            //permite captura e o salvamento de caracteres especiais 
            static::$pdo = new PDO('pgsql:host=localhost;port=5432;dbname=velidata', 'veli5', 'green9', $options);
            static::$pdo->exec("SET NAMES 'utf8'");
            return static::$pdo;
        } catch (\PDOException $e) {
            var_dump($e->getMessage());
            //lança exceção ou mensagem de erro
            throw new \PDOException("ERRO ERRO ERRO ERRO ERRO ERRO ERRO" . $e->getMessage());
        }
    }
}
