<?php
require_once "conexao.php";

$id = $_GET['id'];

$sql = "delete from postagem where idpostagem = $id";

mysqli_query($conexao, $sql);

header("Location: lista_postagem.php");
?>