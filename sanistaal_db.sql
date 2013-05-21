-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Vært: localhost
-- Genereringstid: 21. 05 2013 kl. 11:38:26
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
  `loft_bund` varchar(255) NOT NULL,
  `length_cm` varchar(255) NOT NULL,
  PRIMARY KEY (`alu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Data dump for tabellen `alulister`
--

INSERT INTO `alulister` (`alu_id`, `loft_bund`, `length_cm`) VALUES
(1, 'Vognbund', '1x46 + 1x107');

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
(5, 1),
(9, 1);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `bekladninger`
--

CREATE TABLE IF NOT EXISTS `bekladninger` (
  `sani_nr` int(11) NOT NULL,
  `be_id` int(11) NOT NULL AUTO_INCREMENT,
  `be_titel` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `prioritet` int(11) NOT NULL,
  `billednavn` varchar(255) NOT NULL,
  PRIMARY KEY (`be_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Data dump for tabellen `bekladninger`
--

INSERT INTO `bekladninger` (`sani_nr`, `be_id`, `be_titel`, `prioritet`, `billednavn`) VALUES
(3169141, 1, 'VENSTRE SIDE', 1, '3169141_1.png'),
(3169141, 2, 'HÃ˜JRE SIDE', 2, '3169141_2.png'),
(3169141, 3, 'SKYDEDÃ˜R', 3, '3169141_3.png'),
(49464132, 7, 'FORSIDE', 1, '49464132_1_id7.png'),
(49464132, 8, 'BAGSIDE', 2, '49464132_2_id8.jpg');

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
  `be_sani_nr` int(11) NOT NULL,
  `bil_navn` varchar(255) NOT NULL,
  `billedenavn` varchar(255) NOT NULL,
  `pdf_filnavn` varchar(255) NOT NULL,
  PRIMARY KEY (`bil_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Data dump for tabellen `biler`
--

INSERT INTO `biler` (`bil_id`, `fabrikant_id`, `be_sani_nr`, `bil_navn`, `billedenavn`, `pdf_filnavn`) VALUES
(1, 1, 0, 'Transit L1', 'ford_transit.jpg', '1433317.pdf'),
(2, 1, 0, 'Transit L2', 'ford_transit.jpg', '1433317.pdf'),
(3, 1, 0, 'Transit L3', 'ford_transit.jpg', '1433317.pdf'),
(4, 1, 0, 'Transit L4', 'ford_transit.jpg', '1433317.pdf'),
(5, 7, 3169141, 'Bipper', 'peugeot_bipper.jpg', '1433317.pdf');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `fabrikant`
--

CREATE TABLE IF NOT EXISTS `fabrikant` (
  `fabrikant_id` int(100) NOT NULL AUTO_INCREMENT,
  `fabrikant_navn` varchar(255) NOT NULL,
  PRIMARY KEY (`fabrikant_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Data dump for tabellen `fabrikant`
--

INSERT INTO `fabrikant` (`fabrikant_id`, `fabrikant_navn`) VALUES
(1, 'Ford'),
(2, 'Citroen'),
(3, 'Toyota'),
(4, 'Opel'),
(6, 'Rolls Royce'),
(7, 'Peugot');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `loft_bund`
--

CREATE TABLE IF NOT EXISTS `loft_bund` (
  `sani_nr` int(11) NOT NULL,
  `lb_id` int(11) NOT NULL AUTO_INCREMENT,
  `bund_loft` varchar(255) NOT NULL,
  `billednavn` varchar(255) NOT NULL,
  PRIMARY KEY (`lb_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Data dump for tabellen `loft_bund`
--

INSERT INTO `loft_bund` (`sani_nr`, `lb_id`, `bund_loft`, `billednavn`) VALUES
(3169158, 1, 'LOFT', '3169158_loft.png'),
(3169166, 2, 'VOGNBUND', '3169166_vognbund.png'),
(9999459, 4, 'LOFT', '9999459_loft_4.jpg'),
(9999458, 5, 'VOGNBUND', '9999458_vognbund_5.jpg');

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
(5, 3169166),
(9, 3169158),
(9, 9999459);

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
