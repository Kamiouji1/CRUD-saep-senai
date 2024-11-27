<?php
require_once("../core/conexao.php");
$conn = conexao();

$descricao = $_POST['descricao'];
$setor = $_POST['setor'];
$prioridade = $_POST['prioridade'];
$data = $_POST['data_cadastro'];
$status = $_POST['status_tarefa'];
$idusuario = $_POST['idusuario'];


$query = "INSERT INTO tarefa(descricao, setor, prioridade, data_cadastro, status_tarefa, idusuario ) VALUES (?,?,?,?,?,?)";

$instrucao = $conn->prepare($query);

$instrucao->bind_param("sssssi", $descricao, $setor, $prioridade, $data, $status, $idusuario); //o "s" é o tipo de dado, string e o "i" é o tipo de dado, inteiro

if ($instrucao->execute()) {
    $instrucao->close();
    $conn->close();
    header ("location: ../index.php");

} else {
    
    echo "Erro ao cadastrar tarefa: " . $conn->error;
}