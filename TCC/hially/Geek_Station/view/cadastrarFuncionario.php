<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="../css/boot.css" rel="stylesheet" />
    <link href="../css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/formulario.css" />

    <title>Projeto HTML</title>
  </head>
  <body>
    <!-- INICIO CABEÇALHO -->
    <header class="main_header">
      <div class="main_header_content">
        <a href="GeekStation.php" class="logo">
          <img
            src="../img/gsDourada1.2.png"
            alt="Projeto prático HTML e CSS"
            title="Projeto prático HTML e CSS"
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

    <div class="main_header_ground">
      <h1>Cadastro Fornecedor</h1>
      <div class="container">
        <form action="../control/cadastrarFornecedorController.php" method="get">
          <div class="form-group">
            <label for="nome">Nome:</label>
            <input
              type="text"
              name="nomeFor"
              placeholder="Informe seu nome"
              required
            />
          </div>
          <div class="form-group">
            <label for="cnpj">CNPJ:</label>
            <input
              type="text"
              name="cnpjFor"
              placeholder="Informe seu CNPJ"
              required
            />
          
          </div>
          <div class="form-group">
            <label for="numero">Número:</label>
            <input
              type="text"
              name="numeroFor"
              placeholder="Informe o Número"
              required
            />
          </div>
          
        

          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="emailFor" placeholder="Informe Email" />
          </div>

          <div class="form-group">
            <label for="senha">Senha:</label>
            <input type="password" name="senhaFor" placeholder="Informe Senha" />
          </div>

          <div class="form-group-uf">
            <label for="uf">Unidade Federativa:</label>
            <select name="ufFor" id="">
              <option value="">Selecione:</option>
              <option value="AC">Acre</option>
              <option value="AL">Alagoas</option>
              <option value="AP">Amapá</option>
              <option value="BA">Bahia</option>
            </select>
          </div>
          <div>
            <p>
              <br /><br /><br />
              <button type="submit">Cadastrar</button>
            </p>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
