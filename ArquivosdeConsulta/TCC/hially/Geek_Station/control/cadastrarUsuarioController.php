<?php
require_once '../../Geek_Station/Model/DTO/UsuarioDTO.php';
require_once '../../Geek_Station/Model/DAO/UsuarioDAO.php';

print_r($_POST);


//receber os dados do formulario
$nomeUsu = $_POST["nomeUsu"];
$cpfUsu = $_POST["cpfUsu"];
//$dtNascimentoUsu = $_POST["dtNascimento"];
$enderecoUsu = $_POST["enderecoUsu"];
$complementoUsu = $_POST["complementoUsu"];
$cidadeUsu = $_POST["cidadeUsu"];
$teleWhatsAppUsu = $_POST["teleWhatsAppUsu"];
$emailUsu = $_POST["emailUsu"];
$senhaUsu = $_POST["senhaUsu"];
$ufUsu = $_POST["ufUsu"];

echo "{$nomeUsu}";

//criar o objeto que gravará os dados no banco

//criar o objeto DTO para armazenar os dados do formulario
$usuarioDTO = new UsuarioDTO();

$usuarioDTO->setnomeUsu($nomeUsu);
//$usuarioDTO->setdtNascimentoUsu($dtNascimentoUsu);
$usuarioDTO->setcpfUsu($cpfUsu);
$usuarioDTO->setenderecoUsu($enderecoUsu);
$usuarioDTO->setcomplementoUsu($complementoUsu);
$usuarioDTO->setcidadeUsu($cidadeUsu);
$usuarioDTO->setteleWhatsAppUsu($teleWhatsAppUsu);
$usuarioDTO->setemailUsu($emailUsu);
$usuarioDTO->setsenhaUsu($senhaUsu);
$usuarioDTO->setufUsu($ufUsu);

//criar o objeto que gravará os dados no banco
$usuarioDAO = new UsuarioDAO();

$sucesso = $usuarioDAO->salvarUsuario($usuarioDTO);

if($sucesso){
    $msg  = "Cadastro realizado";
}else{
    $msg  = "Cadastro não realizado";
}
echo "{$msg}";

exit;




?>