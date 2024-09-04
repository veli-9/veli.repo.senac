<?php

namespace app\database\builder;

use app\database\Connection;

class UpdateQuery
{
    #cria os métodos table, fields and values, where e binds, que recebem por padrão um valor nulo.
    private string $table;
    private array $fieldsAndValues = [];
    private array $where = [];
    private array $binds = [];


    #cria a função execute query, que recebe o parâmetro $query.
    #faz a conexão com o banco de dados utilizando método open.
    #prepara a query, 
    #executa a query preparada,  
    public function executeQuery($query)
    {
        $connection = Connection::open();
        $prepare = $connection->prepare($query);

        return $prepare->execute($this->binds ?? []);
    }

    #cria a função where, que recebe parâmetros de campo, oeprador, valor e de lógica
    #placeholder passam os valores na query, subtraindo pontos eventualmente contidos e acrescentando apenas o que estiverem após o ponto

    public function where(string $field, string $operator, string|int $value, ?string $logic = null): self
    {
        $placeHolder = '';
        $placeHolder = $field;
        if (str_contains($placeHolder, '.')) {
            $placeHolder = substr($field, strpos($field, '.') + 1);
        }
        #this recebe os parâmetros do array where
        $this->where[] = "{$field} {$operator} :{$placeHolder} {$logic}";
        $this->binds[$placeHolder] = $value;
        return $this;
    }

    #
    #

    private function createQuery()
    {
        if (!$this->table) {
            throw new \Exception("A consulta precisa sumonar o método table.");
        }
        if (!$this->fieldsAndValues) {
            throw new \Exception("A consulta precisa dos dados para realizar a atualização.");
        }
        $query = '';
        $query = "update {$this->table} set ";
        foreach ($this->fieldsAndValues as $field => $value) {
            $query .= "{$field} = :{$field},";
            $this->binds[$field] = $value;
        }
        $query = rtrim($query, ',');
        $query .= (isset($this->where) and (count($this->where) > 0)) ? ' where ' . implode(' ', $this->where) : '';
        return $query;
    }






    public function update(): bool
    {
        $query = $this->createQuery();
        try {
            return $this->executeQuery($query);
        } catch (\PDOException $e) {
            throw new \Exception("Restrição: {$e->getMessage()}");
        }
    }






    public static function table(string $table)
    {
        $self = new self;
        $self->table = $table;
        return $self;
    }






    public function set(array $fieldsAndValues)
    {
        $this->fieldsAndValues = $fieldsAndValues;
        return $this;
    }
}
