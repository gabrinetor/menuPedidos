<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teste</title>
</head>
<body>
<form action="clientes.php" method="POST">
    Login: <input type="email" name="email_cli" value="<?php echo isset($_COOKIE['login']) ? $_COOKIE['login'] : '' ?>"><br>
    Senha: <input type="password" name="senha_cli" value="<?php echo isset($_COOKIE['senha']) ? $_COOKIE['senha'] : '' ?>"><br>
    <button type="submit" name="btn-entrar"> Entrar </button>
</form>
<br>
<form action="funcionarios.php" method="POST">
    Login: <input type="email" name="email_func" value="<?php echo isset($_COOKIE['login']) ? $_COOKIE['login'] : '' ?>"><br>
    Senha: <input type="password" name="senha_func" value="<?php echo isset($_COOKIE['senha']) ? $_COOKIE['senha'] : '' ?>"><br>
    <button type="submit" name="btn-entrar"> Entrar </button>
</form>
</body>
</html>