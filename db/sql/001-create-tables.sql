-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: mysql:3306
-- Tempo de geração: 31-Ago-2022 às 19:29
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
(2, 'ELVIS', 'DA SILVA', 'Fui abdusido', '2 horas', '2', 'Homenzinhos Verdes', 'Me deram comida', 'S', 'elvis7t@gmail.com', 't'),
(3, 'ELVIS', 'DA SILVA', 'Fui abdusido', '2 horas', '2', 'Homenzinhos Verdes', 'Me deram comida', 'N', 'elvis7t@gmail.com', 't'),
(4, 'ELVIS', 'DA SILVA', 'Fui abdusido', '2 horas', '2', 'Homenzinhos Verdes', 'Me deram comida', 'N', 'elvis7t@gmail.com', 't'),
(5, 'ELVIS', 'DA SILVA', 'Fui abdusido', '2 horas', '2', 'Homenzinhos Verdes', 'Me deram comida', 'N', 'elvis7t@gmail.com', 't'),
(6, 'ELVIS', 'DA SILVA', 'Semana Passada', '1  dia', '3', 'Homenzinhos Verdes', 'Me deram comida', 'S', 'elvis7t@gmail.com', 't'),
(7, 'ELVIS', 'DA SILVA', 'Semana Passada', '1  dia', '3', 'Homenzinhos Verdes', 'Me deram comida', 'S', 'elvis7t@gmail.com', 't'),
(8, 'ELVIS', 'DA SILVA', 'Semana Passada', '1  dia', '3', 'Homenzinhos Verdes', 'Me deram comida', 'S', 'elvis7t@gmail.com', 't'),
(9, 'ELVIS', 'DA SILVA', 'Fui abdusido', '2 horas', '2', 'Homenzinhos Verdes', 'Me deram comida', 'S', 'elvis7t@gmail.com', 't'),
(10, 'ELVIS', 'DA SILVA', 'Fui abdusido', '2 horas', '2', 'Homenzinhos Verdes', 'Me deram comida', 'S', 'elvis7t@gmail.com', 't'),
(12, 'ELVIS', 'DA SILVA', 'Fui abdusido', '2 horas', '2', 'Homenzinhos Verdes', 'Me analizaram', 'S', 'elvis7t@gmail.com', 't'),
(13, 'ELVIS', 'DA SILVA', 'Fui abdusido', '2 horas', '2', 'Homenzinhos Verdes', 'Me deram comida', 'S', 'elvis7t@gmail.com', 't'),
(14, 'ELVIS', 'DA SILVA', 'Fui abdusido', '2 horas', '2', 'Homenzinhos Verdes', 'Me deram comida', 'S', 'elvis7t@gmail.com', 't'),
(15, 'ELVIS', 'DA SILVA', 'Fui abdusido', '2 horas', '2', 'Homenzinhos Verdes', 'Me deram comida', 'S', 'elvis7t@gmail.com', 't'),
(16, 'ELVIS', 'DA SILVA', 'Fui abdusido', '2 horas', '2', 'Homenzinhos Verdes', 'Me deram comida', 'S', 'elvis7t@gmail.com', 't'),
(17, 'ELVIS', 'DA SILVA', 'Fui abdusido', '2 horas', '2', 'Homenzinhos Verdes', 'Me deram comida', 'S', 'elvis7t@gmail.com', 't'),
(18, 'ELVIS', 'DA SILVA', 'Fui abdusido', '2 horas', '2', 'Homenzinhos Verdes', 'Me deram comida', 'S', 'elvis7t@gmail.com', 't'),
(19, 'ELVIS', 'DA SILVA', 'Fui abdusido', '2 horas', '2', 'Homenzinhos Verdes', 'Me deram comida', 'S', 'elvis7t@gmail.com', 't'),
(20, 'ELVIS', 'DA SILVA', 'Fui abdusido', '2 horas', '2', 'Homenzinhos Verdes', 'Me deram comida', 'S', 'elvis7t@gmail.com', 't'),
(21, 'ELVIS', 'DA SILVA', 'Fui abdusido', '2 horas', '2', 'Homenzinhos Verdes', 'Me deram comida', 'S', 'elvis7t@gmail.com', 't'),
(22, 'ELVIS', 'DA SILVA', 'Fui abdusido', '2 horas', '2', 'Homenzinhos Verdes', 'Me deram comida', 'S', 'elvis7t@gmail.com', 't'),
(23, 'ELVIS', 'DA SILVA', 'Fui abdusido', '2 horas', '2', 'Homenzinhos Verdes', 'Me deram comida', 'S', 'elvis7t@gmail.com', 't'),
(24, 'ELVIS', 'DA SILVA', 'Fui abdusido', '2 horas', '2', 'Homenzinhos Verdes', 'Me deram comida', 'S', 'elvis7t@gmail.com', 't'),
(25, 'ELVIS', 'DA SILVA', 'Fui abdusido', '2 horas', '2', 'Homenzinhos Verdes', 'Me deram comida', 'S', 'elvis7t@gmail.com', 't'),
(26, 'ELVIS', 'DA SILVA', 'Fui abdusido', '2 horas', '2', 'Homenzinhos Verdes', 'Me deram comida', 'S', 'elvis7t@gmail.com', 't'),
(27, 'ELVIS', 'DA SILVA', 'Fui abdusido', '2 horas', '2', 'Homenzinhos Verdes', 'Me deram comida', 'S', 'elvis7t@gmail.com', 't'),
(28, 'ELVIS', 'DA SILVA', 'Fui abdusido', '2 horas', '2', 'Homenzinhos Verdes', 'Me deram comida', 'S', 'elvis7t@gmail.com', 't'),
(29, 'ELVIS', 'DA SILVA', 'Fui abdusido', '2 horas', '2', 'Homenzinhos Verdes', 'Me deram comida', 'S', 'elvis7t@gmail.com', 't'),
(30, 'ELVIS', 'DA SILVA', 'Fui abdusido', '2 horas', '2', 'Homenzinhos Verdes', 'Me deram comida', 'S', 'elvis7t@gmail.com', 't'),
(31, 'ELVIS', 'DA SILVA', 'Fui abdusido', '2 horas', '2', 'Homenzinhos Verdes', 'Me deram comida', 'S', 'elvis7t@gmail.com', 't'),
(32, 'ELVIS', 'DA SILVA', 'Fui abdusido', '2 horas', '2', 'Homenzinhos Verdes', 'Me deram comida', 'S', 'elvis7t@gmail.com', 't'),
(33, 'ELVIS', 'DA SILVA', 'Fui abdusido', '2 horas', '2', 'Homenzinhos Verdes', 'Me deram comida', 'S', 'elvis7t@gmail.com', 't'),
(34, 'ELVIS', 'DA SILVA', 'Fui abdusido', '2 horas', '2', 'Homenzinhos Verdes', 'Me deram comida', 'S', 'elvis7t@gmail.com', 't'),
(35, 'ELVIS', 'DA SILVA', 'Fui abdusido', '2 horas', '2', 'Homenzinhos Verdes', 'Me deram comida', 'S', 'elvis7t@gmail.com', 't'),
(36, 'ELVIS', 'DA SILVA', 'Fui abdusido', '2 horas', '2', 'Homenzinhos Verdes', 'Me deram comida', 'S', 'elvis7t@gmail.com', 't'),
(37, 'ELVIS', 'DA SILVA', 'Fui abdusido', '2 horas', '2', 'Homenzinhos Verdes', 'Me deram comida', 'S', 'elvis7t@gmail.com', 't'),
(38, 'ELVIS', 'DA SILVA', 'Fui abdusido', '2 horas', '2', 'Homenzinhos Verdes', 'Me deram comida', 'S', 'elvis7t@gmail.com', 't'),
(39, 'ELVIS', 'DA SILVA', 'Fui abdusido', '2 horas', '2', 'Homenzinhos Verdes', 'Me deram comida', 'S', 'elvis7t@gmail.com', 't'),
(40, 'ELVIS', 'DA SILVA', 'Fui abdusido', '2 horas', '2', 'Homenzinhos Verdes', 'Me deram comida', 'S', 'elvis7t@gmail.com', 't'),
(42, 'ELVIS', 'DA SILVA', 'Fui abdusido', '2 horas', '2', 'Homenzinhos Verdes', 'Me deram comida', 'S', 'elvis7t@gmail.com', 't'),
(43, 'ELVIS', 'DA SILVA', 'Fui abdusido', '2 horas', '2', 'Homenzinhos Verdes', 'Me deram comida', 'S', 'elvis7t@gmail.com', 't'),
(44, 'ELVIS', 'DA SILVA', 'Fui abdusido', '2 horas', '2', 'Homenzinhos Verdes', 'Me deram comida', 'S', 'elvis7t@gmail.com', 't'),
(45, 'ELVIS', 'DA SILVA', 'Fui abdusido', '2 horas', '2', 'Homenzinhos Verdes', 'Me deram comida', 'S', 'elvis7t@gmail.com', 't'),
(46, 'ELVIS', 'DA SILVA', 'Fui abdusido', '2 horas', '2', 'Homenzinhos Verdes', 'Me deram comida', 'S', 'elvis7t@gmail.com', 't'),
(47, 'ELVIS', 'DA SILVA', 'Fui abdusido', '2 horas', '2', 'Homenzinhos Verdes', 'Me deram comida', 'S', 'elvis7t@gmail.com', 't'),
(48, 'ELVIS', 'DA SILVA', 'Fui abdusido', '2 horas', '2', 'Homenzinhos Verdes', 'Me deram comida', 'S', 'elvis7t@gmail.com', 't'),
(49, 'ELVIS', 'DA SILVA', 'Fui abdusido', '2 horas', '2', 'Homenzinhos Verdes', 'Me deram comida', 'S', 'elvis7t@gmail.com', 't'),
(50, 'ELVIS', 'DA SILVA', 'Fui abdusido', '2 horas', '2', 'Homenzinhos Verdes', 'Me deram comida', 'S', 'elvis7t@gmail.com', 't'),
(67, 'Camily ', 'Julie', '@ days', '2 horas', '2', 'Homenzinhos Verdes', 'Me deram comida', 'N', 'camily@gmail.com', 't');

-- --------------------------------------------------------

--
-- Estrutura da tabela `email_list`
--

CREATE TABLE `email_list` (
  `elist_id` int NOT NULL,
  `elist_firstname` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `elist_lastname` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `elist_email` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `email_list`
--

INSERT INTO `email_list` (`elist_id`, `elist_firstname`, `elist_lastname`, `elist_email`) VALUES
(18, 'ELVIS', 'DA SILVA', 'elvis7t@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `guitarwars`
--

CREATE TABLE `guitarwars` (
  `gw_id` int NOT NULL,
  `gw_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `gw_name` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gw_score` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gw_screenshot` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `guitarwars`
--

INSERT INTO `guitarwars` (`gw_id`, `gw_date`, `gw_name`, `gw_score`, `gw_screenshot`) VALUES
(1, '2022-08-31 14:23:48', 'ELVIS LEITE DA SILVA', '1222', ''),
(2, '2022-08-31 14:24:28', 'ELVIS LEITE DA SILVA', '1222', ''),
(3, '2022-08-31 14:25:04', 'Willill', '935', ''),
(4, '2022-08-31 14:26:28', 'Willill', '935', ''),
(5, '2022-08-31 14:26:43', 'eeee', 'eeee', 'Logo_VUG.png'),
(6, '2022-08-31 16:15:27', 'ddd', 'ddd', ''),
(7, '2022-08-31 16:16:19', 'ddd', 'ddd', ''),
(8, '2022-08-31 16:34:19', 'oooooo', '111', ''),
(9, '2022-08-31 17:27:13', 'Elvis', '123', ''),
(10, '2022-08-31 17:36:53', 'ELVIS LEITE DA SILVA', '15400', ''),
(11, '2022-08-31 19:13:10', 'ELVIS LEITE DA SILVA', '15400', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `s189_videos`
--

CREATE TABLE `s189_videos` (
  `id` int UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT '',
  `author` varchar(255) DEFAULT '',
  `thumb` varchar(255) DEFAULT '',
  `views` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Extraindo dados da tabela `s189_videos`
--

INSERT INTO `s189_videos` (`id`, `title`, `author`, `thumb`, `views`) VALUES
(1, 'SURPRISE? - Ray William Johnson Video', 'RayWilliamJohnson', 'http://i1.ytimg.com/vi/4EwSAzHj8VM/default.jpg', 10000),
(2, 'Sophia Grace and Rosie Hit ...', 'TheEllenShow', 'http://i4.ytimg.com/vi/KUWpd91UBrA/default.jpg', 20000),
(3, 'The Thanksgiving Massacre!', 'FPSRussia', 'http://i2.ytimg.com/vi/Mgd0Hsgl8gU/default.jpg', 30000),
(4, 'WE\'RE MARRIED!!!!!!', 'CTFxC', 'http://i2.ytimg.com/vi/q1tsmlKXqK8/default.jpg', 40000),
(5, 'Guinea Pig Boat IN OUR MAIL?!', 'IanH', 'http://i4.ytimg.com/vi/3t1YysIt598/default.jpg', 50000),
(6, 'SCARED PUPPY!!!', 'Tobuscus', 'http://i1.ytimg.com/vi/8RcYkGr_IIw/default.jpg', 60000),
(7, 'Review: Jawbone Up', 'SoldierKnowsBest', 'http://i4.ytimg.com/vi/WraMbywRR9M/default.jpg', 70000);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'qkoepp@tremblay.com', '123');

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
-- Índices para tabela `guitarwars`
--
ALTER TABLE `guitarwars`
  ADD PRIMARY KEY (`gw_id`);

--
-- Índices para tabela `s189_videos`
--
ALTER TABLE `s189_videos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `aliens_abduction`
--
ALTER TABLE `aliens_abduction`
  MODIFY `aa_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT de tabela `email_list`
--
ALTER TABLE `email_list`
  MODIFY `elist_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `guitarwars`
--
ALTER TABLE `guitarwars`
  MODIFY `gw_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `s189_videos`
--
ALTER TABLE `s189_videos`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
