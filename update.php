<?php
    include("core/conexao.php");

    $conn = conexao();
    
    $result = $conn->query("SELECT * FROM usuario WHERE idusuario = {$_GET['idusuario']} ");
           
    $row = mysqli_fetch_assoc($result);

    var_dump($conn);

    /**<?php
    include("core/conexao.php");

    $conn = conexao();

    // Verifique se o ID do usuário está definido na URL
    if (isset($_GET['idusuario'])) {
        $idusuario = $_GET['idusuario'];

        // Prepare a consulta SQL
        $query = "SELECT * FROM usuario WHERE idusuario = ?";
        $stmt = $conn->prepare($query);

        // Verifique se a preparação da consulta foi bem-sucedida
        if (!$stmt) {
            die("Erro na preparação da consulta: " . $conn->error);
        }

        // Vincule o parâmetro à consulta preparada
        $stmt->bind_param("i", $idusuario);

        // Execute a consulta
        $stmt->execute();

        // Obtenha o resultado da consulta
        $result = $stmt->get_result();

        // Verifique se a consulta retornou resultados
        if ($result->num_rows > 0) {
            // Obtenha os dados do usuário
            $row = $result->fetch_assoc();

            // Preencha os campos do formulário com os dados do usuário
            // ...

        } else {
            // Nenhum usuário encontrado com o ID especificado
            echo "Usuário não encontrado";
        }

        // Feche a consulta preparada e a conexão com o banco de dados
        $stmt->close();
        $conn->close();

    } else {
        // ID do usuário não definido na URL
        echo "ID do usuário não encontrado";
    }
    */
