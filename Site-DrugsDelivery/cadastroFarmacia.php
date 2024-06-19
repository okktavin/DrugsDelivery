<?php
$servername = "localhost";
$username = "seu_usuario";
$password = "sua_senha";
$dbname = "DrugsStore";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $medicamentos = $_POST["CEP"];

    $sql = "INSERT INTO FARM (nome, CEP) VALUES (?, ?)";

    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        die("Erro ao preparar a instrução: " . $conn->error);
    }

    $stmt->bind_param("ss", $nome, $CEP);

    if ($stmt->execute() === true) {
        echo "Farmácia cadastrada com sucesso!";
    } else {
        echo "Erro ao cadastrar a farmácia: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
