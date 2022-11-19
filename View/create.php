<?php
   require_once '../Model/config.php';
   require_once '../Controller/user.php';
    
    if(isset($_POST["nome"]) &&  isset($_POST["email"]) && isset($_POST["senha"]))
        createUserAction($conn, $_POST["nome"], $_POST["email"], $_POST["senha"]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
</head>
<body>
    <form action="../View/create.php" method="POST">
        <input type="text" name="nome" placeholder="Qual seu nome?">
        <br>
        <input type="email" name="email" placeholder="Qual seu e-mail?">
        <br>
        <input type="password" name="senha" placeholder="Qual sua senha?">
        <br>
        <input type="hidden" value="-1" name="id">
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>