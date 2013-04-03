-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Vært: localhost
-- Genereringstid: 02. 04 2013 kl. 23:40:14
-- Serverversion: 5.5.24-log
-- PHP-version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sanistaal_db`
--

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `biler`
--

CREATE TABLE IF NOT EXISTS `biler` (
  `bil_id` double NOT NULL AUTO_INCREMENT,
  `bil_navn` varchar(255) NOT NULL,
  `bilmodel_id` double NOT NULL,
  `billedenavn` varchar(255) NOT NULL,
  `pdf_filnavn` varchar(255) NOT NULL,
  `loft_sani_nr` double NOT NULL,
  `bund_sani_nr` double NOT NULL,
  PRIMARY KEY (`bil_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Data dump for tabellen `biler`
--

INSERT INTO `biler` (`bil_id`, `bil_navn`, `bilmodel_id`, `billedenavn`, `pdf_filnavn`, `loft_sani_nr`, `bund_sani_nr`) VALUES
(1, 'L1', 1, 'ford_transit.jpg', '1433317.pdf', 3169158, 3169166),
(2, 'L2', 1, 'ford_transit.jpg', '1433317.pdf', 3169158, 3169166),
(3, 'L3', 1, 'ford_transit.jpg', '1433317.pdf', 3169158, 3169166),
(4, 'L4', 1, 'ford_transit.jpg', '1433317.pdf', 3169158, 3169166);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `bilmodel`
--

CREATE TABLE IF NOT EXISTS `bilmodel` (
  `bilmodel_id` double NOT NULL AUTO_INCREMENT,
  `bilmodel_navn` varchar(255) NOT NULL,
  `fabrikant_id` int(100) NOT NULL,
  PRIMARY KEY (`bilmodel_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Data dump for tabellen `bilmodel`
--

INSERT INTO `bilmodel` (`bilmodel_id`, `bilmodel_navn`, `fabrikant_id`) VALUES
(1, 'Transit Connect', 1),
(2, 'Transit Minibus', 1),
(3, 'Transit Van', 1);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `fabrikant`
--

CREATE TABLE IF NOT EXISTS `fabrikant` (
  `fabrikant_id` int(100) NOT NULL AUTO_INCREMENT,
  `fabrikant_navn` varchar(255) NOT NULL,
  PRIMARY KEY (`fabrikant_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Data dump for tabellen `fabrikant`
--

INSERT INTO `fabrikant` (`fabrikant_id`, `fabrikant_navn`) VALUES
(1, 'Ford'),
(2, 'Citroen'),
(3, 'Toyota');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
