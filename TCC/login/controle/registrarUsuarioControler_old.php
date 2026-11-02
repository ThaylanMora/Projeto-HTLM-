<?php
//loginControle.php
require_once "../../login/modelo/Usuario.php";
require_once "../../login/modelo/DAO/UsuarioDAO.php";
//recurando inputs do formulário
$login = $_POST["usuario"];
$senha = $_POST["senha"];
$nome = $_POST["nome"];
$perfil = $_POST["perfil"];

$usuario= new Usuario($nome,$login,$senha); //criando entidade usuario
$usuario->setPerfil($perfil);//setando perfil

$usuarioDAO = new UsuarioDAO(); // criando objeto DAO de usuario
$retorno = $usuarioDAO->registrar($usuario);
if($retorno == null || $retorno==0){
    //se der errado redireciona para o formulario de registro
    header("location:../visao/registro.php?msg=Erro");
}else{
    //se der certo redireciona para listagem
    header("location:../visao/lista_usuarios.php?msg=registro com sucesso");
}

