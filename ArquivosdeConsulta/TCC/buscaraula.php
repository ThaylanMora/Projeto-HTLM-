<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página do Administrador</title>
</head>
<div class="col-md-9">
                <!-- Botão para sair do sistema -->
                <div class="d-flex justify-content-between align-items-center">

                </div>
                <!-- Fim botão -->
                <div id="listaAulas" class="mt-4">
<?php
// Conecte-se ao banco de dados
$conn = new mysqli("localhost", "root", "", "bd_academia");

// Verifique se a conexão foi estabelecida com sucesso
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}


// Consulta SQL para buscar os usuários
$sql = "SELECT * FROM aula";
$result = $conn->query($sql);

// Se houver usuários, exiba-os em formato HTML
if ($result->num_rows > 0) {
    echo "<h2>Aulas:</h2><ul>";
    while ($row = $result->fetch_assoc()) {
        echo "<li>" . $row["modalidade"] . " - " . $row["data"] . " <button class='btn-remover btn-remover:hover'onclick='removeraulas(" . $row["idaula"] . ")'>Cancelar Aula</button></li>";
    }
    echo "</ul>";
}
 else {
    echo "Nenhum usuário encontrado.";
}

// Feche a conexão com o banco de dados
$conn->close();
?>
</div>
<script>

function removeraulas(id) {
    if (confirm("Tem certeza que deseja remover esta aula?")) {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                exibirListaAulas();
            }
        };
        xhr.open("GET", "removeraulas.php?id=" + id, true);
        xhr.send();
    }
}

function exibirListaAulas() {
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    document.getElementById("listaAulas").innerHTML = xhr.responseText;
                }
            };
            xhr.open("GET", "buscaraula.php", true);
            xhr.send();
        }
</script>   
</body>
</html>
