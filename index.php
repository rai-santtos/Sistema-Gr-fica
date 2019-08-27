<!DOCTYPE HTML>
<html lang="pt-br">

<head>

<meta charset="UTF-8"/>

<title> Sistema Gráfica </title>

<body style ="background-image: url('telahome.jpg');background-size: 100%;">
<style>
h1{
    font-family:Futura Md BT;
    font-size: 30pt;
    color: white;
    text-shadow: 1px 1px 1px cyan;
}
</style>
<style type="text/css">
.menu ul li{
    background-color:aqua;
    float:left;
    width: 180px;
    height: 40px;
    font-size: 25px;
    font-family:Cocogoose;
    display: inline-block;
    text-align: center;
    line-height: 40px;
    border-radius: 2px;
    color: rgb(0, 26, 73);
}
.menu ul ul li{
    background-color: aqua;
    float:left;
    width: 200px;
    height: 50px;
    font-size: 20px;
    font-family:arial black;
    display: inline-block;
    text-align: center;
    line-height: 50px;
    border-radius: 5px;
   
   
  
 
}
.menu ul li :hover{
    background-color: rgb(50, 100, 255);
    border-radius: 5px;
    transition:1s;
    
}

.menu ul{
    padding: 0;
    
}
.menu ul ul{
    display:none;
    
}
.menu ul li:hover > ul{
    display: block;

   
} 

.menu ul ul ul {
    margin-left: 201px;

}




 </style>

</head>
</body> 

<h1>Sistema Gráfica</h1>

<nav class="menu">

    <ul>
        <li>  Cliente<ul>
            <li><a href="http://localhost/grafica/cadastro_cliente.php">Cadastrar</a></li> 
            <li>Pesquisar</li>
                </ul>
    </li>

    <li>
        Fornecedor<ul>
         <li>Cadastrar</li>
        <li>Pesquisar</li>
       
        </ul>
    </li>
    <li>Venda
            <ul>
                    <li>Nova Venda</li>
                    <li>Pesquisar</li>
                    <li>Histórico</li>
                    <li>Pedidos</li>
                    <li>Caixa</li>
                   

                </ul>
    </li>
    <li>Serviços
         <ul>
            <li>Cadastrar</li>
            <li>Pesquisar</li>
            <li>Listar</li>
          
       
             </ul>
    </li>
    <li>Estoque
            <ul>
                    <li>Consultar</li>
                    <li>Cadastrar</li>
                    <li>Repor Estoque</li>
                </ul>
    </li>
        </ul>
    </nav>


</body>
</html>