<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, tr, td {
            border-style: solid;
            padding: 20px;
            border-radius: 5%;
        }
    </style>
</head>
<body>
    <h2>For You</h2>

    <table>
        <tr>
            <td>conteudo</td>
            <td>postagem comentada</td>
            <td>usuario</td>
            <td>ação</td>
            <!--<td>EDITAR</td>-->
        </tr>
        <?php
        require_once "conexao.php";
        
        $sql = "SELECT comentario.texto as comentario, usuario.username, postagem.texto as conteudo_postagem
        FROM comentario
        INNER JOIN usuario 
        ON comentario.idusuario = usuario.idusuario
        INNER JOIN postagem
        ON comentario.idpostagem = postagem.idpostagem;";

        $resultados = mysqli_query($conexao, $sql);
        
        //quebra a variável $resultados em linhas (vetores/array)
        while ($linha = mysqli_fetch_array($resultados)) {
            $id = $linha['idpostagem'];
            $texto = $linha['comentario'];
            $postagem = $linha['idpostagem'];
            $usuario = $linha['username'];

            echo "<tr>";
                echo "<td>$texto</td>";
                echo "<td>$postagem</td>";
                echo "<td>$usuario</td>";
                echo "<td><a href='excluir_comentario.php?id=$id'>excluir</a></td>";
                //echo "<td><a href='cad_comentario.php?id=$id'>Editar</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>