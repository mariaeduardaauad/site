<?php

$id = $_GET["id"];
$nome = $_POST['nome'];
$foto= $_POST['foto'];
$descricao = $_POST["descricao"];

include "conexao.php";

$pasta = "img/";
$nomeFotoAntigo = $_FILES["foto"]["name"];
$partes = explode(".",$nomeFotoAntigo);
$fotoNovo =  $pasta . round(microtime(true)) . ".". end($partes);

move_uploaded_file($_FILES["foto"]["tmp_name"], $fotoNovo);


$sql_editar_pet = "UPDATE pet set Nome = '$nome', Foto = '$fotoNovo', Descricao = '$descricao' where id = '$id'";

$um_pet =  mysqli_query($conexao, $sql_editar_pet);

mysqli_close($conexao);

header("location:animais.php?msg=sucesso"); 





?>