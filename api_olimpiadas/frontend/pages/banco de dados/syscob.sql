-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 25-Jan-2020 às 22:44
-- Versão do servidor: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `syscob`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cria_comp_lanc`
--

CREATE TABLE `cria_comp_lanc` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `data` date NOT NULL,
  `horainicial` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cria_comp_lanc`
--

INSERT INTO `cria_comp_lanc` (`id`, `nome`, `data`, `horainicial`) VALUES
(1, 'LanÃ§amento de dardos - UESPI2', '2020-01-30', '11:01:00'),
(2, 'LanÃ§amento de dardos - UESPI', '2020-01-28', '22:02:00'),
(4, 'LanÃ§amento de dardos - UESPI3', '2020-01-28', '22:02:00'),
(6, 'Lacamento de dardo', '2020-01-25', '00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cria_comp_lanc`
--
ALTER TABLE `cria_comp_lanc`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nome` (`nome`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cria_comp_lanc`
--
ALTER TABLE `cria_comp_lanc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
