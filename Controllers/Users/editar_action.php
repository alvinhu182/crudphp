<?php
require '../../Configs/database.php';

$id = filter_input(INPUT_POST, 'id');
$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$telefone = filter_input(INPUT_POST, 'telefone');

if($id && $nome && $email && $telefone) {
    $sql = $pdo-> prepare("UPDATE usuario SET nome = :nome, email = :email, telefone = :telefone WHERE id = :id");
    $sql->bindValue(':nome', $nome);
    $sql->bindValue(':email', $email);
    $sql->bindValue(':telefone', $telefone);
    $sql->bindValue(':id', $id);
    $sql->execute();

    header("Location: ../../Views/Users/lista.php?success=true");
    exit;
} else {
    header("Location: ../../Views/Users/lista.php");
    exit;
}
