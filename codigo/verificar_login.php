<?php
    //pega o login e senha lá do formulário
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    //o digitado é igual ao que está no banco?
    $sql = "select * from usuario WHERE email = '$email' AND senha = '$senha'";
    
    require_once "conexao.php";
    $resultado = mysqli_query($conexao, $sql);

    // echo sizeof($resultado);
    $quantidade = mysqli_num_rows($resultado);
    

    //se SIM -> principal.php
    //se NÃO -> index.php
    if ($quantidade == 1) {

        $linha = mysqli_fetch_array($resultado);

        $nome = $linha['nome'];
        $email = $linha['email'];
        $foto = $linha['foto'];
        // $idusario = $linha['idusuario'];


        //sessão
        //variável global
        
        session_start();
        $_SESSION['logado'] = 1;
        $_SESSION['email'] = $email;
        $_SESSION['nome'] = $nome;
        
        header("Location: principal.php");
    }
    else {
        header("Location: index.php?erro=login&email=$email");
    }
?>