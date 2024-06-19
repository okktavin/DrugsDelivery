<?php

$servername = "localhost";
$username = "seu_usuario";
$password = "sua_senha";
$dbname = "sua_base_de_dados";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}


$nome = $_POST['nome'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$senha = $_POST['senha'];


$sql = "INSERT INTO clientes (nome, email, endereco, telefone, senha) VALUES ('$nome', '$email', '$endereco', '$telefone', '$senha')";

if ($conn->query($sql) === TRUE) {
    echo "Cliente cadastrado com sucesso!";
} else {
    echo "Erro ao cadastrar o cliente: " . $conn->error;
}

$conn->close();
?>