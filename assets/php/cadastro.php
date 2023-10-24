<?php
    session_start();

    require_once "config.php";

    if($_SERVER["REQUEST_METHOD"] == "POST") {

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha']; 
        $hashed_password = password_hash($senha, PASSWORD_DEFAULT);
        $tipo = $_POST ['tipo'];
        $data = $_POST ['data'];

        $sql = "INSERT INTO usuarios (nome, email, usuario, senha, tipo, data) VALUES (?, ?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($sql);

        $stmt->bind_param("ssssss", $nome, $email, $usuario, $hashed_password, $tipo, $data);

        if($stmt->execute()) {
            echo "Usuario criado com sucesso!";
            header("location: cadastrar-funcionario.php");
        }else{
            echo "Erro: " . "<br>" . $coon->error;
        }

        $stmt->close();
        
    }

    $conn->close();
?>