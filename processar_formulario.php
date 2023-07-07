<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$celular = $_POST['celular'];
$endereco = $_POST['endereco'];
$cidade = $_POST['cidade'];
$cep = $_POST['cep'];
$genero =  $_POST['gender'];


$servidor_bd = "127.0.0.1";
$usuario_bd = "root";
$senha_bd = "";
$banco_de_dados = "banco_cadastro";

$conexao = mysqli_connect($servidor_bd, $usuario_bd, $senha_bd, $banco_de_dados);

$sql_inserir_usuario = "insert into usuario(Nome, Email, Celular, Endereco, Cidade, CEP, Genero) values ('$nome', '$email', '$celular', '$endereco', '$cidade', '$cep', '$genero')";

$um_usuario = mysqli_query($conexao, $sql_inserir_usuario);

mysqli_close($conexao);