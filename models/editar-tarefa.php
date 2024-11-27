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
<body>
    <div class="container">
        <h1>Editar Dados da tarefa</h1>

        <form action="update-tarefa.php" method="post">
        <input type="hidden" name="idtarefa" value="<?php echo $row['idtarefa']; ?>">
            <div class="form-group">
                <label for="descricao">Descrição</label>
                <input type="text" class="form-control"name="descricao" value="<?php echo $row['descricao']; ?>" id="descricao" placeholder="Digite uma nova Descrição" required>
            </div>
            <div class="form-group">
                <label for="setor">Setor</label>
                <input type="text" class="form-control"name="setor" value="<?php echo $row['setor']; ?>" id="setor" placeholder="Digite o novo Setor" required>
            </div>
            <div class="form-group">
                <label for="prioridade">Prioridade</label>
                <input type="text" class="form-control"name="prioridade" value="<?php echo $row['prioridade']; ?>" id="prioridade" placeholder="Digite a nova Prioridade" required>
            </div>
            <div class="form-group">
                <label for="data_cadastro">Data do Cadastro</label>
                <input type="text" class="form-control"name="data_cadastro" value="<?php echo $row['data_cadastro']; ?>" id="data_cadastro" placeholder="Digite a nova Data" required>
            </div>
            <div class="form-group">
                <label for="status_tarefa">Status da Tarefa</label>
                <input type="text" class="form-control"name="status_tarefa" value="<?php echo $row['status_tarefa']; ?>" id="status_tarefa" placeholder="Digite o novo Status da Tarefa" required>
            </div>
            <div class="form-group">
                <label for="idusuario">ID Usuário</label>
                <input type="text" class="form-control"name="idusuario" value="<?php echo $row['idusuario']; ?>" id="idusuario" placeholder="Digite o novo ID do Usuário" required>
            </div>
        
            <button type="submit">Salvar Alterações</button>
            <br>
        </form>
        <a href="index.php">
            <button type="submit" class="btn btn-submit">Pagina Inicial</button>
            </a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"></script>
</body>
</html>