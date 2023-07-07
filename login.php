<?php
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];


include "conexao.php";

$sql_buscar_usuario = "select * from usuarioadm where usuario = '$usuario' and senha = '$senha'";

$um_usuario = mysqli_query($conexao, $sql_buscar_usuario);


if($um_usuario->num_rows > 0){
    header("location:administracao.php");                                   
}

else{
    header("location:index.php?msg=erro");
}

mysqli_close($conexao);

?>
