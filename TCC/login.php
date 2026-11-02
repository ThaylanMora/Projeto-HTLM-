<?php
session_start();

include 'conexao.php';

// Verifica se os dados de login foram enviados
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    // Conexão com o banco de dados
    //$conn = new mysqli("localhost", "usuario", "senha", "nome_do_banco_de_dados");

    // Verifica se a conexão foi estabelecida com sucesso
    if ($conn->connect_error) {
        die("Erro na conexão: " . $conn->connect_error);
    }

    // Consulta ao banco de dados para verificar se o usuário existe
    $sql = "SELECT * FROM usuario WHERE nome='$nome' AND senha='$senha'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $_SESSION['isLoggedIn'] = true;
        $_SESSION['nome'] = $row['nome'];
        $_SESSION['perfil_idperfil'] = $row['perfil_idperfil'];
        $_SESSION['idusuario'] = $row['idusuario'];
    
        if ($row['perfil_idperfil'] == 1) {//administrador
            header("Location: admin.php");
        }
        else if ($row['perfil_idperfil'] == 3) {//professor
            header("Location: professor.php");
        } else {//cliente
            echo "Usuário não é administrador.";
            header("Location: lojaLogado.php");
        }
    } else {
        echo "Nome de usuário ou senha incorretos.";
    }

    $conn->close();
}
?>
