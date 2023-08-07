-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 07-Ago-2023 às 17:54
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
-- Database: `dba_swt`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_bdsw`
--

DROP TABLE IF EXISTS `cad_bdsw`;
CREATE TABLE IF NOT EXISTS `cad_bdsw` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `marca` varchar(100) DEFAULT NULL,
  `modelo` varchar(100) DEFAULT NULL,
  `numero` bigint(200) NOT NULL,
  `portas` int(50) DEFAULT NULL,
  `velocidade` int(50) DEFAULT NULL,
  `tempo` int(50) DEFAULT NULL,
  `estado` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cad_bdsw`
--

INSERT INTO `cad_bdsw` (`id`, `marca`, `modelo`, `numero`, `portas`, `velocidade`, `tempo`, `estado`) VALUES
(5, 'INTELBRAS', 'GBIC SG 5204 MR', 4760046, 48, 2000, 2, 'OFFLINE');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
