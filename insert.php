<?php
require_once("core/conexao.php");
$conn = conexao();

$nome = $_POST['nome'];
$email = $_POST['email'];

$query = "INSERT INTO usuario(nome, email) VALUES (?,?)";

$instrucao = $conn->prepare($query);

$instrucao->bind_param("ss", $nome, $email);   

if ($instrucao->execute()) {
    $instrucao->close();
    $conn->close();
    header ("location: index.php");

} else {
    
    echo "Erro ao cadastrar usuário: " . $conn->error;
}