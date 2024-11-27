<?php
require_once 'C:/xampp/htdocs/crud-saep/core/conexao.php';

$conn = conexao();

$sql = "SELECT * FROM tarefa";

$result = $conn->query($sql);