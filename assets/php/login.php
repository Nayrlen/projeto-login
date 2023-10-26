<?php
    session_start();

    require_once "config.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha']; 
    }

    $sql = "SELECT * FROM usuarios WHERE usuario = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $usuario);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        $hash = password_hash($senha, PASSWORD_DEFAULT);
        $senha_bd = $row['senha'];

        if (password_verify($hash, $senha_bd)) {
            
            $_SESSION["loggedin"] = true;

            header("Location: dashboard.php");
            exit;
        }else{
            $error = "Usuário e/ou senha incorretos";
        } 
    }
    
?>