<?php
require_once "conexao.php";

$id = $_GET['id'];

$sql = "delete from comentario where idcomentario = $id";

mysqli_query($conexao, $sql);

header("Location: listar_comentarios.php");
?>