<?php
//declara o namespace com o local do arquivo
namespace app\database\builder;
//faz uso do namespace Connection
use app\database\Connection;
//cria a classe InsertQuery
class InsertQuery
{
    //declara a variável estática table, com propriedade privada 
    private static $table;
    //cria a função table  com propriedades estáticas e públicas
    public static function table(string $tableName = '')
    {//cria a variável $classe_atual e transfere o conteúdo de toda classe para dentro dessa variável
        $classe_atual = new self;
        //classe atual recebe os métodos da função table e trasnfere os valores para a variável $tableName
        $classe_atual->table = $tableName;
        // retorna os valores da classe atual 
        return $classe_atual;
    }
    public function save(array $valores = []):bool
    {   //a função implode junta elementos de um array em uma string;
        $campos = implode(',', array_keys($valores));
        $parametros = ':' . implode(',:', array_keys($valores));
        $sql = "insert into {$this->table} ($campos) values ($parametros)";
        $con = Connection::open();
        $prepare = $con->prepare($sql);

        return $prepare->execute($valores);
    }
};