-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 18-Maio-2023 às 17:24
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `buteco_nunes`
--
CREATE DATABASE IF NOT EXISTS `buteco_nunes` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `buteco_nunes`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

DROP TABLE IF EXISTS `cadastro`;
CREATE TABLE IF NOT EXISTS `cadastro` (
  `id_login` int(100) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `telefone` varchar(100) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  PRIMARY KEY (`id_login`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`id_login`, `email`, `senha`, `nome`, `telefone`, `endereco`) VALUES
(1, 'administrador@hotmail.com', 'adm12345', 'administrador', '43 99615', 'Rua Rio Avenida Zanoni'),
(2, 'dieimes@dieimes', 'dieimes123', 'Dieimes Nunes', 'Avenida Brasil', '99875311'),
(4, 'dieimes@hotmail.com', 'dieimes123', 'Dieimes Nunes', 'Avenida Brasil', '99875311'),
(5, 'joaquim@sagionetti', 'joaquim123', 'Joaquim Pedro', 'Avenida Brasil', '99875311');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

DROP TABLE IF EXISTS `funcionarios`;
CREATE TABLE IF NOT EXISTS `funcionarios` (
  `id_funcionario` int(100) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `telefone` varchar(100) NOT NULL,
  `cpf` varchar(100) NOT NULL,
  `funcao` varchar(100) NOT NULL,
  PRIMARY KEY (`id_funcionario`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`id_funcionario`, `nome`, `endereco`, `telefone`, `cpf`, `funcao`) VALUES
(1, 'Dieimes Nunes', 'Rua Ceará 4765', '44 9996425', '12354687', 'Chef de Cozinha'),
(2, 'JoÃ£o Pedro Fernandes de Almeida', 'Avenida Brasil', '99875311', '12345678', 'GarÃ§om');

-- --------------------------------------------------------

--
-- Estrutura da tabela `lanches`
--

DROP TABLE IF EXISTS `lanches`;
CREATE TABLE IF NOT EXISTS `lanches` (
  `id_lanche` int(100) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `ingredientes` varchar(100) NOT NULL,
  `quantidade` varchar(1000) NOT NULL,
  `valor` varchar(100) NOT NULL,
  PRIMARY KEY (`id_lanche`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `lanches`
--

INSERT INTO `lanches` (`id_lanche`, `nome`, `ingredientes`, `quantidade`, `valor`) VALUES
(1, 'X-Nunes', 'Pão, alface, tomate, carne, queijo cheddar, molho caseiro', '10', 'R$100');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

DROP TABLE IF EXISTS `pedido`;
CREATE TABLE IF NOT EXISTS `pedido` (
  `id_pedido` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `endereco` varchar(300) NOT NULL,
  `telefone` varchar(100) NOT NULL,
  `pedido` varchar(300) NOT NULL,
  PRIMARY KEY (`id_pedido`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pedido`
--

INSERT INTO `pedido` (`id_pedido`, `nome`, `endereco`, `telefone`, `pedido`) VALUES
(31, 'Usuario administrador', 'RUA RIO', '', ''),
(28, 'Dieimes Nunes', 'Avenida Brasil', '99875311', 'X-burguer'),
(27, 'JoÃ£o Pedro Fernandes de Almeida', 'Rua', '99999', 'coca'),
(34, 'Dieimes Nunes', 'Avenida Brasil', '99875311', 'X-burguer'),
(35, 'Dieimes Nunes', 'Avenida Brasil', '99875311', 'X-burguer');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
