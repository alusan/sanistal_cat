-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Vært: localhost
-- Genereringstid: 22. 05 2013 kl. 09:07:22
-- Serverversion: 5.5.24-log
-- PHP-version: 5.3.13

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Data dump for tabellen `alulister`
--

INSERT INTO `alulister` (`alu_id`, `loft_bund`, `length_cm`) VALUES
(1, 'Vognbund', '1x46 + 1x107'),
(2, 'Loft', '2 stk 50 x 30 aluvinkel 310 cm<br />\r\n1 stk buet aluliste 320 cm<br />\r\n1 stk buet aluliste 162,5 cm'),
(3, 'BeklÃ¦dning', '3 stk plade<br />\r\n+ 3 stk buet aluliste 200 cm');

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
(9, 1),
(10, 3),
(10, 2);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Data dump for tabellen `bekladninger`
--

INSERT INTO `bekladninger` (`sani_nr`, `be_id`, `be_titel`, `prioritet`, `billednavn`) VALUES
(3169141, 1, 'VENSTRE SIDE', 1, '3169141_1.png'),
(3169141, 2, 'HÃ˜JRE SIDE', 2, '3169141_2.png'),
(3169141, 3, 'SKYDEDÃ˜R', 3, '3169141_3.png'),
(2047090, 9, 'VENSTRE SIDE BAG', 1, '2047090_1_id9.png'),
(2047090, 10, 'VENSTRE MIDTERSTE DEL', 2, '2047090_2_id10.png'),
(2047090, 11, 'VENSTRE SIDE FORRESTE', 3, '2047090_3_id11.png'),
(2047090, 12, 'HÃ˜JRE SIDE BAG', 4, '2047090_4_id12.png'),
(2047090, 13, 'HÃ˜JRE SIDE FORRESTE DEL', 5, '2047090_5_id13.png'),
(2047090, 14, 'NEDERSTE SKYDEDÃ˜R', 6, '2047090_6_id14.png'),
(2047090, 15, 'MIDTERSTE SKYDEDÃ˜R', 7, '2047090_7_id15.png'),
(2047090, 16, 'Ã˜VERSTE SKYDEDÃ˜R', 8, '2047090_8_id16.png'),
(2047090, 17, 'VENSTRE BAGDÃ˜R', 9, '2047090_9_id17.png'),
(2047090, 18, 'HÃ˜JRE BAGDÃ˜R', 10, '2047090_10_id18.png');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Data dump for tabellen `biler`
--

INSERT INTO `biler` (`bil_id`, `fabrikant_id`, `be_sani_nr`, `bil_navn`, `billedenavn`, `pdf_filnavn`) VALUES
(5, 7, 3169141, 'Bipper', 'peugeot_bipper.jpg', '1433317.pdf'),
(10, 8, 2047090, 'Sprinter R2H2', 'Mercedes_Sprinter R2H2_10.png', '2047090_10.pdf');

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
(7, 'Peugot'),
(8, 'Mercedes');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Data dump for tabellen `loft_bund`
--

INSERT INTO `loft_bund` (`sani_nr`, `lb_id`, `bund_loft`, `billednavn`) VALUES
(3169158, 1, 'LOFT', '3169158_loft.png'),
(3169166, 2, 'VOGNBUND', '3169166_vognbund.png'),
(2047116, 6, 'LOFT', '2047116_loft_6.png'),
(2047116, 7, 'LOFT', '2047116_loft_7.png'),
(2047116, 8, 'LOFT', '2047116_loft_8.png'),
(2047157, 9, 'VOGNBUND', '2047157_vognbund_9.png');

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
(9, 9999459),
(10, 2047116),
(10, 2047116),
(10, 2047116),
(10, 2047157);

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
