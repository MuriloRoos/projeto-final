-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28/11/2024 às 11:37
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `agendamentos`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(220) NOT NULL,
  `color` varchar(45) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `events`
--

INSERT INTO `events` (`id`, `title`, `color`, `start`, `end`) VALUES
(1, 'tutorial 1', '#FFD700', '2024-11-19 10:00:00', '2024-11-19 10:30:00'),
(2, 'tutorial 2', '#FFD700', '2024-11-08 10:00:00', '2024-11-08 10:30:00'),
(3, 'tutorial 3', '#40e0d0', '2024-10-04 10:00:00', '2024-10-04 10:30:00'),
(4, 'tutorial 4', '#FFD700', '2024-10-20 10:00:00', '2024-10-20 10:30:00'),
(5, 'tutorial 5', '#40e0d0', '2024-10-21 10:00:00', '2024-10-21 10:30:00'),
(6, 'tutorial 6', '#40e0d0', '2024-10-03 10:00:00', '2024-10-03 10:30:00'),
(11, 'Tutorial 7', '#0071c5', '2024-11-13 10:00:00', '2024-11-13 10:30:00'),
(17, 'tutorial 8', '#880000', '2024-11-27 00:00:00', '2024-11-27 00:00:00'),
(18, 'tutorial 9', '#FFD700', '2024-11-06 10:01:00', '2024-11-06 10:01:00'),
(20, 'tutorial 10', '#884513', '2024-11-22 10:00:00', '2024-11-22 10:00:00'),
(23, 'tutorial 11', '#0071c5', '2024-11-05 04:00:00', '2024-11-05 04:30:00'),
(24, 'Tutorial 11 edit', '#FF4500', '2024-11-12 09:00:00', '2024-11-12 10:30:00'),
(25, 'titulo 12', '#880000', '2024-11-07 10:00:00', '2024-11-07 10:30:00'),
(40, 'titulo 14', '#0071c5', '2024-11-09 01:00:00', '2024-11-09 02:00:00'),
(41, 'titulo 15', '#884513', '2024-11-10 05:05:00', '2024-11-10 05:08:00'),
(42, 'titulo 16', '#FF4500', '2024-11-11 23:00:00', '2024-11-11 23:00:00'),
(43, 'tutorial 17', '#0071c5', '2024-11-14 03:00:00', '2024-11-14 04:00:00'),
(44, 'tutorial 18', '#FF4500', '2024-11-15 05:00:00', '2024-11-15 05:00:00'),
(45, 'tutorial 19', '#436EEE', '2024-11-16 04:00:00', '2024-11-16 05:00:00'),
(50, 'tutorial 24', '#228822', '2024-12-10 10:00:00', '2024-12-10 12:00:00'),
(51, 'testes', '#228822', '2024-11-03 11:00:00', '2024-11-03 12:00:00');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
