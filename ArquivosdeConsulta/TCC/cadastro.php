<?php

include 'conexao.php';

// Verifica se os dados de cadastro foram enviados
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $senha = $_POST['senha'];

    // Conexão com o banco de dados
    

    // Verifica se a conexão foi estabelecida com sucesso
    if ($conn->connect_error) {
        die("Erro na conexão: " . $conn->connect_error);
    }

    // Inserindo o novo usuário no banco de dados
    $sql = "INSERT INTO usuario (nome, email, telefone, senha, perfil_idperfil) VALUES ('$nome', '$email', '$telefone', '$senha', 2)";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Cadastro realizado com sucesso!'); window.location.href = 'login.html';</script>";        

    } else {
        echo "Erro ao cadastrar usuário: " . $conn->error;
    }

    $conn->close();
}
?>
