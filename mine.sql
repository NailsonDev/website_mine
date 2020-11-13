-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Ago-2020 às 21:06
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `infernus`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_admin.usuario`
--

CREATE TABLE `tb_admin.usuario` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `cargo` int(11) NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_admin.usuario`
--

INSERT INTO `tb_admin.usuario` (`id`, `user`, `password`, `nome`, `cargo`, `token`) VALUES
(8, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Clover', 8, ''),
(21, 'demon', '4297f44b13955235245b2497399d7a93', 'DEM0NYT', 7, '5f45d9acb0a20');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_anuncio`
--

CREATE TABLE `tb_anuncio` (
  `id` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `anuncio` longtext NOT NULL,
  `data` date DEFAULT NULL,
  `apelido` varchar(255) NOT NULL,
  `grupo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_anuncio`
--

INSERT INTO `tb_anuncio` (`id`, `titulo`, `anuncio`, `data`, `apelido`, `grupo`) VALUES
(34, 'Seja bem-vindo.', '<p>Ol&aacute;!</p>\r\n<p><strong style=\"text-align: justify; background-color: #ffffff; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; margin: 0px; padding: 0px;\">Lorem Ipsum</strong><span style=\"text-align: justify; background-color: #ffffff; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px;\">&nbsp;</span><span style=\"text-align: justify; background-color: #ffffff; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px;\">is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>\r\n<p><span style=\"text-align: justify; background-color: #ffffff; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px;\"><img src=\"https://i.imgur.com/sQVfWhv.png\" alt=\"\" width=\"100%\" height=\"auto\" /></span></p>\r\n<p><span style=\"text-align: justify; background-color: #ffffff; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px;\"><strong style=\"text-align: justify; background-color: #ffffff; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; margin: 0px; padding: 0px;\">Lorem Ipsum</strong><span>&nbsp;</span><span>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></span></p>', '2020-08-22', 'Clover', 8),
(35, 'Bem-vindo ', '<p>Ol&aacute; :)</p>', '2020-08-26', 'Clover', 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_emails`
--

CREATE TABLE `tb_emails` (
  `id` int(11) NOT NULL,
  `nickname` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `mensagem` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_emails`
--

INSERT INTO `tb_emails` (`id`, `nickname`, `email`, `mensagem`) VALUES
(16, 'Clover', 'testando@gmail.com', 'hnhn');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_equipe`
--

CREATE TABLE `tb_equipe` (
  `id` int(11) NOT NULL,
  `nickname` varchar(255) NOT NULL,
  `cargo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_equipe`
--

INSERT INTO `tb_equipe` (`id`, `nickname`, `cargo`) VALUES
(39, 'DEM0NYT', 7),
(41, 'COP113', 6),
(43, 'Freitinhas', 4),
(45, 'zProdigy', 3),
(46, 'Dark', 2),
(50, 'Olokausto', 2),
(52, 'Spilva', 4),
(53, 'ComboPai', 1),
(54, 'CaioMelo', 1),
(55, 'Moraeszk55', 1),
(56, 'PedroMarine', 1),
(57, 'HOTN5', 2),
(58, 'iFelix', 2),
(59, 'Purkzy', 3),
(60, 'softei', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_info.site`
--

CREATE TABLE `tb_info.site` (
  `id` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `direitos` text NOT NULL,
  `nome` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_info.site`
--

INSERT INTO `tb_info.site` (`id`, `titulo`, `direitos`, `nome`) VALUES
(1, 'Rede Infernus | Servidor de Minecraft', 'Rede Infernus é um servidor de Mincraft, com diversos minigames', 'Infernus');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_leaderboard`
--

CREATE TABLE `tb_leaderboard` (
  `id` int(11) NOT NULL,
  `player` varchar(255) NOT NULL,
  `top` int(11) NOT NULL,
  `wins` int(11) NOT NULL,
  `kills` int(11) NOT NULL,
  `kd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_leaderboard`
--

INSERT INTO `tb_leaderboard` (`id`, `player`, `top`, `wins`, `kills`, `kd`) VALUES
(4, 'Clover', 5000, 4000, 4400, 50),
(5, 'Noob', 3000, 200, 323, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_loja`
--

CREATE TABLE `tb_loja` (
  `id` int(11) NOT NULL,
  `id_imagem` int(11) NOT NULL,
  `price` varchar(255) NOT NULL,
  `botao` text NOT NULL,
  `id_image_cash` int(11) NOT NULL,
  `price_cash` varchar(255) NOT NULL,
  `botao_cash` text NOT NULL,
  `nome_vip` varchar(255) NOT NULL,
  `nome_cash` varchar(255) NOT NULL,
  `id_vip` int(11) NOT NULL,
  `id_cash` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_loja`
--

INSERT INTO `tb_loja` (`id`, `id_imagem`, `price`, `botao`, `id_image_cash`, `price_cash`, `botao_cash`, `nome_vip`, `nome_cash`, `id_vip`, `id_cash`) VALUES
(1, 0, '8,00', '', 0, '4,90', '', 'VIP Guerreiro', '1.000 Cash', 0, 0),
(2, 1, '13,00', '', 1, '9,90', '', 'VIP Mago', '5.000 Cash', 1, 1),
(3, 2, '18,30', '', 2, '17,90', '', 'VIP Paladino', '10.000 cash', 2, 2),
(4, 3, '25,00', '', 3, '24,90', '', 'VIP Infernus', '25.000 cash', 3, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_novidades`
--

CREATE TABLE `tb_novidades` (
  `id` int(11) NOT NULL,
  `novidades` text NOT NULL,
  `nome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuarios`
--

CREATE TABLE `tb_usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`id`, `nome`) VALUES
(1, 'Jose'),
(2, 'Clover'),
(3, 'Clover'),
(4, 'Macaco'),
(5, 'DDD'),
(6, 'Macaco'),
(7, 'Clover'),
(8, 'Clover'),
(9, 'Clover'),
(10, 'Macaco'),
(11, 'Clover'),
(12, 'Macaco'),
(13, 'Macaco'),
(14, 'Clover'),
(15, 'Macaco'),
(16, 'Clover'),
(17, 'Clover'),
(18, 'Clover'),
(19, 'Clover'),
(20, 'Clover'),
(21, 'Clover'),
(22, 'Clover'),
(23, 'Clover');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_vantagens_vip`
--

CREATE TABLE `tb_vantagens_vip` (
  `id` int(11) NOT NULL,
  `vantagem` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_vantagens_vip`
--

INSERT INTO `tb_vantagens_vip` (`id`, `vantagem`) VALUES
(1, '<p>Sem vatagens.</p>');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_admin.usuario`
--
ALTER TABLE `tb_admin.usuario`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_anuncio`
--
ALTER TABLE `tb_anuncio`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_emails`
--
ALTER TABLE `tb_emails`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_equipe`
--
ALTER TABLE `tb_equipe`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_info.site`
--
ALTER TABLE `tb_info.site`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_leaderboard`
--
ALTER TABLE `tb_leaderboard`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_loja`
--
ALTER TABLE `tb_loja`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_novidades`
--
ALTER TABLE `tb_novidades`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_vantagens_vip`
--
ALTER TABLE `tb_vantagens_vip`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_admin.usuario`
--
ALTER TABLE `tb_admin.usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `tb_anuncio`
--
ALTER TABLE `tb_anuncio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de tabela `tb_emails`
--
ALTER TABLE `tb_emails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `tb_equipe`
--
ALTER TABLE `tb_equipe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT de tabela `tb_info.site`
--
ALTER TABLE `tb_info.site`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tb_leaderboard`
--
ALTER TABLE `tb_leaderboard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tb_loja`
--
ALTER TABLE `tb_loja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tb_novidades`
--
ALTER TABLE `tb_novidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de tabela `tb_vantagens_vip`
--
ALTER TABLE `tb_vantagens_vip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
