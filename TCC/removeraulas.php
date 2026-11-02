<?php
// Verifique se o ID do usuário foi fornecido na solicitação
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Conexão com o banco de dados
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bd_academia";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifique a conexão
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Preparar a consulta SQL usando um prepared statement
    $sql = "DELETE FROM aula WHERE idaula = ?";

    $stmt = $conn->prepare($sql);

    // Vincular parâmetro
    $stmt->bind_param("i", $id); // "i" indica que $id é um inteiro

    // Executar a consulta
    if ($stmt->execute()) {
        echo "Aula removida com sucesso!";
    } else {
        echo "Erro ao remover usuário: " . $conn->error;
    }

    // Fechar statement e conexão
    $stmt->close();
    $conn->close();
} else {
    echo "ID do usuário não fornecido.";
}
?>
