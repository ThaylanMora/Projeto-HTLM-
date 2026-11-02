<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendar Aula</title>
    <link rel="stylesheet" href="css/styles_login.css" />
    <script type="text/javascript">
      function mostraAlerta(elemento)
      {
          let modalidadeSelecionada=elemento.options[elemento.selectedIndex].getAttribute('modalidade');
          document.getElementById('modalidade').value=modalidadeSelecionada;
      }
    </script>
</head>
<header class="header">
    <a href="index.html" class="logo"><span>WOLF</span>GYM</a>

    <div id="menu-btn" class="fas fa-bars"></div>
    </header>

<body>
<div class="container">
      <h2>Agendar</h2>
      <form id="agendaForm" action="processar_agendar.php" method="post">
        <select name="professor" id="professor" onchange="javascript:mostraAlerta(this);">
          <option value=''>.:: Selecione Professor ::.</option>
        <?php
        // Conecte-se ao banco de dados
        $conn = new mysqli("localhost", "root", "", "bd_academia");
        
        // Verifique se a conexão foi estabelecida com sucesso
        if ($conn->connect_error) {
          die("Erro na conexão: " . $conn->connect_error);
        }
        
        // Consulta SQL para buscar os usuários
        $sql = "SELECT * FROM professor";
        $result = $conn->query($sql);
        
        // Se houver usuários, exiba-os em formato HTML
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            echo $row["professor"];
            echo "<option value='".$row['idprofessor']."' modalidade='".$row['aula']."'>". $row['professor'] ."</option>";
          }
        }
        
        // Feche a conexão com o banco de dados
        $conn->close();
        ?>
        </select>
        <br/>
        <input type="text" name="modalidade" id="modalidade" placeholder="modalidade" required />
        <br/>
        <input type="date" name="data" placeholder="data" required />
        <input type="text" name="nome" placeholder="nome" required />
        <button type="submit">Solicitar</button>
      </form>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
