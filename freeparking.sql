-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 08-Jul-2018 às 19:37
-- Versão do servidor: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `freeparking`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro_dados`
--

CREATE TABLE IF NOT EXISTS `cadastro_dados` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `sexo` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `cidade` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `endereço` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `cpf` varchar(11) COLLATE utf32_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf32_unicode_ci NOT NULL,
  `datanascimento` varchar(20) COLLATE utf32_unicode_ci NOT NULL
  `senha` varchar(255) COLLATE utf32_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Extraindo dados da tabela `cadastro_dados`
--

INSERT INTO `cadastro_dados` (`id`, `nome`, `sexo`, `cidade`, `endereço`, `cpf`, `email`, `datanascimento`) VALUES
(1, 'Joceane ', 'Masc', 'TimbÃ³', 'Rua Pinheiros', '09455796910', 'dalabonaj@gmail.com', '24/Julho/1997'),
(2, 'Isadora Dalabona', 'Masc', 'TimbÃ³', 'Rua Pinheiros ', '08853623900', 'isadorareginam@gmail.com', '11/Maio/1993');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `senha` varchar(255) COLLATE utf32_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`id`, `email`, `senha`) VALUES
(8, 'joceane@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadastro_dados`
--
ALTER TABLE `cadastro_dados`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cadastro_dados`
--
ALTER TABLE `cadastro_dados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
