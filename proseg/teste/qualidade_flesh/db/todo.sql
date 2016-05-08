-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 05-Maio-2016 às 22:01
-- Versão do servidor: 5.6.15-log
-- PHP Version: 5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `qualidade`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `todo`
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
  PRIMARY KEY (`id`),
  UNIQUE KEY `numero` (`numero`),
  KEY `priority` (`priority`),
  KEY `due_on` (`due_on`),
  KEY `status` (`status`),
  KEY `deleted` (`deleted`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Extraindo dados da tabela `todo`
--

INSERT INTO `todo` (`id`, `priority`, `created_on`, `due_on`, `last_modified_on`, `title`, `description`, `comment`, `status`, `deleted`, `descricao`, `numero`, `origem`, `tipoacao`, `processo`, `identificador`, `causa`, `imediata`, `corretiva`) VALUES
(1, 2, '2016-05-05 13:49:49', '2016-05-10 00:00:00', '2016-05-05 13:51:02', 'Primeiro', '', 'resolvida', 'RESOLVIDA', 0, '', '001/16', '', '', '', '', '', '', ''),
(2, 2, '2016-05-05 13:50:01', '2016-05-10 00:00:00', '2016-05-05 16:02:07', 'segundo', '', '', 'VENCIDO', 1, '', '002/16', '', '', '', '', '', '', ''),
(3, 2, '2016-05-05 13:50:16', '2016-05-05 00:15:00', '2016-05-05 16:02:14', 'terceiro', '', 'vencido', 'VENCIDO', 1, '', '003/16', '', '', '', '', '', '', ''),
(4, 2, '2016-05-05 13:51:47', '2016-05-10 00:00:00', '2016-05-05 16:56:04', 'quarta', '', 'sdffff', 'VENCIDO', 0, 'detalhamento', '004/16', '$origem', '$tipoacao', 'rh', 'andré', 'dddd', 'dddd', 'dddd'),
(5, 2, '2016-05-05 13:55:27', '2016-05-10 00:00:00', '2016-05-05 13:55:27', 'quinta', '', '', 'PENDENTE', 0, '', '005/16', '', '', '', '', '', '', ''),
(6, 2, '2016-05-05 14:10:18', '2016-05-10 00:00:00', '2016-05-05 14:12:39', 'sexta', '', 'comentário', 'RESOLVIDA', 0, 'detalhamento alterado', '006/16', '', '', '', '', '', '', ''),
(7, 2, '2016-05-05 14:22:22', '2016-05-10 00:00:00', '2016-05-05 14:42:12', 'sétima', '', 'comentário', 'RESOLVIDA', 0, 'detalhamento sete', '007/16', '', '', '', '', '', '', ''),
(8, 2, '2016-05-05 14:44:09', '2016-05-10 00:00:00', '2016-05-05 14:44:09', 'oitava', '', 'comentario', 'PENDENTE', 0, 'detalhamento', '008/16', '', '', '', '', '', '', ''),
(9, 2, '2016-05-05 14:50:38', '2016-05-10 00:00:00', '2016-05-05 15:32:47', 'nona', '', 'comentário', 'PENDENTE', 0, 'detalhamento', '009/16', 'Serviço não conforme', '', '', '', '', '', ''),
(10, 2, '2016-05-05 15:00:49', '2016-05-10 00:00:00', '2016-05-05 15:01:34', 'DEZ', '', 'comentário ', 'RESOLVIDA', 0, 'DETALHAMENTO', '010/16', 'ORIGEM alterada', '', '', '', '', '', ''),
(11, 2, '2016-05-05 15:43:21', '2016-05-10 00:00:00', '2016-05-05 16:02:44', 'onze', '', 'comentário', 'RESOLVIDA', 0, 'detalhamento', '011/16', '$origem', '$tipoacao', 'operacional', '', '', '', ''),
(12, 2, '2016-05-05 15:48:46', '2016-05-10 00:00:00', '2016-05-05 15:48:46', 'doze', '', 'comentário', 'PENDENTE', 0, 'detalhamento', '012/16', 'Serviço não conforme', 'Corretiva', '', '', '', '', ''),
(13, 2, '2016-05-05 16:00:25', '2016-05-10 00:00:00', '2016-05-05 16:00:25', 'treze', '', 'comentário', 'PENDENTE', 0, 'detalhamento', '013/16', 'Reclamação do cliente', 'Preventiva', 'ti / qualidade', '', '', '', ''),
(14, 2, '2016-05-05 16:13:49', '2016-05-10 00:00:00', '2016-05-05 16:13:49', 'catorze', '', 'comentário', 'PENDENTE', 0, 'detalhamento', '014/16', 'Reclamação do cliente', 'Preventiva', 'rh', 'edmilson', '', '', ''),
(15, 2, '2016-05-05 16:41:53', '2016-05-26 00:15:00', '2016-05-05 16:41:53', 'quinze', '', 'comentário', 'PENDENTE', 0, 'detalhamento', '015/16', 'Serviço não conforme', 'Preventiva', 'operacional', 'Edmilson', 'modem não funciona', '', ''),
(16, 2, '2016-05-05 16:54:29', '2016-05-13 00:15:00', '2016-05-05 16:55:07', 'dezesseis', '', 'comentário', 'PENDENTE', 0, 'detalhamento', '016/16', '$origem', '$tipoacao', 'ti / qualidade', 'Edmilson', 'nao sei', 'imediata', 'corretiva');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
