<?php
require_once("core/conexao.php");

$conn = conexao();

$sql = "SELECT * FROM usuario";

$result = $conn->query($sql);
