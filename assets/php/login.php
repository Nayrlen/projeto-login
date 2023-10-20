<?php
    session_start();

    if (empty($_POST) or (empty($_POST["usuario"]) or (empty($_POST["senha"])))){
        print "<script>location.href='index.php'</script>";

    }

    include('config.php');

    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    $sql = "SELECT * FROM usuarios
            WHERE usuario = '{$usuario}'
            AND senha = '{$senha}'";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $usuario, $senha);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $row - $result->fetch_assoc();

        $_SESSION["loggedin"] = true;

        print "<script>location.href='dashboard.php';</script>";

    }else{
        print "<script>alert('Usuário e/ou senha incorretos')</script>";
        print "<script>location.href='index.php';</script>";
    }
?>