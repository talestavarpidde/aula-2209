<?php
session_start();
require_once "conexao.php";

// Verifica se o formulário foi enviado via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $texto = $_POST['texto'] ?? '';
    $idpostagem = $_POST['idpostagem'] ?? '';
    $idusuario = $_POST['idusuario'] ?? '';

    // Salva na sessão caso precise desses dados em outra página
    $_SESSION['texto'] = $texto;
    $_SESSION['idusuario'] = $idusuario;

    // Prepara a consulta com placeholders (?) para evitar falhas e SQL Injection
    $sql = "INSERT INTO comentario (idusuario, idpostagem, texto) VALUES (?, ?, ?)";
    $comando = mysqli_prepare($conexao, $sql);

    if ($comando) {
        // "iis" -> integer, integer, string
        mysqli_stmt_bind_param($comando, "iis", $idusuario, $idpostagem, $texto);
        
        mysqli_stmt_execute($comando);
        mysqli_stmt_close($comando);
    }

    header("Location: listar_postagem.php");
    exit();
}
?>