<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../estilos/style-formulario-clientes.css">
</head>
<body>
    <form action="cadastro.php" method="post" id="cadastro-clientes">
        <div>
            <h1>Cadastrar Funcionário</h1>
        </div>
        <label for="inome">Nome</label>
        <input type="text" name="nome" id="inome" required>
        <br>
        <label for="iemail">email</label>
        <input type="email" name="email" id="iemail" required>
        <br>
        <label for="iusuario">Usuário</label>
        <input type="text" name="usuario" id="iusuario" required>
        <br>
        <label for="isenha">Senha</label>
        <input type="text" name="senha" id="isenha" required>
        <br>
        <label for="itipo">Tipo</label>
        <input type="number" name="tipo" id="inome" required>
        <br>
        <label for="idata">Data</label>
        <input type="date" name="data" id="idata" required>
        <br>
        <button type="submit">
            Cadastrar
        </button>
        <a href="../../index.html" class="btn-voltar">Voltar</a>
    </form>
    
</body>
</html>