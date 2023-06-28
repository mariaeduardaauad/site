<?php
// Recuperar os dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$celular = $_POST['celular'];
$endereco = $_POST['endereco'];
$cidade = $_POST['cidade'];
$cep = $_POST['cep'];
$genero =  $_POST['genero'];


// Conectar ao banco de dados MySQL
$servername = "localhost";
$username = "root";
$password = ""; // Coloque a senha do seu servidor MySQL, se houver

$conn = new mysqli($servername, $username, $password);

// Verificar a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Selecionar o banco de dados
$dbname = "dados_formulario";
$conn->select_db($dbname);

// Inserir os dados no banco de dados
$sql = "INSERT INTO dados_formulario (nome, email, celular, endereco, cidade, cep, genero) 
VALUES ('$nome', '$email', '$celular', '$endereco', '$cidade', '$cep', '$genero' )";

if ($conn->query($sql) === TRUE) {
    echo "Dados inseridos com sucesso!";
} else {
    echo "Erro ao inserir dados: " . $conn->error;
}

// Fechar a conexão com o banco de dados
$conn->close();
?>