<?php
    include("../core/conexao.php");

    $conn = conexao();
    
    $result = $conn->query("SELECT * FROM tarefa WHERE idtarefa = {$_GET['idtarefa']} ");
           
    $row = mysqli_fetch_assoc($result);
