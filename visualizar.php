<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualização</title>
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
    <h1>Vizualização de dados</h1>
    <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
        
                </tr>
            </thead>
            <tbody>
                <?php
                include("select.php");
            while($row = mysqli_fetch_assoc($result)){
            ?>
            <tr>
            <td><?php echo $row['idusuario'] ?></td>
            <td><?php echo $row['nome'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td>
            <?php
            }
            ?>
            </tbody>
            </table>
    </div>
    <br>
    <br>   
    <a href="index.php">
    <button type="submit" class="btn btn-submit">PAGINA INICIAL</button>
    </a>
</body>
</html>
