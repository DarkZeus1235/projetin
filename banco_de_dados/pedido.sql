-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 16-Maio-2023 às 23:20
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

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

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

DROP TABLE IF EXISTS `pedido`;
CREATE TABLE IF NOT EXISTS `pedido` (
  `id_pedido` int NOT NULL AUTO_INCREMENT,
  `email` varchar(200) NOT NULL,
  `senha` varchar(200) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `endereco` varchar(300) NOT NULL,
  `telefone` varchar(100) NOT NULL,
  `pedido` varchar(300) NOT NULL,
  PRIMARY KEY (`id_pedido`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb3;

--
-- Extraindo dados da tabela `pedido`
--

INSERT INTO `pedido` (`id_pedido`, `email`, `senha`, `nome`, `endereco`, `telefone`, `pedido`) VALUES
(31, 'administrador@hotmail.com', 'adm12345678', 'Usuario administrador', 'RUA RIO', '', ''),
(27, '', '', 'JoÃ£o Pedro Fernandes de Almeida', 'Rua', '99999', 'coca');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
