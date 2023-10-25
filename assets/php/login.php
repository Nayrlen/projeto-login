<?php
    session_start();

    require_once "config.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha']; 
    }

    $sql = "SELECT * FROM usuarios WHERE usuario = ? AND senha = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $usuario, $senha);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();

        if (password_verify($senha, $row['senha'])) {
            
            $_SESSION["loggedin"] = true;

            header("Location: dashboard.php");
            exit;
        } 
    }else{
        $error = "Usuário e/ou senha incorretos";
    }
    
?>