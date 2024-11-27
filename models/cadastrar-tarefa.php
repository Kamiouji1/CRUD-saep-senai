<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Cadastro de Tarefa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .btn-submit {
            background-color: #007bff;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Cadastro de Tarefa</h1>
        <?php
        
        ?>
        <form action="insert-tarefa.php" method="POST">
            <div class="form-group">
                <label for="descricao">Descrição</label>
                <input type="text" class="form-control"name="descricao" id="descricao" placeholder="Digite a Descrição" required>
            </div>
            <div class="form-group">
                <label for="setor">Nome do Setor</label>
                <input type="setor" class="form-control"name="setor" id="setor" placeholder="Digite o nome do Setor" required>
            </div>

            <div class="form-group">
                <label for="prioridade">Prioridade</label>
                <input type="prioridade" class="form-control"name="prioridade" id="prioridade" placeholder="Digite a Prioridade" required>
            </div>

            <div class="form-group">
                <label for="data">Data de Cadastro</label>
                <input type="data_cadastro" class="form-control"name="data_cadastro" id="data_cadastro" placeholder="Digite a Data do Cadastro" required>
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <input type="status_tarefa" class="form-control"name="status_tarefa" id="status_tarefa" placeholder="Digite o Status da Tarefa" required>
            </div>

            <div class="form-group">
                <label for="status">ID Usuário</label>
                <input type="idusuario" class="form-control"name="idusuario" id="idusuario" placeholder="Digite o ID do usuário" required>
            </div>
            
            <button type="submit" class="btn btn-submit">Cadastrar</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"></script>
</body>
</html>
