<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
</head>
<body>
    <h5>CRUD Usuarios</h5>
    <div>
        <form action="gravaUsuario.php" method="post">
        <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome">
            <br>
            <label for="email">Email</label>
            <input type="email" id="email" name="email">
            <br>
            <label for="senha">Senha</label>
            <input type="password" id="senha" name="senha">
            <br>
            <label for="confirmacao_senha">Confirme a Senha</label>
            <input type="password" id="confirmacao_senha" name="confirmacao_senha">
            <br><br>
            <input type="submit" value="Gravar">
        </form>
    </div>
    <br>
    <a href="listarUsuario.php">Listar</a>
</body>
</html>