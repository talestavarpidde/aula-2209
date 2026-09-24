<?php
require_once "conexao.php";

$texto = $_POST['texto'];
$idusuario = $_POST['idusuario'];


$_SESSION['texto'] = $texto;

$_SESSION['idusuario'] = $idusuario;

    $sql = "INSERT INTO postagem (texto, idusuario) VALUES (?, ?)";
    $comando = mysqli_prepare($conexao, $sql);
    mysqli_stmt_bind_param($comando, 'ss', $texto, $idusuario);


mysqli_stmt_execute($comando);

mysqli_stmt_close($comando);

header("Location: listar_postagem.php");
exit();
?>