-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09-Maio-2024 às 20:49
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
-- Banco de dados: `gs`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedor`
--

CREATE TABLE `fornecedor` (
  `idFor` int(11) NOT NULL,
  `nomeFor` varchar(150) NOT NULL,
  `telefoneFor` varchar(20) NOT NULL,
  `emailFor` varchar(150) DEFAULT NULL,
  `ProdOfereFor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `fornecedor`
--

INSERT INTO `fornecedor` (`idFor`, `nomeFor`, `telefoneFor`, `emailFor`, `ProdOfereFor`) VALUES
(1, 'AnimesGeek', '(11)98145-5985', 'animesgeek1@gmail.com', 'manga'),
(2, 'Toei', '(21)5678-3255', 'toei1@gmail.com', 'manga');

-- --------------------------------------------------------

--
-- Estrutura da tabela `itemproduto`
--

CREATE TABLE `itemproduto` (
  `pedido_idPed` int(11) NOT NULL,
  `produto_idPro` int(11) NOT NULL,
  `quantItemProd` float(10,3) DEFAULT 0.000,
  `valorUnitarioProd` decimal(13,2) DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE `pedido` (
  `idPed` int(11) NOT NULL,
  `dataHoraPed` datetime DEFAULT NULL,
  `valorTotalPed` decimal(13,2) NOT NULL DEFAULT 0.00,
  `situacaoPed` varchar(15) DEFAULT 'Aberto' COMMENT 'Aberto\nFinalizado\nCancelado',
  `formaPagamento` varchar(25) DEFAULT 'Não Informado',
  `formaPagarPed` varchar(45) NOT NULL DEFAULT 'Nao Informado' COMMENT 'Pix\nBoleto\nCartão de Credito\nDebito\n',
  `FK_usuario_idUsu` int(11) NOT NULL,
  `dtHrEnvioProdPed` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `idPro` int(11) NOT NULL,
  `nomePro` varchar(80) NOT NULL,
  `valorCompraProd` decimal(13,2) NOT NULL DEFAULT 0.00,
  `valorVendaProd` decimal(13,2) NOT NULL DEFAULT 0.00,
  `qtdEstoquePro` float(10,3) DEFAULT 0.000,
  `imagemProd` varchar(100) DEFAULT NULL,
  `quantEstoqueMinimoProd` float(10,3) DEFAULT 0.000,
  `codigoProd` varchar(50) DEFAULT NULL,
  `fornecedor_idFor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`idPro`, `nomePro`, `valorCompraProd`, `valorVendaProd`, `qtdEstoquePro`, `imagemProd`, `quantEstoqueMinimoProd`, `codigoProd`, `fornecedor_idFor`) VALUES
(1, 'Manga', '24.99', '30.99', 150.000, 'mangaNaruto.jpg', 50.000, '5549498874889', 1),
(2, 'quadro', '45.00', '100.75', 120.000, 'quadro1.jpg', 20.000, '45695134', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `propaganda`
--

CREATE TABLE `propaganda` (
  `idProp` int(11) NOT NULL,
  `emailProp` varchar(150) DEFAULT NULL,
  `dtFimContratoProp` date DEFAULT NULL,
  `telefoneContraProp` varchar(20) NOT NULL,
  `tempoExibirProp` int(11) DEFAULT NULL,
  `usuario_idUsu` int(11) NOT NULL,
  `valorProp` decimal(13,2) DEFAULT NULL,
  `tituloProp` varchar(100) DEFAULT NULL,
  `linkPropagandaProp` varchar(200) NOT NULL,
  `nomeContratante` varchar(150) DEFAULT NULL,
  `dtInicioProp` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `idUsu` int(11) NOT NULL,
  `nomeUsu` varchar(150) NOT NULL,
  `cpfUsu` varchar(14) NOT NULL,
  `dtNascimentoUsu` date NOT NULL,
  `teleWhatsAppUsu` varchar(20) DEFAULT NULL,
  `emailUsu` varchar(150) NOT NULL,
  `senhaUsu` varchar(50) NOT NULL,
  `perfilUsu` varchar(15) DEFAULT 'Cliente' COMMENT 'Administrador\nFuncionário\nCliente',
  `situacaoUsu` varchar(15) DEFAULT 'Ativo' COMMENT 'Ativo\nInativo',
  `enderecoUsu` varchar(300) DEFAULT NULL COMMENT 'cidadeEnde\ncepEnde\nnumeroEnde\ncomplementoEnde\nufEnde\nenderecoEnde',
  `cidadeUsu` varchar(30) DEFAULT NULL,
  `cepUsu` int(8) NOT NULL,
  `numeroUsu` int(11) DEFAULT NULL,
  `complementoUsu` varchar(20) DEFAULT NULL,
  `ufUsu` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idUsu`, `nomeUsu`, `cpfUsu`, `dtNascimentoUsu`, `teleWhatsAppUsu`, `emailUsu`, `senhaUsu`, `perfilUsu`, `situacaoUsu`, `enderecoUsu`, `cidadeUsu`, `cepUsu`, `numeroUsu`, `complementoUsu`, `ufUsu`) VALUES
(1, 'Administrador', '704.403.937-52', '2014-04-25', '(61)91234-0234', 'adm1@gmail.com', '123', 'Administrador', 'Ativo', NULL, 'brasilia', 215887, 14, 'abs', 'df'),
(2, 'Loja Nerd', '156.254.698.10', '2024-05-09', '(62)96258-4985', 'lojanerd@gmail.com', '202cb962ac59075b964b07152d234b70', 'Fornecedor', 'Ativo', 'Qnn 08 Loja 20', 'df', 32, 55, 'feira', 'DF'),
(3, 'Maria Eduarda', '156.254.695.11', '2001-08-26', '(61)96832-4582', 'mariaeduarda@gmail.com\r\n', '202cb962ac59075b964b07152d234b70', 'Cliente', 'Ativo', 'Qna 96 Casa 56', 'ceilandia', 38, 55, 'Apartamento 11', 'DF'),
(4, 'João da Silva', '268.615.395-50', '2000-10-01', '(12)96596-6754', 'joaovitor@gmail.com', '202cb962ac59075b964b07152d234b70', 'Cliente', 'Ativo', 'Qnk 25 casa 01', 'ceilandia', 50, 60, 'ceilandia centro', 'DF'),
(6, 'Pablo', '123.456.789-10', '0000-00-00', '(12)9548624', 'pablo@gmail.com', '123', 'Cliente', 'Ativo', 'Qnn 25', 'taguatinga', 0, NULL, 'Casa 14', 'BA');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `fornecedor`
--
ALTER TABLE `fornecedor`
  ADD PRIMARY KEY (`idFor`);

--
-- Índices para tabela `itemproduto`
--
ALTER TABLE `itemproduto`
  ADD PRIMARY KEY (`pedido_idPed`,`produto_idPro`),
  ADD KEY `fk_pedido_has_produto_produto1_idx` (`produto_idPro`),
  ADD KEY `fk_pedido_has_produto_pedido1_idx` (`pedido_idPed`);

--
-- Índices para tabela `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`idPed`),
  ADD KEY `fk_pedido_usuario_idx` (`FK_usuario_idUsu`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`idPro`),
  ADD KEY `fk_produto_fornecedor1_idx` (`fornecedor_idFor`);

--
-- Índices para tabela `propaganda`
--
ALTER TABLE `propaganda`
  ADD PRIMARY KEY (`idProp`,`usuario_idUsu`),
  ADD KEY `fk_propaganda_usuario1_idx` (`usuario_idUsu`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsu`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `fornecedor`
--
ALTER TABLE `fornecedor`
  MODIFY `idFor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `pedido`
--
ALTER TABLE `pedido`
  MODIFY `idPed` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `idPro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `propaganda`
--
ALTER TABLE `propaganda`
  MODIFY `idProp` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `itemproduto`
--
ALTER TABLE `itemproduto`
  ADD CONSTRAINT `fk_pedido_has_produto_pedido1` FOREIGN KEY (`pedido_idPed`) REFERENCES `pedido` (`idPed`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pedido_has_produto_produto1` FOREIGN KEY (`produto_idPro`) REFERENCES `produto` (`idPro`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `fk_pedido_usuario` FOREIGN KEY (`FK_usuario_idUsu`) REFERENCES `usuario` (`idUsu`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `fk_produto_fornecedor1` FOREIGN KEY (`fornecedor_idFor`) REFERENCES `fornecedor` (`idFor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `propaganda`
--
ALTER TABLE `propaganda`
  ADD CONSTRAINT `fk_propaganda_usuario1` FOREIGN KEY (`usuario_idUsu`) REFERENCES `usuario` (`idUsu`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
