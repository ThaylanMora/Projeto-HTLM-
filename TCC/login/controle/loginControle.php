<?php
//loginControle.php
require_once "../../login//modelo/Usuario.php";
require_once "../../login//modelo/DAO/UsuarioDAO.php";

$login = $_POST["usuario"];
$senha = $_POST["senha"];

$usuario= new Usuario("",$login,$senha);
$usuarioDAO = new UsuarioDAO();
$retorno = $usuarioDAO->logar($usuario);
if($retorno == null || empty($retorno)){
    header("location:../../login/visao/index.php?msg=Login/senha invalido");
}else{
    session_start();
    $_SESSION["perfil"] = $retorno["perfil"];
    $_SESSION["login"]  = $retorno["login"];
    $_SESSION["nome"]  = $retorno["nome"];
    header("location:../../login/visao/cadastro.php");
}

