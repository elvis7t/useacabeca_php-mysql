-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: mysql:3306
-- Tempo de geração: 15-Ago-2022 às 11:20
-- Versão do servidor: 8.0.30
-- versão do PHP: 8.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `useacabeca`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aliens_abduction`
--

CREATE TABLE `aliens_abduction` (
  `aa_id` int NOT NULL,
  `aa_firstname` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aa_lastname` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aa_whenithappened` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aa_howlong` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aa_howmany` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aa_aliendescription` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aa_whattheydid` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aa_fangspotted` enum('S','N') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `aa_email` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aa_other` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `aliens_abduction`
--

INSERT INTO `aliens_abduction` (`aa_id`, `aa_firstname`, `aa_lastname`, `aa_whenithappened`, `aa_howlong`, `aa_howmany`, `aa_aliendescription`, `aa_whattheydid`, `aa_fangspotted`, `aa_email`, `aa_other`) VALUES
(1, 'aa_firstname', 'aa_lastname', 'aa_whenithappened', 'aa_howlong', 'aa_howmany', 'aa_aliendescription', 'aa_whattheydid', 'S', 'aa_email', 'aa_other'),
(2, 'ELVIS', 'DA SILVA', 'Fui abdusido', '2 horas', '2', 'Homenzinhos Verdes', 'Me deram comida', 'S', 'elvis7t@gmail.com', 't'),
(3, 'ELVIS', 'DA SILVA', 'Fui abdusido', '2 horas', '2', 'Homenzinhos Verdes', 'Me deram comida', 'N', 'elvis7t@gmail.com', 't'),
(4, 'ELVIS', 'DA SILVA', 'Fui abdusido', '2 horas', '2', 'Homenzinhos Verdes', 'Me deram comida', 'N', 'elvis7t@gmail.com', 't'),
(5, 'ELVIS', 'DA SILVA', 'Fui abdusido', '2 horas', '2', 'Homenzinhos Verdes', 'Me deram comida', 'N', 'elvis7t@gmail.com', 't'),
(6, 'ELVIS', 'DA SILVA', 'Semana Passada', '1  dia', '3', 'Homenzinhos Verdes', 'Me deram comida', 'S', 'elvis7t@gmail.com', 't'),
(7, 'ELVIS', 'DA SILVA', 'Semana Passada', '1  dia', '3', 'Homenzinhos Verdes', 'Me deram comida', 'S', 'elvis7t@gmail.com', 't'),
(8, 'ELVIS', 'DA SILVA', 'Semana Passada', '1  dia', '3', 'Homenzinhos Verdes', 'Me deram comida', 'S', 'elvis7t@gmail.com', 't'),
(9, 'ELVIS', 'DA SILVA', 'Fui abdusido', '2 horas', '2', 'Homenzinhos Verdes', 'Me deram comida', 'S', 'elvis7t@gmail.com', 't'),
(10, 'ELVIS', 'DA SILVA', 'Fui abdusido', '2 horas', '2', 'Homenzinhos Verdes', 'Me deram comida', 'S', 'elvis7t@gmail.com', 't');

-- --------------------------------------------------------

--
-- Estrutura da tabela `email_list`
--

CREATE TABLE `email_list` (
  `elist_id` int NOT NULL,
  `elist_firstname` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `elist_lastname` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `elist_email` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `email_list`
--

INSERT INTO `email_list` (`elist_id`, `elist_firstname`, `elist_lastname`, `elist_email`) VALUES
(1, 'ELVIS', 'DA SILVA', 'elvis7t@gmail.com');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `aliens_abduction`
--
ALTER TABLE `aliens_abduction`
  ADD PRIMARY KEY (`aa_id`);

--
-- Índices para tabela `email_list`
--
ALTER TABLE `email_list`
  ADD PRIMARY KEY (`elist_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `aliens_abduction`
--
ALTER TABLE `aliens_abduction`
  MODIFY `aa_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `email_list`
--
ALTER TABLE `email_list`
  MODIFY `elist_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
