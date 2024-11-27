<?php
require_once("core/conexao.php");
$conn = conexao();

$id = $_GET['id']; 

$sql = "SELECT * FROM usuario WHERE idusuario = {$id}";

$result = $conn->query($sql);

var_dump($result);

/* 
require_once("core/conexao.php");
$conn = conexao();

// Verifique se o ID do usuário está definido na URL
if (isset($_GET['id'])) {
    $id = $_GET['id']; 

    // Prepare a consulta SQL
    $sql = "SELECT * FROM usuario WHERE idusuario = ?";
    $stmt = $conn->prepare($sql);

    // Verifique se a preparação da consulta foi bem-sucedida
    if (!$stmt) {
        die("Erro na preparação da consulta: " . $conn->error);
    }

    // Vincule o parâmetro à consulta preparada
    $stmt->bind_param("i", $id);

    // Execute a consulta
    $stmt->execute();

    // Obtenha o resultado da consulta
    $result = $stmt->get_result();

    // Verifique se a consulta retornou resultados
    if ($result->num_rows > 0) {
        // Obtenha os dados do usuário
        $row = $result->fetch_assoc();
        // ...
    } else {
        // Nenhum usuário encontrado com o ID especificado
        echo "Usuário não encontrado";
    }

    // Feche a consulta preparada e a conexão com o banco de dados
    $stmt->close();
    $conn->close();
}
*/