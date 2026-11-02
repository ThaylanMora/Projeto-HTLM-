<?php
require_once '../model/DTO/usuarioDTO.php';
require_once '../model/DAO/usuarioDAO.php';

$idUsuario =  $_POST["idUsuario"];
$nomeUsuario = $_POST["nomeUsuario"];
$dtNascimento = $_POST["dtNascimento"];

$usuarioDTO = new UsuarioDTO;
$usuarioDTO->setIdUsu($idUsuario);
$usuarioDTO->setNomeUsu($nomeUsuario);
$usuarioDTO->setDtNascimentoUsu($dtNascimento);

var_dump($usuarioDTO);

$usuarioDAO = new UsuarioDAO();

$sucesso = $usuarioDAO->alterarUsuario($usuarioDTO);

if ($sucesso) {
  $msg = "Usuário alterado com sucesso!";
} else {
  $msg = "Aconteceu um problema na alteração de dados." . $sucesso;
}
echo "{$msg}";

?>