<?php

include 'conexao.php';

// Verifica se os dados de cadastro foram enviados
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $modalidade = $_POST['modalidade'];
    $professor = $_POST['professor'];
    $data = $_POST['data'];
    $usuario_idusuario = 1;
    $professor_idprofessor = 27;
    $cliente_idcliente = 1;

    // Conexão com o banco de dados
    

    // Verifica se a conexão foi estabelecida com sucesso
    if ($conn->connect_error) {
        die("Erro na conexão: " . $conn->connect_error);
    }

    // Inserindo o novo usuário no banco de dados
    $sql = "INSERT INTO aula (modalidade, professor, `data`, professor_idprofessor, cliente_idcliente) VALUES ('$modalidade', '$professor', '$data', $professor_idprofessor, $cliente_idcliente)";
    
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Aula solicitada com sucesso!'); window.location.href = 'professor.php';</script>";        

    } else {
        echo "Erro ao cadastrar usuário: " . $conn->error;
    }

    $conn->close();
}
?>
