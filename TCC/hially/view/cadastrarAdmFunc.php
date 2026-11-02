

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Funcionário</title>
</head>
<body>

    <h1>Cadastrar Funcionário</h1>

    <form action="../control/cadastrarUsuarioController.php" method="post">
        Nome: <input type="text" name="nomeUsu"><hr>
        data nascimento: <input type="date" name="dtNascimentoUsu"> <hr>
        E-mail: <input type="email" name="emailUsu"><hr>
        Senha: <input type="password" name="senhaUsu"><hr>
        Perfil: <select name="perfilUsu">
                <option value="Administrador">Administrador</option>
                <option value="Funcionário">Funcionário</option>
                <option value="Cliente">Cliente</option>
                </select><hr>
        Situação:<select name="situacaoUsu">
                <option value="Ativo">Ativo</option>
                <option value="Inativo">Inativo</option>
                </select><hr>
                
        <input type="submit" value="Salvar">
    </form>
    
</body>
</html>