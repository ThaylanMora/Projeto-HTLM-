<?php

include "Conexao.php";
require_once "../model/DTO/UsuarioDTO.php";

class UsuarioDAO
{

    public $pdo = null;
    public function __construct()
    {
        $this->pdo = Conexao::getInstance();
    }
    // INSERT
    public function salvarUsuario(UsuarioDTO $usuarioDTO)
    {
        //echo "{$usuarioDTO->getDtNascimentoUsu()}";
       
        try {
            $sql = "INSERT INTO usuario (nomeUsu,dtNascimentoUsu,emailUsu,
            senhaUsu,perfilUsu,situacaoUsu) 
            VALUES (?,?,?,?,?,?)";
            $stmt = $this->pdo->prepare($sql);

            $nomeUsuario = $usuarioDTO->getNomeUsu();
            $dtNascimentoUsu = $usuarioDTO->getDtNascimentoUsu();
            $emailUsu = $usuarioDTO->getEmailUsu();
            $senhaUsu = $usuarioDTO->getSenhaUsu();
            $perfilUsu = $usuarioDTO->getPerfilUsu();
            $situacaoUsu = $usuarioDTO->getSituacaoUsu();
            
            //var_dump($dtNascimentoUsu);

            $stmt->bindValue(1, $nomeUsuario);
            $stmt->bindValue(2, $dtNascimentoUsu);
            $stmt->bindValue(3, $emailUsu);
            $stmt->bindValue(4, $senhaUsu);
            $stmt->bindValue(5, $perfilUsu);
            $stmt->bindValue(6, $situacaoUsu);

            $retorno = $stmt->execute();
            return $retorno;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }


    //LISTAR USUÁRIOS
    public function listarUsuarios()
    {
        try {
            $sql = "SELECT * FROM usuario ";
            $stmt = $this->pdo->prepare($sql);
            

            $stmt->execute();

            $retorno = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $retorno;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
//excluir usuários
    public function excluirUsuario($idUsuario) {
            try {
                $sql = "DELETE FROM usuario
                WHERE idUsu = ?";
                
                $stmt = $this->pdo->prepare($sql);
                $stmt->bindValue(1, $idUsuario);

                
                $retorno = $stmt->execute();
               
                return $retorno;
             } catch (PDOException $exc) {
                echo $exc->getMessage();
                
             }
          }


    public function alterarUsuario(UsuarioDTO $usuarioDTO)
    {

        try {
            $sql = "UPDATE usuario1 SET nomeUsu=?
            WHERE idUsu= ?";
            $stmt = $this->pdo->prepare($sql);

            $idUsuario = $usuarioDTO->getIdUsu();
            $nomeUsuario = $usuarioDTO->getNomeUsu();


            $stmt->bindValue(1, $nomeUsuario);
            $stmt->bindValue(2, $idUsuario);

            $retorno =  $stmt->execute();

            if($retorno){
                echo "Sucesso";
            }else{
                echo "erro";
            }

            return $retorno;
        } catch (PDOException $exc) {
            echo $exc->getMessage();           
        }
    }

     //PesquisarUsuarioPorId
 public function pesquisarUsuarioPorId($idUsuario) {
    try {
        $sql = "SELECT * FROM usuario WHERE idUsu = {$idUsuario}; ";
        $stmt = $this->pdo->prepare($sql);
        
        $stmt->execute();
		  $retorno = $stmt->fetch(PDO::FETCH_ASSOC); 
        return $retorno;
     } catch (PDOException $exc) {
        echo $exc->getMessage();  
     }
  }
//
// MD5('123')
public function validarLogin($emailUsu,$senhaUsu) {
    //echo "{$emailUsu}";
    //echo "{$senhaUsu}";
    try {
        $sql = "SELECT * FROM usuario WHERE emailUsu = '{$emailUsu}' AND
         senhaUsu = '{$senhaUsu}'; ";
        $stmt = $this->pdo->prepare($sql);
        
        $stmt->execute();
		  $retorno = $stmt->fetch(PDO::FETCH_ASSOC); 
        return $retorno;
     } catch (PDOException $exc) {
        echo $exc->getMessage();  
     }
  }
 

}
