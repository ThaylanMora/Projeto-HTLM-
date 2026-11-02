<?php
    include 'Conexao.php';
    require_once('../../Geek_Station/Model/DTO/FornecedorDTO.php');    
    
    class FornecedorDAO{
        public $pdo = null;

        public function __construct(){
            $this->pdo = Conexao::getInstance();
        }
        public function salvarFornecedor(FornecedorDTO $fornecedorDTO){

            try{
                $sql = "INSERT INTO `fornecedor`(`nomeFor`, `telefoneFor`, `emailFor`, `prodOfereFor`, `senhaFor`, `cnpjFor`, `ufFor`) VALUES (  (?,?,?,?,?,?,?))";
              
                $stmt = $this->pdo->prepare($sql);
    
                $nomeFor = $fornecedorDTO->getnomeFor();
                $telefoneFor = $fornecedorDTO->gettelefoneFor();
                $emailFor = $fornecedorDTO->getemailFor();
                $prodOfereFor = $fornecedorDTO->getprodOfereFor();
                $senhaFor = $fornecedorDTO->getsenhaFor();
                $cnpjFor = $fornecedorDTO->getcnpjFor();
                $ufFor = $fornecedorDTO->getufFor();

                
                $stmt->bindValue(1, $nomeFor);
                $stmt->bindValue(2, $telefoneFor);
                $stmt->bindValue(3, $emailFor);
                $stmt->bindValue(4, $prodOfereFor);
                $stmt->bindValue(5, $senhaFor);
                $stmt->bindValue(6, $cnpjFor);
                $stmt->bindValue(7, $ufFor);

                
                $retorno = $stmt->execute();
                return  $retorno;

            }catch(PDOException $exc){
                echo $exc->getMessage();
            }

        }
                    //LISTAR FORNECEDORES
    public function listarFornecedor()
    {
        try {
            $sql = "SELECT * FROM fornecedor ";
            $stmt = $this->pdo->prepare($sql);
            

            $stmt->execute();

            $retorno = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $retorno;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }
//excluir usuários
    public function excluirFornecedor($idFornecedor) {
            try {
                $sql = "DELETE FROM usuario
                WHERE idUsu = ?";
                
                $stmt = $this->pdo->prepare($sql);
                $stmt->bindValue(1, $idFornecedor);

                
                $retorno = $stmt->execute();
               
                return $retorno;
             } catch (PDOException $exc) {
                echo $exc->getMessage();
                
             }
          }


    public function alterarFornecedor(FornecedorDTO $fornecedorDTO)
    {

        try {
            $sql = "UPDATE fornecedor1 SET nomeFor=?
            WHERE idFor= ?";
            $stmt = $this->pdo->prepare($sql);

            $idFor = $fornecedorDTO->getidFor();
            $nomeFor = $fornecedorDTO->getnomeFor();


            $stmt->bindValue(1, $idFor);
            $stmt->bindValue(2, $nomeFor);

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
 public function pesquisarUsuarioPorId($idFor) {
    try {
        $sql = "SELECT * FROM fornecedor WHERE idFor = {$idFor}; ";
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
public function validarLogin($emailFor,$senhaFor) {
    //echo "{$emailUsu}";
    //echo "{$senhaUsu}";
    try {
        $sql = "SELECT * FROM usuario WHERE emailUsu = '{$emailFor}' AND
         senhaUsu = '{$senhaFor}'; ";
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