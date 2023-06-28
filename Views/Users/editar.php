<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Editar</title>
</head>
<body>
    <div class="container">
        <?php 
        require '../../Configs/database.php';
        
        $usuario = [];
        $id = filter_input(INPUT_GET, 'id');
        if ($id) {
            $sql = $pdo->prepare("SELECT * FROM usuario WHERE id = :id");
            $sql->bindValue(':id',$id);
            $sql->execute();
        
            if($sql->rowCount() > 0 ){
                $usuario = $sql->fetch(PDO::FETCH_ASSOC);
            } else {
                header("Location: ./lista.php");
                exit;
            }
        } else {
            header("Location: ./lista.php");
        }
        ?>
        
        <h1>Editar Usuário</h1>
        <form method="POST" action="../../Controllers/Users/editar_action.php">
            <input type="hidden" name="id" value="<?=$usuario['id'];?>"/>
            <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" value="<?=$usuario['nome'];?>">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="<?=$usuario['email'];?>">
            </div>
            <div class="mb-3">
                <label for="telefone" class="form-label">Telefone:</label>
                <input type="text" class="form-control" id="telefone" name="telefone" value="<?=$usuario['telefone'];?>">
            </div>
            <button type="submit" class="btn btn-primary">Atualizar</button>
            <a class="btn btn-success" href="./lista.php">Voltar</a>
        </form>
    </div>
</body>
</html>
