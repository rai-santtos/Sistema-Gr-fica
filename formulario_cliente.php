
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Cliente</title>
</head>
<body style ="background-image: url('cadastro1.jpg');background-size: 100%;">


<?php

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$telefone = $_POST['telefone'];

echo "<h1>$nome</h1>";

echo "<h3> RG: $cpf</h3>";
echo "<h3> CPF: $rg</h3>";
echo "<h3> Telefone: $telefone</h3>";


?>