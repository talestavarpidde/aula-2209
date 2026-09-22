<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<?php
        if (isset($_GET['erro'])) {
            $email = '';
            if ($_GET['erro'] == "login") {
                $email = $_GET['email'];
                echo "<p class='erro'>Login e/ou senha incorretos!</p>";
            }
            if ($_GET['erro'] == "logado") {
                echo "<p class='erro'>Você precisa estar logado!</p>";
            }
        }
        else {
            $email = "";
        }
?>
<form action="verificar_login.php" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" aria-describedby="emailHelp" value="<?php echo $email; ?>">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Senha</label>
    <input type="password" class="form-control" name="senha">
  </div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>

  <p>Não tem uma conta? <a href="cadastroUsuario.php">Cadastre-se</a></p>
</form>
</body>
</html>