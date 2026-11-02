<?php
include_once "../conexao/Conexao.php";
include_once "../model/Usuario.php";
include_once "../dao/UsuarioDAO.php";

//instancia as classes
$usuario = new Usuario();
$usuariodao = new UsuarioDAO();

//pega todos os dados passado por POST

$d = filter_input_array(INPUT_POST);

//se a operação for gravar entra nessa condição
if(isset($_POST['cadastrar'])){

    $usuario->setnome($d['nome']);
    $usuario->setemail($d['email']);
    $usuario->setsenha($d['senha']);
    $usuario->setperfil($d['perfil_idperfil']);
    $usuario->settelefone($d['telefone']);

    $usuariodao->create($usuario);

    header("Location: ../../");
} 
// se a requisição for editar
else if(isset($_POST['editar'])){
    $usuario->setnome($d['nome']);
    $usuario->setemail($d['email']);
    $usuario->setsenha($d['senha']);
    $usuario->setperfil($d['perfil']);
    $usuario->settelefone($d['telefone']);
    $usuario->setidusuario($d['idusuario']);
    // var_dump('Entrei aqui');
    // var_dump($usuario);die;
    $usuariodao->update($usuario);

    header("Location: ../../");
}
// se a requisição for deletar
else if(isset($_GET['del'])){
    // var_dump('Entrei aqui');
    $usuario->setidusuario($_GET['del']);
    
    // var_dump($usuario);die;
    $usuariodao->delete($usuario);

    header("Location: ../../");
}else{
    header("Location: ../../");
}