-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3308
-- Generation Time: 20-Maio-2016 às 02:38
-- Versão do servidor: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bd_projeto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cadastros`
--

CREATE TABLE IF NOT EXISTS `tb_cadastros` (
`id` int(255) NOT NULL,
  `nome_completo` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `email_confirmacao` varchar(100) NOT NULL,
  `data_nascimento` date NOT NULL,
  `estado` varchar(2) NOT NULL,
  `cidade` varchar(40) NOT NULL,
  `telefone` varchar(30) NOT NULL,
  `empresa` varchar(100) NOT NULL,
  `imagem` varchar(150) NOT NULL,
  `username` varchar(100) NOT NULL,
  `senha` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `confirmar_senha` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Extraindo dados da tabela `tb_cadastros`
--

INSERT INTO `tb_cadastros` (`id`, `nome_completo`, `cpf`, `sexo`, `email`, `email_confirmacao`, `data_nascimento`, `estado`, `cidade`, `telefone`, `empresa`, `imagem`, `username`, `senha`, `confirmar_senha`) VALUES
(26, 'Admin', '11122233344', 'Masculino', 'admin@1', 'admin@1', '2016-05-19', 'SP', 'S&atilde;o Paulo', '1122223333', 'MetaCortex', 'Imagens_Cadastro/admin.jpg', 'Admin', '7c222fb2927d828af22f592134e8932480637c0d', '7c222fb2927d828af22f592134e8932480637c0d'),
(27, 'Dario Teles', '11122233344', 'Masculino', 'dario@1', 'dario@1', '1996-11-25', 'SP', 'Itapevi', '1122223333', 'MetaCortex', 'dario.png', 'Dario Teles', 'a642a77abd7d4f51bf9226ceaf891fcbb5b299b8', 'a642a77abd7d4f51bf9226ceaf891fcbb5b299b8'),
(28, 'Pedro', '11122233344', 'Masculino', 'pedro@1', 'pedro@1', '2016-05-02', 'SP', 'S&atilde;o Paulo', '112223336665', 'tESTE', 'Imagens_Cadastro/avatar_fe39d714b782_128.png', 'Pedro', 'a642a77abd7d4f51bf9226ceaf891fcbb5b299b8', 'a642a77abd7d4f51bf9226ceaf891fcbb5b299b8');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_depoimentos`
--

CREATE TABLE IF NOT EXISTS `tb_depoimentos` (
`id` int(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `depoimento` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `tb_depoimentos`
--

INSERT INTO `tb_depoimentos` (`id`, `email`, `depoimento`) VALUES
(8, 'dario@1', 'Naruto (em japon&ecirc;s: ãƒŠãƒ«ãƒˆ, Naruto?) &eacute; o t&iacute;tulo de uma s&eacute;rie de mang&aacute; escrito e ilustrado por Masashi Kishimoto. Conta a hist&oacute;ria de Naruto Uzumaki, um jovem ninja que constantemente procura por reconhecimento e sonha em se tornar Hokage, o l&iacute;der m&aacute;ximo e mais poderoso de sua vila. A s&eacute;rie &eacute; baseada em um one-shot de Kishimoto publicado na edi&ccedil;&atilde;o de agosto de 1997 da revista Akamaru Jump.\r\n\r\nNaruto foi serializado na revista Weekly Shonen Jump da edi&ccedil;&atilde;o 43 de 1999 at&eacute; a edi&ccedil;&atilde;o 50 de 2014, com os cap&iacute;tulos reunidos em setenta e dois tankobon pela editora Shueisha. Mais tarde o mang&aacute; foi adaptado para anime, que foi produzido pelo Studio Pierrot e Aniplex. Estreou no Jap&atilde;o pela TV Tokyo e outras emissoras TX Networks em 3 de outubro de 2002. A primeira ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_cadastros`
--
ALTER TABLE `tb_cadastros`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_depoimentos`
--
ALTER TABLE `tb_depoimentos`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_cadastros`
--
ALTER TABLE `tb_cadastros`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `tb_depoimentos`
--
ALTER TABLE `tb_depoimentos`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
