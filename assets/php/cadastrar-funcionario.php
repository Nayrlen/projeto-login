<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../estilos/style-cadastro-funcionario.css">

    <link rel="stylesheet" href="../estilos/media-query-cadastro-funcionario.css">
</head>
<body>
    <form action="cadastro.php" method="post" id="cadastro-clientes">
        <div>
            <h1>Cadastrar Funcionário</h1>
        </div>
        <div class="campo">
            <label for="inome">Nome</label>
            <input type="text" name="nome" id="inome" required>
        </div>       
        <div class="campo">
            <label for="iemail">E-mail</label>
            <input type="email" name="email" id="iemail" required>
        </div>
        <div class="campo">
            <label for="iusuario">Usuário</label>
            <input type="text" name="usuario" id="iusuario" required>
        </div>
        <div class="campo">
            <label for="isenha">Senha</label>
            <input type="text" name="senha" id="isenha" required>
        </div>
        <div class="campo">
            <label for="itipo">Tipo</label>
            <input type="number" name="tipo" id="inome" required>
        </div>
        <div class="campo">
            <label for="idata">Data</label>
            <input type="date" name="data" id="idata" required>
        </div>
        <button type="submit">
            Cadastrar
        </button>
        <a href="../../index.html" class="btn-voltar">Voltar</a>
    </form>
    
</body>
</html>