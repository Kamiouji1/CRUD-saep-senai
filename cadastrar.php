<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Cadastro de Usuário</title>
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
        <h1>Cadastro de Usuário</h1>
        <?php
        
        ?>
        <form action="insert.php" method="POST">
            <div class="form-group">
                <label for="nome">Nome completo</label>
                <input type="text" class="form-control"name="nome" id="nome" placeholder="Digite seu nome completo" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control"name="email" id="email" placeholder="Digite seu email" required>
            </div>
            
            <button type="submit" class="btn btn-submit">Cadastrar</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"></script>
</body>
</html>
