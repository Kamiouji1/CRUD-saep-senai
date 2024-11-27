<?php
require_once("../core/conexao.php");
$conn = conexao();

$id = $_GET['id']; 

$sql = "SELECT * FROM tarefa WHERE idtarefa = {$id}";

$result = $conn->query($sql);