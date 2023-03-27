-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Mar-2023 às 23:19
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `messymind`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbtexto`
--

CREATE TABLE `tbtexto` (
  `id` int(12) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `texto` varchar(255) NOT NULL,
  `data_postagem` varchar(255) NOT NULL,
  `hora_postagem` varchar(255) NOT NULL,
  `cor` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tbtexto`
--

INSERT INTO `tbtexto` (`id`, `titulo`, `texto`, `data_postagem`, `hora_postagem`, `cor`) VALUES
(40, 'azul', 'azul', '2023-03-17', '01:53', 'azul'),
(41, 'preto', 'preto', '2023-03-17', '01:53', 'preto'),
(42, 'verde', 'verde', '2023-03-17', '01:53', 'verde'),
(43, 'vermelho', 'vermelho', '2023-03-17', '01:53', 'vermelho'),
(44, 'amarelo', 'amarelo', '2023-03-17', '01:53', 'amarelo'),
(45, '123', '213pt', '2023-03-20', '23:11', 'vermelho');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbtexto`
--
ALTER TABLE `tbtexto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbtexto`
--
ALTER TABLE `tbtexto`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
