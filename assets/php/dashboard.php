<?php
    session_start();
    
    require_once "config.php";

    function logout() {

        session_unset();
        session_destroy();

        header("Location: index.php");
        
        exit;
    }

    if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
        
        header("Location: index.php");
        exit;
    }
?> */

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style-dashboard.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>
    <nav class="menu-lateral">
        <div class="btn-expandir">
            <i class="bi bi-list"></i>
        </div>

        <ul>
            <li class="item-menu">
                <a href="#">
                    <span class="icon">
                        <i class="bi bi-person-badge"></i>
                    </span>
                    <span class="txt-link">
                        Cadastrar cliente
                    </span>
                </a>
            </li>
            <li class="item-menu">
                <a href="cadastrar-funcionario.php">
                    <span class="icon">
                        <i class="bi bi-person-add"></i>
                    </span>
                    <span class="txt-link">
                        Cadastrar Funcionario
                    </span>
                </a>
            </li>
            <li class="item-menu">
                <a href="#">
                    <span class="icon">
                        <i class="bi bi-plus-circle"></i>
                    </span>
                    <span class="txt-link">
                        Criar Venda
                    </span>
                </a>
            </li>
            <li class="item-menu">
                <a href="#">
                    <span class="icon">
                        <i class="bi bi-columns"></i>
                    </span>
                    <span class="txt-link">
                        Gerar Dashboard
                    </span>
                </a>
            </li>
        </ul>
    </nav>
    
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"></form>
    <input type="submit" name="logout" value="Logout">

    <?php
    if (isset($_POST["logout"])) {
        logout();
    }
    ?>
    
</body>
</html>