<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>CrudPhP</title>
</head>
<body>
    <?php
    require 'config.php';

    $lista = [];
    $sql = $pdo->query("SELECT * FROM usuario");
    if($sql->rowCount() > 0) {
        $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
    }
    ?> 
    <div class="container">
        <h1>Listagem de Usuários</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($lista as $usuario): ?>
                    <tr>
                        <td><?=$usuario['id'];?></td>
                        <td><?=$usuario['nome'];?></td>
                        <td><?=$usuario['email'];?></td>
                        <td><?=$usuario['telefone'];?></td>
                        <td>
                            <a class="btn btn-primary" href="editar.php?id=<?=$usuario['id'];?>">Editar</a>
                            <a class="btn btn-danger" href="excluir.php?id=<?=$usuario['id'];?>">Excluir</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a class="btn btn-success" href="cadastrar.php">Cadastrar Usuário</a>
    </div>
</body>
</html>