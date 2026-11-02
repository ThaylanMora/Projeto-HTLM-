<?php

class Usuario{
    
    private $idusuario;
    private $nome;
    private $senha;
    private $email;
    private $perfil;
    private $telefone;
    
    function getidusuario() {
        return $this->idusuario;
    }

    function getnome() {
        return $this->nome;
    }

    function getemail() {
        return $this->email;
    }
    function getsenha() {
        return $this->senha;
    }

    function getperfil() {
        return $this->perfil;
    }

    function gettelefone() {
        return $this->telefone;
    }

    function setidusuario($idusuario) {
        $this->idusuario = $idusuario;
    }

    function setnome($nome) {
        $this->nome = $nome;
    }

    function setemail($email) {
        $this->email = $email;
    }

    function setsenha($senha) {
        $this->senha = $senha;
    }
    function setperfil($perfil) {
        $this->perfil = $perfil;
    }
    

    function settelefone($telefone) {
        $this->telefone = $telefone;
    }


    
}