-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09-Maio-2024 às 21:44
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

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

-- --------------------------------------------------------
DROP DATABASE `projetoaula`;
CREATE DATABASE `projetoaula`;
USE `projetoaula`;
--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `idUsu` int(11) NOT NULL,
  `nomeUsu` varchar(150) NOT NULL,
  `cpfUsu` varchar(14) DEFAULT NULL,
  `dtNascimentoUsu` date DEFAULT NULL,
  `telefoneWhatsApp` varchar(20) DEFAULT NULL,
  `emailUsu` varchar(150) DEFAULT NULL,
  `senhaUsu` varchar(50) DEFAULT NULL,
  `perfilUsu` varchar(15) DEFAULT NULL,
  `situacaoUsu` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idUsu`, `nomeUsu`, `cpfUsu`, `dtNascimentoUsu`, `telefoneWhatsApp`, `emailUsu`, `senhaUsu`, `perfilUsu`, `situacaoUsu`) VALUES
(1, 'ADMINISTRADOR DO SISTEMA', NULL, NULL, NULL, 'adm@gmail.com', '202cb962ac59075b964b07152d234b70', 'Administrador', 'Ativo'),
(2, 'José Funcionário', '222.222.222-44', '2000-11-22', '(61)98888-8888', 'funcionario@gmail.com', '202cb962ac59075b964b07152d234b70', 'Funcionário', 'Ativo'),
(3, 'Maria Cliente', '333.333.333-21', '1990-01-12', '(62)98777-7676', 'maria@gmail.com', '202cb962ac59075b964b07152d234b70', 'Funcionário', 'Ativo'),
(4, 'Marcos Teste 2', '777.777.777-89', '1998-07-25', '(61)98777-6543', 'marcos@gmail.com', '202cb962ac59075b964b07152d234b70', 'Cliente', 'Ativo');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsu`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
