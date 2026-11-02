<?php
session_start();
if (!isset($_SESSION['perfil_idperfil']) || $_SESSION['perfil_idperfil'] != 3) {
    header("Location: lojaLogado.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página do Pofessor</title>
    <link rel='stylesheet' type='text/css' media='screen' href='css/admin.css'>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">


    <body>
    <header class="header">
        <a href="index.html" class="logo"><span>WOLF</span>GYM</a>

        <div id="menu-btn" class="fas fa-bars"></div>

        <nav class="navbar">
        <a class="nav-link" href="buscaraula.php" onclick="exibirAulas();">Aulas</a>
        <a class="nav-link" href="agendar.php">Agendar aula</a>

        </nav>
        <div class="d-flex justify-content-between align-items-center">
                    <a href="logout.php" class="btn btn-danger">Sair</a>
                </div>
    </header>
    <main>
        <section id="about" class="about">
            <div class="image">
                <img src="img/sobre.jpeg" alt="">
            </div>

            <div class="content">
            <h1>Bem-vindo, <?php echo $_SESSION['nome']; ?>!</h1>
                    </div>
                </div>
            </div>
        </section>
</head>
<body>
            <div class="col-md-9">
                <!-- Botão para sair do sistema -->
                <div class="d-flex justify-content-between align-items-center">

                </div>
                <!-- Fim botão -->
                <div id="listaAulas" class="mt-4">
                    <!-- Aqui será exibida a lista de usuários -->
                </div>
            </div>
        </div> 
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        function exibirAulas() {
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    document.getElementById("exibirAulas").innerHTML = xhr.responseText;
                }
            };
            xhr.open("GET", "buscaraula.php", true);
            xhr.send();
        }

        function removeraulas(id) {
            if (confirm("Tem certeza que deseja remover este usuário?")) {
                var xhr = new XMLHttpRequest();
                xhr.onreadystatechange = function() {
                    if (xhr.readyState == 4 && xhr.status == 200) {
                        exibirAulas();
                    }
                };
                xhr.open("GET", "removeraulas.php?id=" + id, true);
                xhr.send();
            }
        }
    </script>
</body>
</html>


