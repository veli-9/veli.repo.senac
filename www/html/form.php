<?
$id = '';
$acao = '';

if (isset($_GET['id']) and !empty($_GET['id'])) {
    $id = $_GET['id'];
    $acao = 'e';
} else {
    $id = '';
    $acao = 'c';
}
?>




<!DOCTYPE html>
<html lang="pt=BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form id="form">
        <input type="text" name="id" id="id" value="<?php echo $id?>">
        <input type="text" name="acao" id="acao"?>
</html>