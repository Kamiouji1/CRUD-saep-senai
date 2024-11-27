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
        <h1>Editar Dados do Usuário</h1>
        <form action="update.php" method="post">
        <input type="hidden" name="idusuario" value="<?php echo $row['idusuario']; ?>">
            <div class="form-group">
                <label for="nome">Nome Completo</label>
                <input type="text" class="form-control"name="nome" value="<?php echo $row['nome']; ?>" id="nome" placeholder="Digite seu nome completo" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control"name="email" value="<?php echo $row['email']; ?>" id="email" placeholder="Digite seu email" required>
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