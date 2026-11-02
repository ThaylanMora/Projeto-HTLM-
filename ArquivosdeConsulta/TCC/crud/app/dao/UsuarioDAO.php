<?php
/*
    Criação da classe Usuario com o CRUD
*/
class UsuarioDAO{
    
    public function create(Usuario $usuario) {
        try {
            $sql = "INSERT INTO usuario (                   
                  nome,email,senha,telefone, perfil_idperfil)
                  VALUES (
                  :nome,:email,:senha,:telefone, :perfil)";

            $p_sql = Conexao::getConexao()->prepare($sql);
            $p_sql->bindValue(":nome", $usuario->getnome());
            $p_sql->bindValue(":email", $usuario->getemail());
            $p_sql->bindValue(":senha", $usuario->getsenha());
            $p_sql->bindValue(":perfil", $usuario->getperfil());
            $p_sql->bindValue(":telefone", $usuario->gettelefone());
            
            return $p_sql->execute();
        } catch (Exception $e) {
            print "Erro ao Inserir usuario <br>" . $e . '<br>';
        }
    }

    public function read() {
        try {
            $sql = "SELECT * FROM usuario where idusuario !=1 order by nome asc";
            $result = Conexao::getConexao()->query($sql);
            $lista = $result->fetchAll(PDO::FETCH_ASSOC);
            $f_lista = array();
            foreach ($lista as $l) {
                $f_lista[] = $this->listaUsuarios($l);
            }
            return $f_lista;
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar Buscar Todos." . $e;
        }
    }
     
    public function update(Usuario $usuario) {
        try {
            $sql = "UPDATE usuario set
                  nome=:nome,
                  email=:email,
                  senha=:senha,
                  perfil_idperfil=:perfil,
                  telefone= :telefone                                                               
                  WHERE idusuario = :idusuario";
            $p_sql = Conexao::getConexao()->prepare($sql);
            $p_sql->bindValue(":nome", $usuario->getnome());
            $p_sql->bindValue(":email", $usuario->getemail());
            $p_sql->bindValue(":senha", $usuario->getsenha());
            $p_sql->bindValue(":perfil", $usuario->getperfil());
            $p_sql->bindValue(":telefone", $usuario->gettelefone());
            $p_sql->bindValue(":idusuario", $usuario->getidusuario());
            return $p_sql->execute();
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar fazer Update<br> $e <br>";
        }
    }

    public function delete(Usuario $usuario) {
        try {
            $idusuario=$usuario->getidusuario();
            $sql = "DELETE FROM usuario WHERE idusuario =$idusuario ";
            $p_sql = Conexao::getConexao()->prepare($sql);
            $p_sql->bindValue(":idusuario", $usuario->getidusuario());
            return $p_sql->execute();
        } catch (Exception $e) {
            echo "Erro ao Excluir usuario<br> $e <br>";
        }
    }


    

    private function listaUsuarios($row) {
        $usuario = new Usuario();
        $usuario->setidusuario($row['idusuario']);
        $usuario->setnome($row['nome']);
        $usuario->setemail($row['email']);
        $usuario->setsenha($row['senha']);
        $usuario->setperfil($row['perfil_idperfil']);
        $usuario->settelefone($row['telefone']);

        return $usuario;
    }
 }

 ?>