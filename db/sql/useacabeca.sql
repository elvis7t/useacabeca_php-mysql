-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: mysql:3306
-- Tempo de geração: 08-Nov-2022 às 16:54
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
(5, 'Laoura ', 'Carneiro', 'I  will abducted', '12 hrs', '2 green little mans', 'Homenzinhos Verdes', 'Me deram comida', 'S', 'lala@gmail', 'wwww'),
(6, 'ELVIS', 'DA SILVA', 'Fui abdusido', '2 horas', '2', 'Homenzinhos Verdes', 'Me analizaram', 'S', 'elvis7t@gmail.com', '                \r\n            '),
(7, 'ELVIS', 'DA SILVA', 'Fui abdusido', '2 horas', '2', 'Homenzinhos Verdes', 'Me analizaram', 'S', 'elvis7t@gmail.com', '                \r\n            '),
(8, 'ELVIS', 'DA SILVA', 'Fui abdusido', '2 horas', '2', 'Homenzinhos Verdes', 'Me analizaram', 'S', 'elvis7t@gmail.com', '                \r\n            ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `elvis_store`
--

CREATE TABLE `elvis_store` (
  `elist_id` int NOT NULL,
  `elist_firstname` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `elist_lastname` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `elist_email` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `elvis_store`
--

INSERT INTO `elvis_store` (`elist_id`, `elist_firstname`, `elist_lastname`, `elist_email`) VALUES
(1, 'Thiago ', 'Romariz', 'tromariz@gmail.com'),
(3, 'Laura', 'Gerogina', 'lala@gmail'),
(24, 'Hannah', 'Arendt', 'ssss@gmail.com'),
(25, 'Maria', 'Peralta', 'mama@gmail.com'),
(26, 'Elvis', 'Leite', 'elvis7t@gmail.com'),
(27, 'Jhon', 'Diwi', 'jdwiw@gmail.com'),
(28, 'Elvis', 'Leite', 'elvis7t@gmail.com'),
(29, 'Elvis', 'Leite', 'elvis7t@gmail.com'),
(30, 'Elvis', 'Leite', 'elvis7t@gmail.com'),
(31, 'Elvis', 'Leite', 'elvis7t@gmail.com'),
(32, 'Elvis', 'Leite', 'elvis7t@gmail.com'),
(33, 'Elvis', 'Leite', 'elvis7t@gmail.com'),
(34, 'Elvis', 'Leite', 'elvis7t@gmail.com'),
(35, 'Elvis', 'Leite', 'elvis7t@gmail.com'),
(36, 'Elvis', 'Leite', 'elvis7t@gmail.com'),
(37, 'Elvis', 'Leite', 'elvis7t@gmail.com'),
(38, 'Elvis', 'Leite', 'elvis7t@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `guitarwars`
--

CREATE TABLE `guitarwars` (
  `gw_id` int NOT NULL,
  `gw_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `gw_name` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gw_score` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gw_screenshot` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gw_aproved` enum('n','a') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'n'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `guitarwars`
--

INSERT INTO `guitarwars` (`gw_id`, `gw_date`, `gw_name`, `gw_score`, `gw_screenshot`, `gw_aproved`) VALUES
(2, '2022-09-14 17:20:42', 'Jeny Joplin', '12000', 'guitar.png', 'n'),
(3, '2022-09-14 17:23:25', 'Elvis Plesley', '12000', 'guitar.png', 'n'),
(4, '2022-09-14 17:31:16', 'Jimmi Hendrix', '17000', 'guitar.png', 'a'),
(6, '2022-09-15 16:37:28', 'Elvis Plesley', '1200', 'guitar.png', 'n'),
(7, '2022-09-15 18:25:04', 'Cecilia Meirelles', '12333', 'guitar.png', 'a'),
(8, '2022-10-24 10:49:51', 'Elvis Leite', '111', '', 'a');

-- --------------------------------------------------------

--
-- Estrutura da tabela `mismatch_response`
--

CREATE TABLE `mismatch_response` (
  `response_id` int NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `topic_id` int NOT NULL,
  `response` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `mismatch_topic`
--

CREATE TABLE `mismatch_topic` (
  `topic_id` int NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `mismatch_user`
--

CREATE TABLE `mismatch_user` (
  `user_id` int NOT NULL,
  `user_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_password` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_joindate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `user_firstname` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_lastname` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_gender` enum('m','f') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_birdate` timestamp NULL DEFAULT NULL,
  `user_city` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_state` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_picture` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `mismatch_user`
--

INSERT INTO `mismatch_user` (`user_id`, `user_name`, `user_password`, `user_joindate`, `user_firstname`, `user_lastname`, `user_gender`, `user_birdate`, `user_city`, `user_state`, `user_picture`) VALUES
(1, 'hannaa', '4297f44b13955235245b2497399d7a93', '2022-10-25 12:32:11', 'Hannah ', 'Arendt', 'f', '2022-10-05 00:00:00', ' Hanôver', 'Alemanha', 'hanna_arendt.png'),
(2, 'jhonnn', '4297f44b13955235245b2497399d7a93', '2022-10-25 12:49:38', 'Jhonnn', 'Dewey', 'm', '2022-10-20 00:00:00', ' Burlington, Vermont, ', 'EUA', 'john _dewey.png'),
(3, 'Jeanpiage', '4297f44b13955235245b2497399d7a93', '2022-10-25 13:01:21', 'Jean', 'William Fritz Piaget', 'm', '2022-09-16 00:00:00', ' Neuchâtel', 'Suíça', 'jean_piage.png');

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
  `email` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(3) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
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
-- Índices para tabela `elvis_store`
--
ALTER TABLE `elvis_store`
  ADD PRIMARY KEY (`elist_id`);

--
-- Índices para tabela `guitarwars`
--
ALTER TABLE `guitarwars`
  ADD PRIMARY KEY (`gw_id`);

--
-- Índices para tabela `mismatch_response`
--
ALTER TABLE `mismatch_response`
  ADD PRIMARY KEY (`response_id`);

--
-- Índices para tabela `mismatch_topic`
--
ALTER TABLE `mismatch_topic`
  ADD PRIMARY KEY (`topic_id`);

--
-- Índices para tabela `mismatch_user`
--
ALTER TABLE `mismatch_user`
  ADD PRIMARY KEY (`user_id`);

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
  MODIFY `aa_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `elvis_store`
--
ALTER TABLE `elvis_store`
  MODIFY `elist_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de tabela `guitarwars`
--
ALTER TABLE `guitarwars`
  MODIFY `gw_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `mismatch_response`
--
ALTER TABLE `mismatch_response`
  MODIFY `response_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `mismatch_topic`
--
ALTER TABLE `mismatch_topic`
  MODIFY `topic_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `mismatch_user`
--
ALTER TABLE `mismatch_user`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
