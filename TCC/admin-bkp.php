<?php
session_start();
if (!isset($_SESSION['perfil_idperfil']) || $_SESSION['	perfil_idperfil '] != 1) {
    header("Location: lojaLogado.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página do Administrador</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        #listaUsuarios table {
            width: 100%; /* Define a largura da tabela como 100% da div */
            border-collapse: collapse; /* Combina as bordas das células */
        }
        #listaUsuarios th, #listaUsuarios td {
            border: 1px solid #ddd; /* Adiciona bordas às células */
            padding: 8px; /* Adiciona espaço interno */
            text-align: left; /* Alinha o texto à esquerda */
        }
        #listaUsuarios th {
            background-color: #f2f2f2; /* Cor de fundo para os cabeçalhos das colunas */
        }
    </style>
    <script>
        function exibirListaUsuarios() {
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    document.getElementById("listaUsuarios").innerHTML = xhr.responseText;
                }
            };
            xhr.open("GET", "buscarUsuarios.php", true);
            xhr.send();
        }

        function removerUsuario(id) {
            if (confirm("Tem certeza que deseja remover este usuário?")) {
                var xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function() {
                    if (xhr.readyState == 4 && xhr.status == 200) {
                        exibirListaUsuarios();
                    }
                };
                xhr.open("GET", "removerUsuario.php?id=" + id, true);
                xhr.send();
            }
        }
    </script>
</head>
<body>
<!-- Botão para sair do sistema -->
<div class="ola">
    <h1>Bem-vindo, <?php echo $_SESSION['nome']; ?>!</h1>
</div>
<div class="container">        
        <div class="row justify-content-end">
            <div class="col-auto mt-3">
                <a href="logout.php" class="btn btn-danger">Sair</a>
            </div>
        </div>
    </div>
<!-- Fim botão -->
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 bg-light">
                
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="exibirListaUsuarios();">Listar Usuários</a>
                    </li>
                    <!-- Adicione mais itens de menu aqui, se necessário -->
                    <li class="nav-item">
                        <a class="nav-link" href="cadastro_administrador.php">Cadastrar Administradores</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-9">
                <div id="listaUsuarios" class="mt-4">
                    <!-- Aqui será exibida a lista de usuários -->
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
