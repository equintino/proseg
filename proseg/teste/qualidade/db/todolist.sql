-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Tempo de geração: 20/04/2016 às 17:54
-- Versão do servidor: 5.6.15-log
-- Versão do PHP: 5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `todolist`
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
  `status` enum('PENDENTE','FEITO','VENCIDO') NOT NULL DEFAULT 'PENDENTE',
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `priority` (`priority`),
  KEY `due_on` (`due_on`),
  KEY `status` (`status`),
  KEY `deleted` (`deleted`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Fazendo dump de dados para tabela `todo`
--

INSERT INTO `todo` (`id`, `priority`, `created_on`, `due_on`, `last_modified_on`, `title`, `description`, `comment`, `status`, `deleted`) VALUES
(1, 2, '2011-10-20 11:00:00', '2011-10-20 11:00:00', '2015-10-20 00:00:00', 'Clean the house', 'Clean the whole house, ideally including garden.', NULL, 'PENDENTE', 0),
(2, 2, '2011-09-02 18:24:00', '2011-10-07 08:26:49', '2011-10-05 15:00:00', 'Cut the lawn', 'Cut the lawn around the house.', NULL, 'PENDENTE', 0),
(3, 3, '2011-09-15 09:30:00', '2011-10-19 10:25:00', '2012-01-01 00:00:00', 'Buy a car', 'Choose the best car to buy and simply buy it.', 'New BMW bought.', 'FEITO', 0),
(4, 3, '2011-09-27 17:33:00', '2011-10-11 13:48:00', '2011-11-01 00:00:00', 'Open a new bank account', NULL, 'Not needed.', 'FEITO', 0),
(5, 1, '2010-08-12 08:17:00', '2011-10-07 08:06:40', '2010-09-01 00:00:00', 'Finish all the exams', NULL, NULL, 'VENCIDO', 0),
(6, 2, '2011-10-02 10:38:36', '2011-10-03 13:26:48', '2011-10-04 12:00:00', 'Send a letter to my sister', 'Send a letter to my sister with important information about what needs to be done.', 'Letter not needed, I called her.', 'VENCIDO', 0),
(7, 1, '2010-04-07 17:28:52', '2010-05-12 11:47:00', '2016-04-20 01:09:54', 'Book air tickets', 'Book air tickets to Canary Islands, for 3 people.', 'comento', 'PENDENTE', 1),
(8, 2, '2011-10-07 10:44:47', '2011-10-24 10:46:14', '2011-11-01 00:00:00', 'Pay electricity bills', 'Pay electricity bills for the house.', 'Paid.', 'VENCIDO', 0),
(9, 1, '2016-04-20 01:10:48', '2016-04-21 01:15:00', '2016-04-20 01:10:48', 'Testando', 'Vou testar amanhã', '', 'VENCIDO', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
