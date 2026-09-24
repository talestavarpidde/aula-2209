<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Comentário</title>
</head>
<body>
    <form action="salvar_Comentario.php" method="POST">
        Texto: <br>
        <input type="text" name="texto" required> <br><br>
        
        Postagem:<br>
        <select name="idpostagem" required>
        <?php
            require_once "conexao.php";

            $sql = "SELECT idpostagem, texto FROM postagem";
            $resultados = mysqli_query($conexao, $sql);
            
            while ($linha = mysqli_fetch_array($resultados)) {
                $idpostagem = $linha['idpostagem'];
                $texto = $linha['texto'];
                
                echo "<option value='$idpostagem'>$texto</option>";
            }
        ?>
        </select><br><br>

        Usuário que comentou:<br>
        <select name="idusuario" required>
        <?php
            $sql = "SELECT idusuario, nome FROM usuario";
            $resultados = mysqli_query($conexao, $sql);
            
            while ($linha = mysqli_fetch_array($resultados)) {
                $idusuario = $linha['idusuario'];
                $nome = $linha['nome'];
                
                echo "<option value='$idusuario'>$nome</option>";
            }
        ?>
        </select><br><br>
        
        <input type="submit" value="Salvar">
    </form>
</body>
</html>