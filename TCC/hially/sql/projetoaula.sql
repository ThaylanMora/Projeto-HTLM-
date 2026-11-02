-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08/05/2024 às 19:17
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projetoaula`
--
DROP DATABASE IF EXISTS `projetoaula`;
CREATE DATABASE IF NOT EXISTS `projetoaula`;
USE `projetoaula`;
-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `idUsu` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `nomeUsu` varchar(150) NOT NULL,
  `cpfUsu` varchar(14) DEFAULT NULL,
  `dtNascimentoUsu` date DEFAULT NULL,
  `telefoneWhatsApp` varchar(20) DEFAULT NULL,
  `emailUsu` varchar(150) DEFAULT NULL,
  `senhaUsu` varchar(50) DEFAULT NULL,
  `perfilUsu` varchar(15) DEFAULT NULL,
  `situacaoUsu` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
--
-- Despejando dados para a tabela `usuario`
--
INSERT INTO `usuario` (`idUsu`, `nomeUsu`, `cpfUsu`, `dtNascimentoUsu`, `telefoneWhatsApp`, `emailUsu`, `senhaUsu`, `perfilUsu`, `situacaoUsu`) 
VALUES 
(NULL, 'ADMINISTRADOR DO SISTEMA', NULL, NULL, NULL, 'adm@gmail.com', MD5('123'), 'Administrador', 'Ativo'), 
(NULL, 'José Funcionário', '222.222.222-44', '2000-11-22', '(61)98888-8888', 'funcionario@gmail.com', MD5('123'), 'Funcionário', 'Ativo'),
(NULL, 'Maria Cliente', '333.333.333-21', '1990-01-12', '(62)98777-7676', 'maria@gmail.com', MD5('123'), 'Funcionário', 'Ativo');

INSERT INTO `usuario` (`idUsu`, `nomeUsu`, `cpfUsu`, `dtNascimentoUsu`, `telefoneWhatsApp`, `emailUsu`, `senhaUsu`, `perfilUsu`, `situacaoUsu`) 
VALUES (NULL, 'Marcos Teste 2', '777.777.777-89', '1998-07-25', '(61)98777-6543', 'marcos@gmail.com', MD5('123'), 'Cliente', 'Ativo');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `usuario`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
