<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <link rel="stylesheet" href="../estilos/style.css">

    <link rel="stylesheet" href="../estilos/media-query.css">
</head>
<body>
    <main>
        <section id="login">
            <div id="imagem">
                
            </div>
            <div id="formulario">
                <h1>Login</h1>
                <form action="login.php" method="post" autocomplete="on">
                    <div class="campo">
                        <i class="material-icons">person</i>
                        <input type="text" name="usuario" id="ilogin" placeholder="Usuário" autocomplete="username" required>
                        <label for="ilogin">Login</label>
                    </div>
                    <div class="campo">
                        <i class="material-icons">vpn_key</i>
                        <input type="password" name="senha" id="isenha" placeholder="**********" autocomplete="current-password" required minlength="5" maxlength="10">
                        <i class="bi-eye-slash-fill" id="eye"></i>
                        <label for="isenha">Senha</label>
                    </div>
                    <input type="submit" value="Entrar" class="botao-entrar">
                    <div>
                        <a href="esqueci.html" class="botao-esqueci">
                            Esqueci a senha
                        </a>
                    </div>
                </form>
            </div>
        </section>
    </main>
    <script src="../js/script.js"></script>
</body>
</html>