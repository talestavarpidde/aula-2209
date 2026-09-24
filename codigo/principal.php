<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Reseta margens e faz o body ocupar 100% da tela */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
            width: 100%;
            height: 100vh; /* 100% da altura da janela visível */
            overflow: hidden; /* Evita barras de rolagem duplas na página principal */
        }

        iframe {
            border: none; /* Opcional: remove a borda padrão dos iframes */
            height: 100vh; /* Faz os iframes ocuparem toda a altura da tela */
        }

        #menu-frame {
            width: 20%;
            border-right: 1px solid black;    
        }

        #conteudo-frame {
            width: 79%;
        }
    </style>
</head>
<body>
    <iframe id="menu-frame" src="menu.html"></iframe>
    <iframe id="conteudo-frame" src="listar_postagem.php" name="conteudo-frame"></iframe>
</body>
</html>