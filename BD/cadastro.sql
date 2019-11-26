-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 26-Nov-2019 às 00:11
-- Versão do servidor: 5.7.26
-- versão do PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cadastro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `profissao` varchar(40) NOT NULL,
  PRIMARY KEY (`codigo`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`codigo`, `nome`, `email`, `profissao`) VALUES
(1, 'Luiz Felipe', 'lipebottini@gmail.com', 'programador'),
(2, 'Luiz', 'felipe@teste.com', 'Profissao Teste'),
(3, 'Gabriel', 'gabriel@teste.com', 'Carpinteiro'),
(4, 'Amanda', 'amanda@teste.com', 'vendedora'),
(5, 'Vitor', 'vitor@teste.com', 'Jogador de Futebol'),
(6, 'Luiza', 'luiza@teste.com', 'vendedora'),
(7, 'Aline', 'aline@teste.com', 'vendedora'),
(8, 'Almeida', 'almeida@teste.com', 'Diretor'),
(9, 'almeida', 'almeida2@teste.com', 'vendedor'),
(11, 'Luiz', 'felipe2@teste.com', '1'),
(12, 'Luiz', 'luiz@teste.com', 'programador'),
(13, 'Luiz Felipe', 'lipebotaastini@gmail.com', 'asds');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
