<?php
$dsn = 'pgsql:host=localhost;port=5432;dbname=velidata';
$usuario = 'veli5';
$senha = 'green9';

try {
    $pdo = new PDO ($dsn, $usuario, $senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
    $IsSave = $pdo->exec ("insert into bank (codigo_banco,isbp,nome,nome_completo) values ('56','3899','GIBANK','Banco do GIBIMBIL')");
    var_dump($IsSave);

echo "Conexão bem sucedida!";

} catch (PDOException $e) {
    echo "Erro de conexão com o banco de dados: ". $e->getMessage();
  
}?>
