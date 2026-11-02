<?php
  session_start();
  $idUsuLogin = ""; //variavel em branco, sem login
  if(isset($_SESSION["idUsu"]))
  {
    $idUsuLogin =$_SESSION["idUsu"]; //login definido
    $nomeUsuLogin =$_SESSION["nomeUsu"]; 
    $perfilUsuLogin =$_SESSION["perfilUsu"];
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <head>
        <nav>
            <?php
              if(!$idUsuLogin){
              // montar menu sem login 
              echo '<li>Menu</li>
                 <li>
                   <a href="view/cadastrarUsuario.php"><li>Cadastre-se</li></a> 
                 </li>
                 <li>
                    <a href="view/login.php"><li>Entrar</li></a> 
                 </li>';
              } else if($perfilUsuLogin=='Administrador'){
                echo '<li>Menu</li>
                <li>
                  <a href="view/cadastrarAdmFunc.php"><li>Cadastrar Usuário</li></a> 
                </li>
                <li>
                   <a href="view/cadastrarProduto.php"><li>Cadastrar Fornecedor</li></a> 
                </li>
                <li>
                   <a href="view/cadastrarFornecedor.php"><li>Cadastrar Produto</li></a> 
                </li>
                <li>
                    <a href="view/logOff.php"><li>Sair</li></a> 
                 </li>';
              } else if($perfilUsuLogin=='Funcionário'){
                echo '<li>Menu</li>
                <li>
                   <a href="view/cadastrarProduto.php"><li>Cadastrar Fornecedor</li></a> 
                </li>
                <li>
                   <a href="view/cadastrarFornecedor.php"><li>Cadastrar Produto</li></a> 
                </li>
                <li>
                    <a href="view/logOff.php"><li>Sair</li></a> 
                 </li>';
              } else if($perfilUsuLogin=='Cliente'){
                echo '<li>Menu</li>
                <li>
                   <a href="view/pesquisarProduto.php"><li>Pesquisar Produto</li></a> 
                </li>
                <li>
                   <a href="view/verCarrinho.php"><li>Carrinho</li></a> 
                </li>
                <li>
                    <a href="view/logOff.php"><li>Sair</li></a> 
                 </li>';
              }
            ?>
        </nav>
    </head>
    <h1>Página inicial</h1>
</body>
</html>