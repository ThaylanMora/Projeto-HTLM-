<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escolha do Plano</title>
    <link rel="stylesheet" href="css/stylesPlano.css">
</head>
<body>

<div class="main">
    <header class="header">
            <a href="index.html" class="logo"><span>WOLF</span>GYM</a>
    
            <div id="menu-btn" class="fas fa-bars"></div>
    
            <nav class="navbar">
                <a href="index.html">Inicio</a>
                <a href="#about">Sobre</a>
                <a href="#pricing">Preços</a>
                    <a href="logout.php" class="btn">Sair</a>

            </nav>
        </header>
            </div>
    
    <div class="container">
        <h2>Plano</h2>
            <div class="form-group">
                <label for="cartao">Número do Cartão de Crédito:</label>
                <input type="text" id="cartao" name="cartao" required>
            </div>
            <div class="form-group">
                <label for="validade">Validade do Cartão:</label>
                <input type="text" id="validade" name="validade" placeholder="MM/AAAA" required>
            </div>
            <div class="form-group">
                <label for="cvv">Código de Segurança (CVV):</label>
                <input type="text" id="cvv" name="cvv" required>
            </div>
            <div class="form-group">
                <label for="genero">Gênero:</label>
                <select id="genero" name="genero" required>
                    <option value="">Selecione...</option>
                    <option value="masculino">Masculino</option>
                    <option value="feminino">Feminino</option>
                    <option value="outro">Outro</option>
                </select>
            </div>
            <div class="form-group">
                <label for="unidade">Unidade:</label>
                <select id="unidade" name="unidade" required>
                    <option value="">Selecione...</option>
                    <option value="taguatinga">Taguatinga</option>
                    <option value="ceilandia">Ceilândia</option>
                    <option value="riacho-fundo">Riacho Fundo</option>
                </select>
            </div>
            <div>
                <button><a style="text-decoration: none; color: white;" href="formulario1.php">Finalizar</a></button>
              </div>
        </form>
    </div>
</div>

</body>
</html>

<script src="js/script3.js"></script>