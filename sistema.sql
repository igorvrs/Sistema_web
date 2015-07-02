-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Máquina: 127.0.0.1
-- Data de Criação: 02-Jul-2015 às 23:07
-- Versão do servidor: 5.6.11
-- versão do PHP: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `sistema`
--
CREATE DATABASE IF NOT EXISTS `sistema` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sistema`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedores`
--

CREATE TABLE IF NOT EXISTS `fornecedores` (
  `forn_id` int(11) NOT NULL AUTO_INCREMENT,
  `forn_cnpj` char(14) NOT NULL,
  `forn_razaosoc` varchar(128) NOT NULL,
  `forn_rua` varchar(128) NOT NULL,
  `forn_numero` int(11) NOT NULL,
  `forn_complemento` varchar(64) NOT NULL,
  `forn_cep` char(8) NOT NULL,
  `forn_bairro` varchar(128) NOT NULL,
  `forn_cidade` varchar(128) NOT NULL,
  `forn_uf` char(2) NOT NULL,
  `forn_pais` varchar(64) NOT NULL,
  `forn_fone` varchar(11) NOT NULL,
  `forn_email` varchar(128) NOT NULL,
  PRIMARY KEY (`forn_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `fornecedores`
--

INSERT INTO `fornecedores` (`forn_id`, `forn_cnpj`, `forn_razaosoc`, `forn_rua`, `forn_numero`, `forn_complemento`, `forn_cep`, `forn_bairro`, `forn_cidade`, `forn_uf`, `forn_pais`, `forn_fone`, `forn_email`) VALUES
(1, '25611651231531', 'Junior', 'teste', 23423, 'teste', '61616516', 'teste', 'teste', 'qw', 'teste', '11916516514', 'teste@teste.com'),
(3, '12345678912345', 'Microsoft S.A', 'Rua Jacupiringa', 340, 'BL A APTO 13', '09230330', 'Camilopolis', 'Santo André', 'SP', 'Brasil', '11983984740', 'teste@teste.com'),
(5, '65146814651646', 'Google', 'Rua A', 147, 'Nada', '13614684', 'Centro', 'São Paulo', 'SP', 'Brasil', '11968165135', 'asdasdsa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE IF NOT EXISTS `produto` (
  `prod_id` int(11) NOT NULL AUTO_INCREMENT,
  `prod_nome` varchar(64) DEFAULT NULL,
  `prod_tipo` enum('Perecivel','Nao perecivel') DEFAULT NULL,
  `prod_desc` text,
  `prod_valorunit` double DEFAULT NULL,
  `prod_valorvenda` double DEFAULT NULL,
  `fornec_id` int(11) DEFAULT NULL,
  `prod_desconto` int(11) DEFAULT NULL,
  `prod_qtdestoque` int(11) DEFAULT NULL,
  PRIMARY KEY (`prod_id`),
  KEY `fornec_id` (`fornec_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=69 ;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`prod_id`, `prod_nome`, `prod_tipo`, `prod_desc`, `prod_valorunit`, `prod_valorvenda`, `fornec_id`, `prod_desconto`, `prod_qtdestoque`) VALUES
(17, 'Fulano', '', 'teste', 100, 130, 3, 114, 20),
(18, 'asd', '', 'uj', 100, 130, 5, 114, 20),
(19, 'asd', '', 'uj', 100, 130, 5, 114, 20),
(58, 'Arroz', '', 'Arroz', 12.2, 15.86, 5, 14, 20),
(60, 'MacarrÃ£o', 'Perecivel', 'MacarrÃ£o', 3.5, 4.55, 5, 4, 20),
(61, 'Ovo', '', 'OVO', 0.9, 1.17, 5, 1, 100),
(62, 'Ovo', '', 'OVO', 0.8, 1.04, 5, 1, 100),
(63, 'Alho', '', 'Alho para vender', 0.8, 1.04, 5, 1, 300),
(67, 'Alho teste', '', 'aksudgasiud', 0.86, 1.12, 5, 1, 200),
(68, 'asdbsadbasdvsa', 'Perecivel', 'ksjbdasd', 157, 204.1, 5, 180, 200);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `produto_ibfk_1` FOREIGN KEY (`fornec_id`) REFERENCES `fornecedores` (`forn_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
