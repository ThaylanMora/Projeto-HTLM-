<?php
require_once '../../Geek_Station/Model/DTO/UsuarioDTO.php';
require_once '../../Geek_Station/Model/DAO/UsuarioDAO.php';

// Captura os dados do POST
$idUsu = $_POST["idUsu"];
$nomeUsu = $_POST["nomeUsu"];
$dtNascimentoUsu = $_POST["dtNascimentoUsu"];
$cpfUsu = $_POST["cpfUsu"];
$enderecoUsu = $_POST["enderecoUsu"];
$complementoUsu = $_POST["complementoUsu"];
$cidadeUsu = $_POST["cidadeUsu"];
$teleWhatsAppUsu = $_POST["teleWhatsAppUsu"];
$emailUsu = $_POST["emailUsu"];
$senhaUsu = $_POST["senhaUsu"];
$ufUsu = $_POST["ufUsu"];

// Cria uma nova instância de UsuarioDTO
$usuarioDTO = new UsuarioDTO();
$usuarioDTO->setIdUsu($idUsu);
$usuarioDTO->setNomeUsu($nomeUsu);
//$usuarioDTO->setDtNascimentoUsu($dtNascimentoUsu);
$usuarioDTO->setCpfUsu($cpfUsu);
$usuarioDTO->setEnderecoUsu($enderecoUsu);
$usuarioDTO->setComplementoUsu($complementoUsu);
$usuarioDTO->setCidadeUsu($cidadeUsu);
$usuarioDTO->setTeleWhatsAppUsu($teleWhatsAppUsu);
$usuarioDTO->setEmailUsu($emailUsu);
$usuarioDTO->setSenhaUsu($senhaUsu);
$usuarioDTO->setUfUsu($ufUsu);

var_dump($usuarioDTO);

// Cria uma nova instância de UsuarioDAO
$usuarioDAO = new UsuarioDAO();

// Chama o método alterarUsuario
$sucesso = $usuarioDAO->alterarUsuario($usuarioDTO);

if ($sucesso) {
  $msg = "Usuário alterado com sucesso!";
} else {
  $msg = "Aconteceu um problema na alteração de dados.";
}
echo "{$msg}";
?>
