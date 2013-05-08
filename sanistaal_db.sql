-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Vært: localhost
-- Genereringstid: 08. 05 2013 kl. 09:34:58
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
-- Struktur-dump for tabellen `alulister`
--

CREATE TABLE IF NOT EXISTS `alulister` (
  `alu_id` int(11) NOT NULL AUTO_INCREMENT,
  `alu_navn` varchar(255) NOT NULL,
  `loft_bund` varchar(255) NOT NULL,
  `length_cm` varchar(255) NOT NULL,
  PRIMARY KEY (`alu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Data dump for tabellen `alulister`
--

INSERT INTO `alulister` (`alu_id`, `alu_navn`, `loft_bund`, `length_cm`) VALUES
(1, 'Bipper', 'Vognbund', '1x46 + 1x107');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `alulister_connect`
--

CREATE TABLE IF NOT EXISTS `alulister_connect` (
  `bil_id` int(11) NOT NULL,
  `alu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `alulister_connect`
--

INSERT INTO `alulister_connect` (`bil_id`, `alu_id`) VALUES
(5, 1);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `bekladninger`
--

CREATE TABLE IF NOT EXISTS `bekladninger` (
  `sani_nr` int(11) NOT NULL,
  `be_titel` varchar(255) CHARACTER SET utf8 COLLATE utf8_danish_ci NOT NULL,
  `be_beskrivelse` varchar(255) NOT NULL,
  `prioritet` int(11) NOT NULL,
  `billednavn` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `bekladninger`
--

INSERT INTO `bekladninger` (`sani_nr`, `be_titel`, `be_beskrivelse`, `prioritet`, `billednavn`) VALUES
(3169141, 'VENSTRE SIDE', 'Bla bla bla', 1, '3169141_1'),
(3169141, 'HØJRE SIDE', 'Bla bla', 2, '3169141_2'),
(3169141, 'SKYDEDØR', 'Bla', 3, '3169141_3');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `bekladning_connect`
--

CREATE TABLE IF NOT EXISTS `bekladning_connect` (
  `bil_id` int(11) NOT NULL,
  `sani_nr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `bekladning_connect`
--

INSERT INTO `bekladning_connect` (`bil_id`, `sani_nr`) VALUES
(5, 3169141);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `biler`
--

CREATE TABLE IF NOT EXISTS `biler` (
  `bil_id` int(11) NOT NULL AUTO_INCREMENT,
  `fabrikant_id` int(11) NOT NULL,
  `bil_navn` varchar(255) NOT NULL,
  `billedenavn` varchar(255) NOT NULL,
  `pdf_filnavn` varchar(255) NOT NULL,
  PRIMARY KEY (`bil_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Data dump for tabellen `biler`
--

INSERT INTO `biler` (`bil_id`, `fabrikant_id`, `bil_navn`, `billedenavn`, `pdf_filnavn`) VALUES
(1, 1, 'Transit L1', 'ford_transit.jpg', '1433317.pdf'),
(2, 1, 'Transit L2', 'ford_transit.jpg', '1433317.pdf'),
(3, 1, 'Transit L3', 'ford_transit.jpg', '1433317.pdf'),
(4, 1, 'Transit L4', 'ford_transit.jpg', '1433317.pdf'),
(5, 7, 'Bipper', 'peugeot_bipper.jpg', '1433317.pdf');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `fabrikant`
--

CREATE TABLE IF NOT EXISTS `fabrikant` (
  `fabrikant_id` int(100) NOT NULL AUTO_INCREMENT,
  `fabrikant_navn` varchar(255) NOT NULL,
  PRIMARY KEY (`fabrikant_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Data dump for tabellen `fabrikant`
--

INSERT INTO `fabrikant` (`fabrikant_id`, `fabrikant_navn`) VALUES
(1, 'Ford'),
(2, 'Citroen'),
(3, 'Toyota'),
(4, 'Opel'),
(6, 'Rolls Royce'),
(7, 'Peugot'),
(8, 'Ferrari');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `loft_bund`
--

CREATE TABLE IF NOT EXISTS `loft_bund` (
  `sani_nr` int(11) NOT NULL,
  `bund_loft` varchar(255) NOT NULL,
  `billednavn` varchar(255) NOT NULL,
  PRIMARY KEY (`sani_nr`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `loft_bund`
--

INSERT INTO `loft_bund` (`sani_nr`, `bund_loft`, `billednavn`) VALUES
(3169158, 'LOFT', '3169158_loft'),
(3169166, 'VOGNBUND', '3169166_vognbund');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `loft_bund_connect`
--

CREATE TABLE IF NOT EXISTS `loft_bund_connect` (
  `bil_id` int(11) NOT NULL,
  `sani_nr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `loft_bund_connect`
--

INSERT INTO `loft_bund_connect` (`bil_id`, `sani_nr`) VALUES
(5, 3169158),
(5, 3169166);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `rights` int(1) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Data dump for tabellen `users`
--

INSERT INTO `users` (`user_id`, `name`, `pass`, `rights`) VALUES
(1, 'morten', 'ostemand', 2),
(2, 'admin', 'kodeord', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
