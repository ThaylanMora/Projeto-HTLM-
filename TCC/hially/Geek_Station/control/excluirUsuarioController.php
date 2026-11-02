<?php

    require_once '../../Geek_Station/Model/DTO/UsuarioDTO.php';
    require_once '../../Geek_Station/Model/DAO/UsuarioDAO.php';

    error_reporting(0);

      $idUsu = $_GET['idUsu'];

      $usuarioDAO = new UsuarioDAO();
      
      $sucesso = $usuarioDAO->excluirUsuario($idUsu);


?>