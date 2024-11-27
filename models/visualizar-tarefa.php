<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarefas</title>
</head>
<style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .table {
            margin-top: 20px;
        }
        table, th, td {
  border: 1px solid white;
  border-collapse: collapse;
}
th, td {
  background-color: #96D4D4;
}
    </style>
<body>
    <div class="container">
    <h1>Tarefas Cadastradas</h1>
    <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Descrição</th>
                    <th>Setor</th>
                    <th>Prioridade</th>
                    <th>Data Cadastro</th>
                    <th>Status</th>
                    <th>ID Usuário</th>
        
                </tr>
            </thead>
            <tbody>
                <?php
                include("select-tarefa.php");
            while($row = mysqli_fetch_assoc($result)){
            ?>
            
            <td><?php echo $row['idtarefa'] ?></td>
            <td><?php echo $row['descricao'] ?></td>
            <td><?php echo $row['setor'] ?></td>
            <td><?php echo $row['prioridade'] ?></td>
            <td><?php echo $row['data_cadastro'] ?></td>
            <td><?php echo $row['status_tarefa'] ?></td>
            <td><?php echo $row['idusuario'] ?></td>

            <?php
            }
            ?>
            </tbody>
            </table>
    </div>
    <br>
    <br>   
    <a href="../index.php">
    <button type="submit" class="btn btn-submit">PAGINA INICIAL</button>
    </a>
</body>
</html>
