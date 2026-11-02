<?php
    include 'Conexao.php';
    
    require_once('../../Geek_Station/Model/DTO/UsuarioDTO.php');

  

    class UsuarioDAO{
        public $pdo = null;

        public function __construct(){
            $this->pdo = Conexao::getInstance();
        }
        public function salvarUsuario(UsuarioDTO $usuarioDTO){

            try{
                $sql = "INSERT INTO usuario (nomeUsu, cpfUsu,enderecoUsu,complementoUsu,cidadeUsu,teleWhatsAppUsu,emailUsu,senhaUsu,ufUsu) VALUES (?,?,?,?,?,?,?,?,?)";

                $stmt = $this->pdo->prepare($sql);
    
                $nomeUsu = $usuarioDTO->getnomeUsu();
                $cpfUsu = $usuarioDTO->getcpfUsu();
                //$dtNascimentoUsu = $usuarioDTO->getdtNascimentoUsu();
                $enderecoUsu = $usuarioDTO->getenderecoUsu();
                $complementoUsu = $usuarioDTO->getcomplementoUsu();
                $cidadeUsu = $usuarioDTO->getcidadeUsu();
                $teleWhatsAppUsu = $usuarioDTO->getteleWhatsAppUsu();
                $emailUsu = $usuarioDTO->getemailUsu();
                $senhaUsu = $usuarioDTO->getsenhaUsu();
                $ufUsu = $usuarioDTO->getufUsu();
    
                $stmt->bindValue(1, $nomeUsu);
                $stmt->bindValue(2, $cpfUsu);
                //$stmt->bindValue(3, $dtNascimentoUsu);
                $stmt->bindValue(3, $enderecoUsu);
                $stmt->bindValue(4, $complementoUsu);
                $stmt->bindValue(5, $cidadeUsu);
                $stmt->bindValue(6, $teleWhatsAppUsu);
                $stmt->bindValue(7, $emailUsu);
                $stmt->bindValue(8, $senhaUsu);
                $stmt->bindValue(9, $ufUsu);
                
                
                $retorno = $stmt->execute();
                return  $retorno;

            }catch(PDOException $exc){
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

?>