<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Entrar no Sistema </title>
</head>
<body>
    <h1>Entrar no Sistema</h1>
    <form name="login" id="login"
    action="../control/loginController.php" 
    method="POST">

        
        E-mail: <input type="email" name="emailUsu" required><br>
        Senha: <input type="password" name="senhaUsu" required><br>
    
        <br>
        <input type="submit" value="Entrar">
    </form>
    
</body>
</html>