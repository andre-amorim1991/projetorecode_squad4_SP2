-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 04-Nov-2020 às 00:27
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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`id_empresa`, `status_conta`, `razao_social`, `nome_fantasia`, `cnpj`, `responsavel_legal`, `cpf_responsavel`, `rg_responsavel`, `endereco`, `cidade`, `estado`, `e-mail`, `telefone`) VALUES
(7, 'ativo', 'teste1', 'teste1', '11111111', 'tester1', '111111111', '11111111111', '1111111111111', '111111', 'sp', '111111111111', '11111111111'),
(8, 'ativo', 'tester2', 'teste2', '22222222222222', 'teste2', '22222222222', '22222222222', '2222222222222', '22222222', 'sp', '2222222222222', '222222222222');

-- --------------------------------------------------------

--
-- Estrutura da tabela `reclamacao`
--

DROP TABLE IF EXISTS `reclamacao`;
CREATE TABLE IF NOT EXISTS `reclamacao` (
  `id_reclamacao` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `id_empresa` int(11) DEFAULT NULL,
  `data_e_hora` datetime NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `corpo_reclamacao` varchar(1500) NOT NULL,
  `endereco` varchar(120) DEFAULT NULL,
  `nome_empresa` varchar(255) NOT NULL,
  PRIMARY KEY (`id_reclamacao`,`id_usuario`),
  KEY `fk_reclamacao_usuario_idx` (`id_usuario`),
  KEY `fk_reclamacao_empresa_idx` (`id_empresa`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `reclamacao`
--

INSERT INTO `reclamacao` (`id_reclamacao`, `id_usuario`, `id_empresa`, `data_e_hora`, `titulo`, `corpo_reclamacao`, `endereco`, `nome_empresa`) VALUES
(18, 1, 7, '2020-11-03 20:59:23', 'Aconteceu isso, isso e isso', 'Testando a inserção de dados no banco', 'Algum local', 'teste1'),
(19, 1, NULL, '2020-11-03 21:00:36', 'Outro tipo de coisa que aconteceu', 'Aconteceu isso, isso e isso', 'Local tal', 'teste3');

-- --------------------------------------------------------

--
-- Estrutura da tabela `respostas`
--

DROP TABLE IF EXISTS `respostas`;
CREATE TABLE IF NOT EXISTS `respostas` (
  `id_resposta` int(11) NOT NULL AUTO_INCREMENT,
  `id_empresa` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `id_reclamacao` int(11) NOT NULL,
  `data_e_hora` datetime NOT NULL,
  `corpo_resposta` varchar(500) NOT NULL,
  PRIMARY KEY (`id_resposta`,`id_reclamacao`),
  KEY `fk_resposta_reclamacao_idx` (`id_reclamacao`),
  KEY `fk_resposta_empresa_idx` (`id_empresa`),
  KEY `fk_resposta_usuario_idx` (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `respostas`
--

INSERT INTO `respostas` (`id_resposta`, `id_empresa`, `id_usuario`, `id_reclamacao`, `data_e_hora`, `corpo_resposta`) VALUES
(11, NULL, 1, 18, '2020-11-03 20:59:51', 'Que coincidencia, aconteceu o mesmo'),
(12, NULL, 1, 19, '2020-11-03 21:00:59', 'Testando a inserção de resposta'),
(13, NULL, 2, 19, '2020-11-03 21:19:28', 'Outro teste');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `status_conta` varchar(10) NOT NULL,
  `nome_completo` varchar(100) NOT NULL,
  `apelido` varchar(100) DEFAULT NULL,
  `cpf` varchar(20) NOT NULL,
  `rg` varchar(20) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `data_nascimento` date NOT NULL,
  `estado` char(2) NOT NULL,
  `cidade` varchar(60) NOT NULL,
  `senha` char(32) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `status_conta`, `nome_completo`, `apelido`, `cpf`, `rg`, `telefone`, `email`, `data_nascimento`, `estado`, `cidade`, `senha`) VALUES
(1, 'ativo', 'efefefef', 'fefwefewfew', 'efgesf', 'fefefef', 'effefefe', 'fwsfewfewf', '2020-10-20', 'sp', 'efefef', 'efefefef'),
(2, 'ativo', 'Rafael Silva Veja', NULL, '22264169869', '352978028', '11981042094', 'rafaelveja@gmail.com', '2020-11-19', 'SP', 'Guarulhos', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `reclamacao`
--
ALTER TABLE `reclamacao`
  ADD CONSTRAINT `fk_reclamacao_empresa` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id_empresa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_reclamacao_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `respostas`
--
ALTER TABLE `respostas`
  ADD CONSTRAINT `fk_resposta_empresa` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id_empresa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_resposta_reclamacao` FOREIGN KEY (`id_reclamacao`) REFERENCES `reclamacao` (`id_reclamacao`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_resposta_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
