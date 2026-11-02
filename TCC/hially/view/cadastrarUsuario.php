

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Cadastrar usuario</h1>

    <form action="../control/cadastrarUsuarioController.php" method="post">
        Nome: <input type="text" name="nomeUsu"><hr>
        data nascimento: <input type="date" name="dtNascimentoUsu"> <hr>
        E-mail: <input type="email" name="emailUsu"><hr>
        Senha: <input type="password" name="senhaUsu"><hr>
        <input type="hidden" name="perfilUsu" value="Cliente">
        <input type="hidden" name="situacaoUsu" value="Ativo">
        <input type="submit" value="Salvar">
    </form>
    
</body>
</html>