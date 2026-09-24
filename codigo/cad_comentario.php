<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="salvarComentario.php" method="POST">
        Texto: <br>
        <input  type="text" name="texto"> <br>
        
        Postagem:<br>
        <select name="idpostagem">
        <?php
            require_once "conexao.php";

            $sql = "SELECT * FROM postagem";

            $resultados = mysqli_query($conexao, $sql);
            while ($linha = mysqli_fetch_array($resultados)) {
                $idpostagem = $linha['idpostagem'];
                $texto = $linha['texto'];
                
                echo "<option value='$idpostagem'>$texto</option>";
            }
        ?>
        </select><br>

        usuário que comentou:<br>
        <select name="idusuario">
        <?php
            require_once "conexao.php";

            $sql = "SELECT * FROM usuario";

            $resultados = mysqli_query($conexao, $sql);
            while ($linha = mysqli_fetch_array($resultados)) {
                $idusuario = $linha['idusuario'];
                $nome = $linha['nome'];
                
                echo "<option value='$idusuario'>$nome</option>";
            }
        ?>
        </select><br>
        <input type="submit" value="Salvar">
    </form>
</body>
</html>