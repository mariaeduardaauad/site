<?php
$nome = $_POST["nome"];
$descricao = $_POST["descricao"];

include "conexao.php";

$pasta = "img/";
$nomeFotoAntigo = $_FILES["foto"]["name"];
$partes = explode(".",$nomeFotoAntigo);
$fotoNovo =  $pasta . round(microtime(true)) . ".". end($partes);

move_uploaded_file($_FILES["foto"]["tmp_name"], $fotoNovo);

$sql_buscar = "insert into pet(Nome, Foto, Descricao) values ('$nome', '$fotoNovo', '$descricao')";

$todos_pet = mysqli_query($conexao, $sql_buscar);

mysqli_close($conexao);
?>