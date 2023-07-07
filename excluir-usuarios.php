<?php

$id = $_GET["id"];

include "conexao.php";

$sql_excluir_jogo = "delete from usuario where id = $id";

$usuario_excluido = mysqli_query($conexao, $sql_excluir_jogo);

mysqli_close($conexao);
?>