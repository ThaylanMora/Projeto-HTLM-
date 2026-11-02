<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
      integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      rel="stylesheet"
      href="https://unpkg.com/boxicons@latest/css/boxicons.min.css"
    />
    <link rel="stylesheet" href="css/styleGs.css" />
    <link rel="stylesheet" href="css/boot.css" />
    <title>Geek Station</title>
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
                    <a href="view/opcao.html"><li>Entrar</li></a> 
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
    <header>
      <a href="#" class="logo"><img src="Img/gsDourada1.2.png" /></a>
      <ul class="navmenu">
        <li><a href="GeekStation.php">Home</a></li>
        <li><a href="#produtos">Produtos</a></li>
        <li><a href="#">Contato</a></li>
      </ul>
      <div class="nav-icon">
        <a href="#"><i class="bx bx-search"></i></a>
        <a href="../Geek_Station/view/login.html"><i class="bx bx-user"></i></a>
        <a href="#"><i class="bx bx-cart"></i></a>
        <div class="bx bx-menu" id="menu-icon"></div>
      </div>
      
    </header>
    <section class="main-home">
      <div class="main-text">
        <h2>Bem Vindo a</h2>
        <h1>Geek Station</h1>
        <p>
        Aqui é onde a criatividade se funde com a tecnologia <br> 
        em um estilo único, inspirado no universo geek.
        </p>

        <a href="#" class="main-btn"
          >Compre aqui <i class="bx bx-right-arrow-alt"></i
        ></a>
      </div>
      
    </section>
    <!-- trending-products-section -->
    <div class="main-contener" >
      <section class="trending-product" id="#produtos">
        <div class="center-text">
          <h2>Nossas <span>Promoções</span></h2>
        </div>

        <div class="products">
          <div class="row">
            <img src="Img/Produto_Luminaria.jpg" alt="" />
            <div class="product-text">
              <h5>Sale</h5>
            </div>
            <div class="heart-icon">
              <i class="bx bx-heart"></i>
            </div>
            <div class="ratting">
              <i class="bx bx-star"></i>
              <i class="bx bx-star"></i>
              <i class="bx bx-star"></i>
              <i class="bx bx-star"></i>
              <i class="bx bxs-star-half"></i>
            </div>
            <div class="price">
              <h4>Luminaria do Mário</h4>
              <p>R$119,99</p>
            </div>
          </div>
          <div class="row">
            <img src="Img/Produto_Naruto.jpg" alt="" />
            <div class="product-text">
              <h5>New</h5>
            </div>
            <div class="heart-icon">
              <i class="bx bx-heart"></i>
            </div>
            <div class="ratting">
              <i class="bx bx-star"></i>
              <i class="bx bx-star"></i>
              <i class="bx bx-star"></i>
              <i class="bx bx-star"></i>
              <i class="bx bxs-star-half"></i>
            </div>
            <div class="price">
              <h4>Utensilios do Naruto</h4>
              <p>R$89,99</p>
            </div>
          </div>

          <div class="row">
            <img src="Img/Produto_camisa.jpg" alt="" />
            <div class="heart-icon">
              <i class="bx bx-heart"></i>
            </div>
            <div class="ratting">
              <i class="bx bx-star"></i>
              <i class="bx bx-star"></i>
              <i class="bx bx-star"></i>
              <i class="bx bx-star"></i>
              <i class="bx bxs-star-half"></i>
            </div>
            <div class="price">
              <h4>Camisa Feminina Demon Slayer</h4>
              <p>R$70,50</p>
            </div>
          </div>

          <div class="row">
            <img src="Img/Produto_rpg.jpg" alt="" />
            <div class="product-text">
              <h5>Hot</h5>
            </div>
            <div class="heart-icon">
              <i class="bx bx-heart"></i>
            </div>
            <div class="ratting">
              <i class="bx bx-star"></i>
              <i class="bx bx-star"></i>
              <i class="bx bx-star"></i>
              <i class="bx bx-star"></i>
              <i class="bx bxs-star-half"></i>
            </div>
            <div class="price">
              <h4>RPG Gloomhaven</h4>
              <p>R$149,99</p>
            </div>
          </div>

          <div class="row">
            <img src="Img/Produto_Trofel.jpg" alt="" />
            <div class="heart-icon">
              <i class="bx bx-heart"></i>
            </div>
            <div class="ratting">
              <i class="bx bx-star"></i>
              <i class="bx bx-star"></i>
              <i class="bx bx-star"></i>
              <i class="bx bx-star"></i>
              <i class="bx bxs-star-half"></i>
            </div>
            <div class="price">
              <h4>Trofél Harry Potter</h4>
              <p>R$99,99</p>
            </div>
          </div>

          <div class="row">
            <img src="Img/Produto_todoroki.jpg" alt="" />
            <div class="product-text">
              <h5>Hot</h5>
            </div>
            <div class="heart-icon">
              <i class="bx bx-heart"></i>
            </div>
            <div class="ratting">
              <i class="bx bx-star"></i>
              <i class="bx bx-star"></i>
              <i class="bx bx-star"></i>
              <i class="bx bx-star"></i>
              <i class="bx bxs-star-half"></i>
            </div>
            <div class="price">
              <h4>Figure Art Todoroki</h4>
              <p>R$199,99</p>
            </div>
          </div>

          <div class="row">
            <img src="Img/Produto_brincos.jpg" alt="" />
            <div class="product-text">
              <h5>Sale</h5>
            </div>
            <div class="heart-icon">
              <i class="bx bx-heart"></i>
            </div>
            <div class="ratting">
              <i class="bx bx-star"></i>
              <i class="bx bx-star"></i>
              <i class="bx bx-star"></i>
              <i class="bx bx-star"></i>
              <i class="bx bxs-star-half"></i>
            </div>
            <div class="price">
              <h4>Brincos do Tanjiro - Demon Slayer</h4>
              <p>R$49,99</p>
            </div>
          </div>

          <div class="row">
            <img src="img/Produto_Quadro.jpg" alt="" />
            <div class="product-text">
              <h5>Sale</h5>
            </div>
            <div class="heart-icon">
              <i class="bx bx-heart"></i>
            </div>
            <div class="ratting">
              <i class="bx bx-star"></i>
              <i class="bx bx-star"></i>
              <i class="bx bx-star"></i>
              <i class="bx bxs-star-half"></i>
            </div>
            <div class="price">
              <h4>Quadros One Piece</h4>
              <p>R$87,99</p>
            </div>
          </div>
          <div class="row">
            <img src="Img/Produto_cosplay.jpg" alt="#" />
            <div class="product-text">
              <h5>Sale</h5>
            </div>
            <div class="heart-icon">
              <i class="bx bx-heart"></i>
            </div>
            <div class="ratting">
              <i class="bx bx-star"></i>
              <i class="bx bx-star"></i>
              <i class="bx bx-star"></i>
              <i class="bx bx-star"></i>
              <i class="bx bxs-star-half"></i>
            </div>
            <div class="price">
              <h4>Cosplay da Kakegurui Feminina</h4>
              <p>R$125,00</p>
            </div>
          </div>

          <div class="row">
            <img src="img/Produto_Katana.jpg" alt="" />
            <div class="product-text">
              <h5>Sale</h5>
            </div>
            <div class="heart-icon">
              <i class="bx bx-heart"></i>
            </div>
            <div class="ratting">
              <i class="bx bx-star"></i>
              <i class="bx bx-star"></i>
              <i class="bx bx-star"></i>
              <i class="bx bx-star"></i>
              <i class="bx bxs-star-half"></i>
            </div>
            <div class="price">
              <h4>Katanas dos Hashiras de Kimetsu no Yaiba</h4>
              <p>R$150,00</p>
            </div>
          </div>
        </div>
      </section>

  

      <!-- updaite-news-section -->

      <div class="curiosities">
        <section class="curiosities_geek">
          <div class="curiosities_geek_text">
            <h2>Curiosidades do Mundo Geek</h2>
          </div>
          <div class="update-cart">
            <div class="cart">
              <img src="img/bl-1.png" alt="" />
              <h5>11 de maio 2023</h5>
              <h4>Mercado Geek</h4>
              <p>
Mercado geek movimenta mais de R$ 20 bilhões no país. Em 2021, o mercado geek faturou R$ 21,5 bilhões em faturamento no Brasil, 
somente com a venda de itens licenciados. Esse valor representa um crescimento de 5% em relação a 2020, mesmo diante do cenário de pandemia              </p>
            </div>
            <div class="cart">
              <img src="img/bl-2.png" alt="" />
              <h5>11 de maio de 2023</h5>
              <h4>Mercado Geek</h4>
              <p>
Mercado geek movimenta mais de R$ 20 bilhões no país. Em 2021, o mercado geek faturou R$ 21,5 bilhões em faturamento no Brasil,
somente com a venda de itens licenciados. Esse valor representa um crescimento de 5% em relação a 2020, 
mesmo diante do cenário de pandemia

              </p>
            </div>
            <div class="cart">
              <img src="img/bl-3.png" alt="" />
              <h5>11 de maio de 2023</h5>
              <h4>Porcentagem de consumidores</h4>
              <p>
Maior parte dos consumidores têm entre 22 e 39 anos A 10ª edição da pesquisa Geek Power, 
do Omelete Company em parceria com a MindMiners e o Winnin Insights,
revelou as principais características dos consumidores da comunidade nerd: 52% são homens,
enquanto as mulheres representam 48% do público; a maior parte dos consumidores (66%) têm entre 22 e 39 anos;
              </p>
            </div>
          </div>
        </section>
      </div>

     <!-- contat-section -->

     <section class="contact">
        <div class="contact-info">
          <div class="first-info">
            <h1>
              GEEK
              <div>STATION</div>
            </h1>
            <p>
              "A realidade e a unica coisa que e real"<br />
              j.j Haliday
            </p>
            <p><a href="#">geekstationOfc@gmail.com</a></p>

            <div class="social-icon">
              <a href="#"><i class="bx bxl-facebook"></i></a>
              <a href="#"><i class="bx bxl-twitter"></i></a>
              <a href="#"><i class="bx bxl-instagram"></i></a>
            </div>
          </div>
          <div class="second-info">
            <h4>Nossas Páginas</h4>
            <p><a href="#">Home</a></p>
            <p><a href="#">Dúvidas</a></p>
            <p><a href="#">Produtos</a></p>
            <p><a href="#">Contato</a></p>
          </div>

          <div class="third-info">
            <h4>Links Úteis</h4>
            <p><a href="#">Politica de Privacidade</a></p>
            <p>
              <a href="#"><p>Aviso Legal</p></a>
            </p>
            <p>
              <a href="#"><p>Termos de Uso</p></a>
            </p>
            <p>
              <a href="#"><p>Central de Atendimento</p></a>
            </p>
          </div>

          <div class="five">
            <h4>Sobre Nós</h4>
            <p>
              Explorando universos geek, nosso e-commerce oferece uma variedade
              de produtos e colecionáveis para satisfazer o herói ou a heroína
              dentro de você
            </p>
          </div>
        </div>
      </section>
      <div class="end-text">
        <p>
          &copy;Copyright 2024 - GS. Todos os direitos reservados em GeekStation
        </p>
      </div>
    </div>
    <script src="Js/java.js"></script>
  </body>
</html>
