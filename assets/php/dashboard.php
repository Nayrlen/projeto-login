<?php
    session_start();
    if (empty($_SESSION)){
        print "<script>location.href='index.php';</script>";
    }
?>

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
                <a href="#">
                    <span class="icon">
                        <i class="bi bi-person-add"></i>
                    </span>
                    <span class="txt-link">
                        Cadastrar Vendedor
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
    <?php
        print "Olá, " . $_SESSION["nome"];
        print "<a href='logout.php'>Sair</a>";
    ?>
    
</body>
</html>