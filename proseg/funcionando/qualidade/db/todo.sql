-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Tempo de geração: 07/05/2016 às 17:08
-- Versão do servidor: 5.6.15-log
-- Versão do PHP: 5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `qualidade`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `todo`
--

CREATE TABLE IF NOT EXISTS `todo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `priority` int(1) NOT NULL DEFAULT '2',
  `created_on` datetime NOT NULL,
  `due_on` datetime NOT NULL,
  `last_modified_on` datetime NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text,
  `comment` text,
  `status` enum('PENDENTE','RESOLVIDA','VENCIDO') NOT NULL DEFAULT 'PENDENTE',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `descricao` text NOT NULL,
  `numero` varchar(6) NOT NULL,
  `origem` varchar(100) NOT NULL,
  `tipoacao` varchar(100) NOT NULL,
  `processo` varchar(100) NOT NULL,
  `identificador` varchar(100) NOT NULL,
  `causa` varchar(100) NOT NULL,
  `imediata` text NOT NULL,
  `corretiva` text NOT NULL,
  `retorno` datetime NOT NULL,
  `implementador` varchar(100) NOT NULL,
  `eliminacao` datetime NOT NULL,
  `eliminacao_novo` datetime NOT NULL,
  `reg_eficacia` int(50) NOT NULL,
  `eficaz` varchar(5) NOT NULL,
  `eficaz_data` datetime NOT NULL,
  `novo_rnc` varchar(6) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `numero` (`numero`),
  KEY `priority` (`priority`),
  KEY `due_on` (`due_on`),
  KEY `status` (`status`),
  KEY `deleted` (`deleted`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Fazendo dump de dados para tabela `todo`
--

INSERT INTO `todo` (`id`, `priority`, `created_on`, `due_on`, `last_modified_on`, `title`, `description`, `comment`, `status`, `deleted`, `descricao`, `numero`, `origem`, `tipoacao`, `processo`, `identificador`, `causa`, `imediata`, `corretiva`, `retorno`, `implementador`, `eliminacao`, `eliminacao_novo`, `reg_eficacia`, `eficaz`, `eficaz_data`, `novo_rnc`) VALUES
(1, 2, '2016-05-05 13:49:49', '2016-05-10 00:00:00', '2016-05-05 13:51:02', 'Primeiro', '', 'resolvida', 'RESOLVIDA', 0, '', '001/16', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '0000-00-00 00:00:00', ''),
(2, 2, '2016-05-05 13:50:01', '2016-05-10 00:00:00', '2016-05-05 16:02:07', 'segundo', '', '', 'VENCIDO', 1, '', '002/16', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '0000-00-00 00:00:00', ''),
(3, 2, '2016-05-05 13:50:16', '2016-05-05 00:15:00', '2016-05-05 16:02:14', 'terceiro', '', 'vencido', 'VENCIDO', 1, '', '003/16', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '0000-00-00 00:00:00', ''),
(4, 2, '2016-05-05 13:51:47', '2016-05-10 00:00:00', '2016-05-05 16:56:04', 'quarta', '', 'sdffff', 'VENCIDO', 0, 'detalhamento', '004/16', '$origem', '$tipoacao', 'rh', 'andré', 'dddd', 'dddd', 'dddd', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '0000-00-00 00:00:00', ''),
(5, 2, '2016-05-05 13:55:27', '2016-05-10 00:00:00', '2016-05-07 16:20:25', 'quinta', '', '', 'PENDENTE', 1, '', '005/16', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '0000-00-00 00:00:00', ''),
(6, 2, '2016-05-05 14:10:18', '2016-05-10 00:00:00', '2016-05-05 14:12:39', 'sexta', '', 'comentário', 'RESOLVIDA', 0, 'detalhamento alterado', '006/16', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '0000-00-00 00:00:00', ''),
(7, 2, '2016-05-05 14:22:22', '2016-05-10 00:00:00', '2016-05-05 14:42:12', 'sétima', '', 'comentário', 'RESOLVIDA', 0, 'detalhamento sete', '007/16', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '0000-00-00 00:00:00', ''),
(8, 2, '2016-05-05 14:44:09', '2016-05-10 00:00:00', '2016-05-07 15:54:18', 'oitava', 'descrição', 'lllll', 'VENCIDO', 0, 'detalhamento', '008/16', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '0000-00-00 00:00:00', ''),
(9, 2, '2016-05-05 14:50:38', '2016-05-09 15:15:00', '2016-05-07 16:50:39', 'nona', '', '', 'RESOLVIDA', 0, 'detalhamento', '009/16', 'Serviço não conforme', 'Melhoria', '', '', '', 'xxx', 'xxx', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '0000-00-00 00:00:00', ''),
(10, 2, '2016-05-05 15:00:49', '2016-05-10 00:00:00', '2016-05-05 15:01:34', 'DEZ', '', 'comentário ', 'RESOLVIDA', 0, 'DETALHAMENTO', '010/16', 'ORIGEM alterada', '', '', '', '', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '0000-00-00 00:00:00', ''),
(11, 2, '2016-05-05 15:43:21', '2016-05-10 00:00:00', '2016-05-05 16:02:44', 'onze', '', 'comentário', 'RESOLVIDA', 0, 'detalhamento', '011/16', '$origem', '$tipoacao', 'operacional', '', '', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '0000-00-00 00:00:00', ''),
(12, 2, '2016-05-05 15:48:46', '2016-05-10 00:00:00', '2016-05-07 15:53:38', 'doze', '', 'comentário', 'PENDENTE', 1, 'detalhamento', '012/16', 'Serviço não conforme', 'Corretiva', '', '', '', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '0000-00-00 00:00:00', ''),
(13, 2, '2016-05-05 16:00:25', '2016-05-10 00:00:00', '2016-05-07 15:59:22', 'treze', '', 'jkllll', 'VENCIDO', 1, 'detalhamento', '013/16', 'Reclamação do cliente', 'Preventiva', 'ti / qualidade', '', '', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '0000-00-00 00:00:00', ''),
(14, 2, '2016-05-05 16:13:49', '2016-05-10 00:00:00', '2016-05-07 16:14:23', 'catorze', 'hhh', 'tttyu', 'VENCIDO', 0, 'detalhamento', '014/16', 'Reclamação do cliente', 'Preventiva', 'rh', 'edmilson', '', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '0000-00-00 00:00:00', ''),
(15, 2, '2016-05-05 16:41:53', '2016-05-26 00:15:00', '2016-05-07 16:18:40', 'quinze', '', 'dsffff', 'RESOLVIDA', 0, 'detalhamento', '015/16', 'Serviço não conforme', 'Preventiva', 'operacional', 'Edmilson', 'modem não funciona', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '0000-00-00 00:00:00', ''),
(16, 2, '2016-05-05 16:54:29', '2016-05-13 00:15:00', '2016-05-07 16:44:06', 'dezesseis', '', 'jjjjj', 'RESOLVIDA', 0, 'detalhamento', '016/16', '$origem', '$tipoacao', 'ti / qualidade', 'Edmilson', 'nao sei', 'imediata', 'corretiva', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '0000-00-00 00:00:00', ''),
(17, 2, '2016-05-07 15:42:28', '2016-05-12 00:00:00', '2016-05-07 16:16:08', 'nnn', '', '', 'PENDENTE', 1, '', '017/16', '$origem', '$tipoacao', '', '', '', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '0000-00-00 00:00:00', ''),
(18, 2, '2016-05-07 15:54:38', '2016-05-21 00:30:00', '2016-05-07 16:44:21', 'jjjj', '', '', 'PENDENTE', 1, '', '018/16', 'Serviço não conforme', 'Corretiva', '', '', '', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '0000-00-00 00:00:00', ''),
(19, 2, '2016-05-07 16:39:27', '2016-05-07 15:15:00', '2016-05-07 16:56:00', 'ghjj', '', 'vencido', 'VENCIDO', 0, 'ghjj', '019/16', 'Serviço não conforme', 'Preventiva', 'vbbnnn', 'fghh', 'fgh', 'yuii', 'yuii', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '0000-00-00 00:00:00', ''),
(21, 2, '2016-05-07 16:48:28', '2016-05-13 15:15:00', '2016-05-07 16:48:52', 'hhhh', '', 'hhhh', 'RESOLVIDA', 0, '', '021/16', 'Auditoria', 'Preventiva', '', '', '', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '0000-00-00 00:00:00', ''),
(20, 2, '2016-05-07 16:43:42', '2016-05-12 00:00:00', '2016-05-07 16:43:42', 'jjjjj', '', '', 'PENDENTE', 0, '', '020/16', '$origem', '$tipoacao', '', '', '', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '0000-00-00 00:00:00', ''),
(22, 2, '2016-05-07 16:50:55', '2016-05-10 15:15:00', '2016-05-07 16:55:12', 'hhh', '', '', 'PENDENTE', 1, 'iiii', '022/16', 'Serviço não conforme', 'Corretiva', 'jjj', 'iiiiii', 'iiii', 'iiii', 'iiii', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '0000-00-00 00:00:00', ''),
(23, 2, '2016-05-07 16:53:47', '2016-05-12 00:00:00', '2016-05-07 16:53:47', 'hhhh', '', '', 'PENDENTE', 0, '', '023/16', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '0000-00-00 00:00:00', ''),
(24, 2, '2016-05-07 16:56:36', '2016-05-18 15:15:00', '2016-05-07 16:56:56', 'dezessete+1', '', '', 'PENDENTE', 0, '', '024/16', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, '', '0000-00-00 00:00:00', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
