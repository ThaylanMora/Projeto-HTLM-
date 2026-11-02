<?php
require_once '../control/listarUsuariosController.php';
require_once '../control/excluirUsuarioController.php';
require_once '../control/alterarUsuarioController.php';

//echo '<pre>';
//var_dump($todos);

?>


<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500&display=swap"
      rel="stylesheet"
    />
    <link href="css/boot.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/list_format.css" />
    <title>Projeto Html</title>
  </head>
  <body>
    <!-- INICIO CABEÇALHO -->
    <header class="main_header">
      <div class="main_header_content">
        <a href="GeekStation.php" class="logo">
          <img
            src="img/gsDourada1.2.png"
            alt="GeekStation"
            title="GeekStation"
          />
        </a>
        <nav class="main_header_content_menu">
          <ul>
            <li>
              <a href="opcao.html">Voltar</a>
            </li>
          </ul>
        </nav>
      </div>
    </header>
    <!-- FIM CABEÇALHO -->

    <div class="list_container">
      <h1>Listagem de dados</h1>
      <form action="" method="post"></form>
      <table width="1150px">
        <tr>
          <th>Nome</th>
          <th>Idade</th>
          <th>Profisssão</th>
          <th>Email</th>
          <th>Endereço</th>
          <th>Ação</th>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>João</td>
          <td>30</td>
          <td>Arquiteto</td>
          <td>joao@joao.com</td>
          <td>casa joão</td>
          <td><button>Editar</button>&nbsp;<button>Excluir</button></td>
        </tr>
        <tr>
          <td>Maria</td>
          <td>22</td>
          <td>Estudante</td>
          <td>maria@maria.com</td>
          <td>casa maria</td>
          <td><button>Editar</button>&nbsp;<button>Excluir</button></td>
        </tr>
      </table>
    </div>
    <h1>Usuarios cadastrados</h1>
    <?php
    foreach ($todos as $t) { ?>

        <!-- Exibir o nome do usuário -->
        Nome: <?php echo $t['nomeUsu']; ?>

  
        <!-- Link para editar o usuário -->
        <a href="alterarUsuario.php?idUsu=<?php echo $t['idUsu']; ?>">&#9998;</a>

        <!-- Link para excluir o usuário -->
        <a href="../control/excluirUsuarioController.php?idUsu=<?php echo $t['idUsu']; ?>"> &#10008;</a>
    </br>
    <?php } ?>
  </body>
</html>
