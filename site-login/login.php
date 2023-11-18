<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <form action="valida.php" method="post">
            <label for="nome">Nome:</label>
            <input id="nome" name="nome" type="text" required>

            <label for="senha">Senha:</label>
            <input id="senha" name="senha" type="password" autocomplete="off" required>

            <input type="submit" value="Entrar">    
        </form>
    </div>
</body>
</html>
