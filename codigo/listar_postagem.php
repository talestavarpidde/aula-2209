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
        }
    </style>
</head>
<body>
    <h2>Lista de postagens</h2>

    <table>
        <tr>
            <td>idpostagem</td>
            <td>conteudo</td>
            <td>data e hora</td>
            <td>usuario</td>
            <td>ação</td>
            <td>ação</td>
            <td>EDITAR</td>
        </tr>
        <?php
        require_once "conexao.php";
        
        //$sql = "SELECT * FROM postagem";
        $sql = "SELECT * FROM postagem";
        
        $resultados = mysqli_query($conexao, $sql);
        
        //quebra a variável $resultados em linhas (vetores/array)
        while ($linha = mysqli_fetch_array($resultados)) {
            $id = $linha['idpostagem'];
            $titulo = $linha['texto'];
            $conteudo = $linha['data_hora'];
            $autor = $linha['idusuario'];

            echo "<tr>";
                echo "<td>$id</td>";
                echo "<td>$titulo</td>";
                echo "<td>$conteudo</td>";
                echo "<td>$autor</td>";
                //echo "<td><a href='excluir_postagem.php?id=$id'><img src='../imagens/lixeira.png'></a></td>";
                //echo "<td><a href='excluir_postagem.php?id=$id'>excluir</a></td>";
                //echo "<td><a href='cad_postagem.php?id=$id'>Editar</a></td>";
            echo "</tr>";
        }
            
            
            ?>
    </table>
</body>
</html>