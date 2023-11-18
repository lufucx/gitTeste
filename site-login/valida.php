<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
<?php

$redirect = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["nome"]) && isset($_POST["senha"])) {
        $nome = $_POST["nome"];
        $senha = $_POST["senha"];

        if ($nome == "admin" && $senha == "admin") {
            $redirect = true;
        } else {
            print("Nome/Senha inválidos");
        }
    }
}

if ($redirect) {
    header("Location: site.php");
    exit();
}
?>
</body>
</html>