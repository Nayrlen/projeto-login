<?php
    session_start();

    if(isset($_POST['usuario'])) {
        include('config.php');

        $nome = $_POST['nome'];
        $usuario = $_POST['usuario'];
        $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT); 
        $conn = new mysqli(query("INSERT INTO usuarios (nome,usuario, senha) VALUES ('$nome', '$usuario', '$senha')"));
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="cadastrar-funcionario.php" method="post">
        <label for="inome">Nome</label>
        <input type="text" name="nome" id="inome">
        <br>
        <label for="iusuario">Usuário</label>
        <input type="text" name="usuario" id="iusuario">
        <br>
        <label for="isenha">Senha</label>
        <input type="text" name="senha" id="isenha">
        <br>
        <button type="submit">
            Cadastrar
        </button>
    </form>
    
</body>
</html>