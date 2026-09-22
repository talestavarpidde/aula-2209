
<?php
session_start();
require_once "conexao.php";

$texto = $_POST['texto'];
$nomePostador = $_POST['nomePostador'];


$_SESSION['texto'] = $texto;

$_SESSION['nomePostador'] = $nomePostador;

    $sql = "INSERT INTO postagem (texto, nomePostador) VALUES (?, ?)";
    $comando = mysqli_prepare($conexao, $sql);
    mysqli_stmt_bind_param($comando, 'ss', $texto, $nomePostador);


mysqli_stmt_execute($comando);

mysqli_stmt_close($comando);

header("Location: principal.php");
exit();
?>