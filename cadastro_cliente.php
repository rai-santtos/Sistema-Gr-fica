<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Cliente</title>
</head>
<body style ="background-image: url('cadastro1.jpg');background-size: 100%;">
<style>
label{
    font-family:Futura Md BT;
    font-size:20pt;
    color: white;
    float: left;
    text-align:left; 
 
}
input{
    
    border-radius: 5px;
    background-color: white;
    width: 200;
    height: 10px;
    font-size: 10px;
    font-family:Cocogoose Pro SemiLight;
    text-align: center;
    line-height: 50px;
    margin-top: 5px;

  
}

h1{
    font-family:Futura Md BT;
    font-size: 30pt;
    color: white;
    text-shadow: 1px 1px 1px cyan;
}
</style>
<body>
<h1>Cadastro de Cliente</h1>

<form action="formulario_cliente.php" method="post">

<label for="nome">Nome</label>
<input type="text" name="nome" id="nome"> <br />

<label for="cpf">CPF</label>
<input type="text" name="cpf" id="cpf"><br />

<label for="rg">RG</label>
<input type="text" name="rg" id="rg"><br />

<label for="telefone">Telefone</label>
<input type="text" name="telefone" id="telefone"> <br />

<input type="submit" value="Salvar,">



    
</body>
</html>