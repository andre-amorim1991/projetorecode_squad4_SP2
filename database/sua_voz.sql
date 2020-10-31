-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 31-Out-2020 às 04:15
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sua_voz`
--
CREATE DATABASE IF NOT EXISTS `sua_voz` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sua_voz`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

DROP TABLE IF EXISTS `empresa`;
CREATE TABLE IF NOT EXISTS `empresa` (
  `id_empresa` int(11) NOT NULL AUTO_INCREMENT,
  `status_conta` varchar(10) NOT NULL,
  `razao_social` varchar(255) NOT NULL,
  `nome_fantasia` varchar(255) NOT NULL,
  `cnpj` varchar(20) NOT NULL,
  `responsavel_legal` varchar(100) NOT NULL,
  `cpf_responsavel` varchar(20) NOT NULL,
  `rg_responsavel` varchar(20) NOT NULL,
  `endereco` varchar(150) NOT NULL,
  `cidade` varchar(60) NOT NULL,
  `estado` char(2) NOT NULL,
  `e-mail` varchar(100) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  PRIMARY KEY (`id_empresa`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`id_empresa`, `status_conta`, `razao_social`, `nome_fantasia`, `cnpj`, `responsavel_legal`, `cpf_responsavel`, `rg_responsavel`, `endereco`, `cidade`, `estado`, `e-mail`, `telefone`) VALUES
(1, 'ativo', 'wqwerfqwrfq', 'ggwgewtfew', 'qrfqrfqrfq', 'gewtgewtgewgt', 'getgegeqgtq', 'gqgtqtgqtgq', 'fgefgeqfqf', 'aswffwf', 'as', 'efeffeaf', 'fwfwfwfqa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `reclamacao`
--

DROP TABLE IF EXISTS `reclamacao`;
CREATE TABLE IF NOT EXISTS `reclamacao` (
  `id_reclamacao` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `id_empresa` int(11) DEFAULT NULL,
  `data_e_hora` datetime DEFAULT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `corpo_reclamacao` varchar(1500) DEFAULT NULL,
  PRIMARY KEY (`id_reclamacao`,`id_usuario`),
  KEY `fk_reclamacao_usuario_idx` (`id_usuario`),
  KEY `fk_reclamacao_empresa_idx` (`id_empresa`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `reclamacao`
--

INSERT INTO `reclamacao` (`id_reclamacao`, `id_usuario`, `id_empresa`, `data_e_hora`, `titulo`, `corpo_reclamacao`) VALUES
(2, 1, 1, '2020-10-20 12:16:11', 'sdgesge', 'aegaga'),
(4, 1, NULL, '2020-10-20 12:16:11', 'fafafea', 'gsergsgs'),
(5, 1, 1, '2020-10-20 12:16:11', 'grgrgeg', 'gwetewtewr');

-- --------------------------------------------------------

--
-- Estrutura da tabela `respostas`
--

DROP TABLE IF EXISTS `respostas`;
CREATE TABLE IF NOT EXISTS `respostas` (
  `id_resposta` int(11) NOT NULL AUTO_INCREMENT,
  `id_empresa` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `id_reclamacao` int(11) NOT NULL,
  `data_e_hora` datetime NOT NULL,
  `corpo_resposta` varchar(500) NOT NULL,
  PRIMARY KEY (`id_resposta`,`id_reclamacao`),
  KEY `fk_resposta_reclamacao_idx` (`id_reclamacao`),
  KEY `fk_resposta_empresa_idx` (`id_empresa`),
  KEY `fk_resposta_usuario_idx` (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `respostas`
--

INSERT INTO `respostas` (`id_resposta`, `id_empresa`, `id_usuario`, `id_reclamacao`, `data_e_hora`, `corpo_resposta`) VALUES
(1, 1, NULL, 2, '2020-10-20 12:16:11', 'rgrgrgrwegew'),
(2, 1, NULL, 2, '2020-10-20 12:16:11', 'ewfewrfewr'),
(3, NULL, 1, 2, '2020-10-20 12:16:11', 'grgrgrgr');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `status_conta` varchar(10) NOT NULL,
  `nome_completo` varchar(100) NOT NULL,
  `apelido` varchar(100) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `rg` varchar(20) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `e-mail` varchar(100) NOT NULL,
  `data_nascimento` date NOT NULL,
  `estado` char(2) NOT NULL,
  `cidade` varchar(60) NOT NULL,
  `senha` char(32) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `status_conta`, `nome_completo`, `apelido`, `cpf`, `rg`, `telefone`, `e-mail`, `data_nascimento`, `estado`, `cidade`, `senha`) VALUES
(1, 'ativo', 'efefefef', 'fefwefewfew', 'efgesf', 'fefefef', 'effefefe', 'fwsfewfewf', '2020-10-20', 'sp', 'efefef', 'efefefef');

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `reclamacao`
--
ALTER TABLE `reclamacao`
  ADD CONSTRAINT `fk_reclamacao_empresa` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id_empresa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_reclamacao_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `respostas`
--
ALTER TABLE `respostas`
  ADD CONSTRAINT `fk_resposta_empresa` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id_empresa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_resposta_reclamacao` FOREIGN KEY (`id_reclamacao`) REFERENCES `reclamacao` (`id_reclamacao`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_resposta_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
