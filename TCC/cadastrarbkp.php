<?php
// Aqui você realiza a validação e o processamento do formulário de cadastro de administradores
// Lembre-se de fazer a conexão com o banco de dados e inserir os dados recebidos do formulário

// Exemplo básico de conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bd_academia";

// Crie uma conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifique a conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare e execute a consulta SQL para inserir o novo administrador
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$senha = $_POST['senha'];

$aula = $_POST['aula'];
$horario = $_POST['horario'];
session_start();
$idusuario=$_SESSION['idusuario'];

$is_admin = 1;

$sql = "INSERT INTO usuario (nome, email, telefone, senha, perfil_idperfil )
        VALUES ('$nome', '$email', '$telefone', '$senha', 3)";


if ($conn->query($sql) === TRUE) {

    $sqlInsertProf = "INSERT INTO `professor`(`professor`, `aula`, `horario`, `usuario_idusuario`) 
    VALUES ('$nome', '$aula', '$horario', $idusuario)";

    if ($conn->query($sqlInsertProf) === TRUE) {
        echo "<script>alert('Novo professor cadastrado com sucesso!'); window.location.href = 'login.html';</script>"; 
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
