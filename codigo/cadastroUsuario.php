<?php

    echo "<h1>Cadastro de usuários</h1>";
    $id = 0;
    $username = "";
    $nome = "";
    $email = "";
    $senha = "";
    $foto = "";


//
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/formProdutos.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>

<body>
    <div>
        <form action="salvarUsuario.php?id=<?php echo $id; ?>" method="POST">
            <p>Username</p><input value="<?php echo $username; ?>" type="text" name="username">
            <p>Nome</p><input value="<?php echo $nome; ?>" type="text" name="nome">
            <p>Email</p><input value="<?php echo $email; ?>" type="email" name="email">
            <p>Senha</p><input value="<?php echo $senha; ?>" type="password" name="senha">
            <p>Foto</p><input value="<?php echo $foto; ?>" type="text" name="foto">

            <input type="submit" value="Salvar">
        </select>            
        </form>
    </div>
    <a href="index.php">Cancelar</a>
</body>

</html>