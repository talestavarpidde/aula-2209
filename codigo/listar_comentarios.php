<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentários</title>
    <style>
        table, tr, td {
            border-style: solid;
            padding: 20px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h2>Comentário</h2>

    <table>
        <tr>
            <td>Conteúdo</td>
            <td>Postagem Comentada</td>
            <td>Usuário</td>
            <td>Ação</td>
        </tr>
        <?php
        require_once "conexao.php";
        
        $sql = "SELECT comentario.texto as comentario, usuario.username, postagem.texto as conteudo_postagem, comentario.idcomentario
        FROM comentario
        INNER JOIN usuario 
        ON comentario.idusuario = usuario.idusuario
        INNER JOIN postagem
        ON comentario.idpostagem = postagem.idpostagem;";

        $resultados = mysqli_query($conexao, $sql);
        
        while ($linha = mysqli_fetch_array($resultados)) {
            $idcomentario = $linha['idcomentario'];
            $texto = $linha['comentario'];
            $postagem = $linha['conteudo_postagem']; // Pega o texto da postagem
            $usuario = $linha['username'];

            echo "<tr>";
                echo "<td>$texto</td>";
                echo "<td>$postagem</td>"; // Exibe o texto da postagem em vez do ID
                echo "<td>$usuario</td>";
                echo "<td><a href='excluir_comentario.php?id=$idcomentario'>excluir</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>