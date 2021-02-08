-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 08-Fev-2021 às 06:03
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `avaliacaodb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(35) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `logradouro` varchar(150) NOT NULL,
  `numero` varchar(20) NOT NULL,
  `complemento` varchar(150) NOT NULL,
  `bairro` varchar(150) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `email`, `telefone`, `cep`, `logradouro`, `numero`, `complemento`, `bairro`, `cidade`, `uf`, `created`, `modified`) VALUES
(5, 'Filipe de Oliveira Alvares', 'alvares.filipeoliveira@gmail.com', '16993080580', '01311-200', 'Avenida Paulista', '375', 'de 1047 a 1865 - lado ímpar', 'Bela Vista', 'São Paulo', 'SP', '2021-02-08 04:28:31', '2021-02-08 04:54:13'),
(6, 'teste', 'teste@teste.teste', '123', '01311-200', 'Avenida Paulista', '123', 'de 1047 a 1865 - lado ímpar', 'Bela Vista', 'São Paulo', 'SP', '2021-02-08 04:30:08', '2021-02-08 04:30:08'),
(8, 'Bruno', 'alvares.filipeoliveira1@gmail.com', '16993080580', '88010-020', 'Rua Deodoro', '3785', 'CASA', 'Centro', 'Florianópolis', 'SC', '2021-02-08 05:30:10', '2021-02-08 05:30:10'),
(9, 'Filipe de Oliveira Alvares', 'alvares.filipeoliveira@gmail.coom', '16993080580', '01311-200', 'Avenida Paulista', '1', 'de 1047 a 1865 - lado ímpar', 'Bela Vista', 'São Paulo', 'SP', '2021-02-08 05:32:35', '2021-02-08 06:02:41'),
(10, 'a', 'teste.filipeoliveira@gmail.com', '16993080580', '01311-200', 'Avenida Paulista', '1', 'de 1047 a 1865 - lado ímpar', 'Bela Vista', 'São Paulo', 'SP', '2021-02-08 06:01:18', '2021-02-08 06:01:18');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
