<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        form{
            background-color: gray;
            padding: 10px;
            margin: 5px;
            width: 550px;
        }

        label, input{
            padding: 6px;
            margin: 3px;
            width: 500px;
        }
    </style>
    <title>Formularios</title>
</head>
<body>
    <h1>PHP</h1>
    <h2>Exemplo</h2>
    <h2>Utilizando formularios</h2>
    <form action="index.php" method="post">
        <label for="nome" id='nome' name="nome">Nome:</label><br>
        <input for="nome" id='nome' name="nome" type="name"><br>
        <label for="senha" id='senha' name="senha">Senha:</label><br>
    <input for="senha" id='senha' name="senha" type="password">
    <input type="submit">    
    </form>
</body>
</html>