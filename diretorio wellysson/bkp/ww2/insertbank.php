<?php
class Bank
{
    public function insert(
        array $fieldAndValues = [],
        string $table = ''
    ) {

        $values = array_values($fieldAndValues);
        $fields = array_keys($fieldAndValues);
        $stringField = implode(',', $fields);
        $stringValues = implode (',', $values);
        $sql = "insert into {$table} ({$stringField}) values ({$stringValues})";
        var_dump($sql);
    }
}
$Bank = new Bank();
$fieldAndValues = [
    'codigo_banco' => '001',
    'isbp' => '001',
    'nome' => 'BB',
    'nome_completo' => 'Banco do Brasil'
];
$Bank->insert($fieldAndValues, 'bank'); 