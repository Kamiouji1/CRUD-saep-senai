<?php
require_once("core/conexao.php");
$conn = conexao();

$id = $_GET['id'];

$query = "DELETE FROM usuario WHERE idusuario = ?";

$instrucao = $conn->prepare($query);

$instrucao->bind_param("i", $id);                  

$instrucao->execute();
                               
$instrucao->close();

$conn->close();

header ("location: index.php");