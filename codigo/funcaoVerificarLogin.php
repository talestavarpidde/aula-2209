<?php
session_start();
require_once 'conexao.php';
function verificarLogin() {
    if (!isset($_SESSION['id'])) {
        header('Location: index.php?erro=Nao logado');
        exit();
    }
}