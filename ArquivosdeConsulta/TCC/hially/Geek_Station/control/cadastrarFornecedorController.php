<?php
require_once '../../Geek_Station/Model/DTO/FornecedorDTO.php';
require_once '../../Geek_Station/Model/DAO/FornecedorDAO.php';

print_r($_POST);

//receber os dados do formulario
$nomeUsu = $_POST["nomeFor"];
$cpfUsu = $_POST["cnpjFor"];
$teleWhatsAppUsu = $_POST["telefoneFor"];
$emailUsu = $_POST["emailFor"];
$senhaUsu = $_POST["senhaFor"];
$ProdOfereFor = $_POST["ProdOfereFor"];
$ufUsu = $_POST["ufFor"];

//criar o objeto que gravará os dados no banco

//criar o objeto DTO para armazenar os dados do formulario
$FornecedorDTO = new FornecedorDTO();

$FornecedorDTO->setnomeFor($nomeFor);
$FornecedorDTO->setcnpjFor($cnpjFor);
$FornecedorDTO->settelefoneFor($telefoneFor);
$FornecedorDTO->setemailFor($emailFor);
$FornecedorDTO->setsenhaFor($senhaFor);
$FornecedorDTO->setufFor($ufFor);

//criar o objeto que gravará os dados no banco
$fornecedorDAO = new fornecedorDAO();

$sucesso = $fornecedorDAO->salvarFornecedor($fornecedorDTO);

if($sucesso){
    $msg  = "Cadastro realizado";
}else{
    $msg  = "Cadastro não realizado";
}
echo "{$msg}";

exit;


?>