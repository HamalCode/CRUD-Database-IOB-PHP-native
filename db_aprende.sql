-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 02, 2017 at 09:56 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_aprende`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_dosente`
--

CREATE TABLE IF NOT EXISTS `tb_dosente` (
  `NIP` varchar(20) NOT NULL,
  `Naran_Dosente` varchar(50) NOT NULL,
  `Sexo` varchar(10) NOT NULL,
  `Status` varchar(20) NOT NULL,
  `Studo_Ikus` varchar(20) NOT NULL,
  `Municipio` varchar(20) NOT NULL,
  `Hela_Fatin` varchar(20) NOT NULL,
  PRIMARY KEY (`NIP`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_dosente`
--

INSERT INTO `tb_dosente` (`NIP`, `Naran_Dosente`, `Sexo`, `Status`, `Studo_Ikus`, `Municipio`, `Hela_Fatin`) VALUES
('DOS001', 'Joao Pnto', 'Mane', 'Permanente', 'Lisensiatura', 'Aileu', 'Comoro'),
('DOS002', 'Filipe Sousa', 'Mane', 'Kontratado', 'Masterado', 'Dili', 'Delta');

-- --------------------------------------------------------

--
-- Table structure for table `tb_estudante`
--

CREATE TABLE IF NOT EXISTS `tb_estudante` (
  `Nre` varchar(20) NOT NULL,
  `Naran` varchar(50) NOT NULL,
  `Sexo` varchar(10) NOT NULL,
  `Hela_Fatin` varchar(20) NOT NULL,
  `Municipio` varchar(20) NOT NULL,
  `Fakuldade` varchar(20) NOT NULL,
  `Departemento` varchar(20) NOT NULL,
  PRIMARY KEY (`Nre`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_estudante`
--

INSERT INTO `tb_estudante` (`Nre`, `Naran`, `Sexo`, `Hela_Fatin`, `Municipio`, `Fakuldade`, `Departemento`) VALUES
('Nre0012017', 'Edyto Jeronimo', 'Mane', 'Delta III', 'Lautem', 'ICT', 'Teknik Informatika'),
('Nre0022017', 'Romaria Sasapau', 'Feto', 'Beto Barat', 'Ermera', 'Ekonomia', 'Akuntabilidade'),
('Nre0032017', 'Joao Pinto', 'Mane', 'Comoro', 'Aileu', 'ICT', 'Teknik Informatika');
