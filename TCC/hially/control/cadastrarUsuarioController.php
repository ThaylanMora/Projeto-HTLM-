<?php

    require_once '../model/DTO/UsuarioDTO.php';
    require_once '../model/DAO/UsuarioDAO.php';

 
      $nomeUsu = strip_tags($_POST["nomeUsu"]);
      $dtNascimentoUsu = ($_POST["dtNascimentoUsu"]);
      $dataNasc = new DateTime($dtNascimentoUsu);
      $dtFinal = $dataNasc->format('Y-m-d');
      
      $emailUsu = strip_tags($_POST["emailUsu"]); 
      $senhaUsu = MD5($_POST["senhaUsu"]);
      $perfilUsu = strip_tags($_POST["perfilUsu"]); 
      $situacaoUsu = strip_tags($_POST["situacaoUsu"]); 

      echo "{$dtFinal}";

      $usuarioDTO = new UsuarioDTO();
      $usuarioDTO->setNomeUsu($nomeUsu);
      $usuarioDTO->setDtNascimentoUsu($dtFinal);
      $usuarioDTO->setEmailUsu($emailUsu);
      $usuarioDTO->setSenhaUsu($senhaUsu);
      $usuarioDTO->setPerfilUsu($perfilUsu);
      $usuarioDTO->setSituacaoUsu($situacaoUsu);

      //echo "{$usuarioDTO->getDtNascimentoUsu()}";
      $usuarioDAO = new UsuarioDAO();
            
      $sucesso = $usuarioDAO->salvarUsuario($usuarioDTO);

      var_dump($usuarioDTO);
    
      if($sucesso){
        $msg = "Usuário cadastrado com sucesso!";   
      } else {
        $msg = "Aconteceu um problema no cadastramento<br>".$sucesso;
      }
      echo "{$msg}";

?>

