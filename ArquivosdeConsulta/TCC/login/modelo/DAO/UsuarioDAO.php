<?php
//UsuarioDAO.php
class UsuarioDAO{
    //metodo para  verificar login no banco
    public function logar(usuario $usuario){
        try{
            $conexao = new PDO('mysql:host=localhost;dbname=TCC',
            "root", "");//criando query para consultar no banco de dados
            $sql = "SELECT * FROM usuario where senha=? and login=? ";
            $stmt = $conexao->prepare($sql);//prepara sql a ser executada
            $stmt->bindValue(1,$usuario->getSenha());//associa o valor senha a 1a interrogação
            $stmt->bindValue(2,$usuario->getLogin());//associa o valor senha a 2a interrogação?
            $stmt->execute();//executa comando sql
            $retorno = $stmt->fetch(PDO::FETCH_ASSOC);
            return $retorno;
        }catch(PDOException $e){
           echo $e->getMessage();
        }//fim do try
    }//fim do metodo logar
    //metodo listar usuarios    
    public function listarUsuarios($filtro){
        try{
            $conexao = new PDO('mysql:host=localhost;dbname=TCC',
            "root", "");//criando query para consultar no banco de dados
            $sql = "SELECT * FROM usuario";
            $stmt = $conexao->prepare($sql);//prepara sql a ser executada
            $stmt->execute();//executa comando sql
            $retorno = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $retorno;
        }catch(PDOException $e){
           echo $e->getMessage();
        }//fim do try
    }//fim do metodo listar usuarios
   //metodo registrar usuarios    
    public function registrar(Usuario $usuario){
        try{
            $conexao = new PDO('mysql:host=localhost;dbname=TCC',
            "root", "");//criando query para consultar no banco de dados
            $sql = "INSERT INTO usuario(nome, login, senha, perfil) 
            values(?,?,?,?)";
            $stmt = $conexao->prepare($sql);//prepara sql a ser executada
            $stmt->bindValue(1,$usuario->getNome () );
            $stmt->bindValue(2,$usuario->getLogin() );
            $stmt->bindValue(3,$usuario->getSenha() );
            $stmt->bindValue(4,$usuario->getPerfil());
            $retorno = $stmt->execute();
            return $retorno;
        }catch(PDOException $e){
           echo $e->getMessage();
        }//fim do try
    }//fim do metodo listar usuarios    
}//fim da classe UsuarioDAO