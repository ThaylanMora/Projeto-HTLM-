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
        echo "<li>" . $row["modalidade"] . " - " . $row["data"] . " - " . $row["profesor"] . "</li>";
    }
    echo "</ul>";
} else {
    echo "Nenhum usuário encontrado.";
}

// Feche a conexão com o banco de dados
$conn->close();
?>
