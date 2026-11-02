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

    // Consulta SQL para remover o usuário
    $sql = "DELETE FROM usuario WHERE idusuario = $idusuario";

    if ($conn->query($sql) === TRUE) {
        echo "Usuário removido com sucesso!";
    } else {
        echo "Erro ao remover usuário: " . $conn->error;
    }

    $conn->close();
} else {
    echo "ID do usuário não fornecido.";
}
?>
