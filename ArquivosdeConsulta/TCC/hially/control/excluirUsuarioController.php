<?php

    require_once '../model/DTO/UsuarioDTO.php';
    require_once '../model/DAO/UsuarioDAO.php';

    error_reporting(0);

      $idUsu = $_GET['idUsu'];

      $usuarioDAO = new UsuarioDAO();
      
      $sucesso = $usuarioDAO->excluirUsuario($idUsu);


?>