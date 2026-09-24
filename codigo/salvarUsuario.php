<?php
session_start();
require_once "conexao.php";

$username = $_POST['username'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$foto = $_POST['foto'];


$_SESSION['nomeUsuario'] = $nome;
$_SESSION['email'] = $email;
$_SESSION['senha'] = $senha;

    $sql = "INSERT INTO usuario (username, nome, email, senha, foto) VALUES (?, ?, ?, ?, ?)";
    $comando = mysqli_prepare($conexao, $sql);
    mysqli_stmt_bind_param($comando, 'sssss', $username, $nome, $email, $senha, $foto);


mysqli_stmt_execute($comando);

mysqli_stmt_close($comando);

header("Location: listar_postagem.php");
exit();
?>