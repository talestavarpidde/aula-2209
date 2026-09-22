<?php
// verique se o usuario fez login
// se SIM - mostrar essa página aqui
// se NAO - mandar para index.

// se existe a variável logado
session_start();
if (!isset($_SESSION['logado'])) {
    header("Location: index.php?erro=logado");
}
?>