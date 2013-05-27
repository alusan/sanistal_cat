-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Vært: localhost
-- Genereringstid: 27. 05 2013 kl. 12:47:46
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Data dump for tabellen `alulister`
--

INSERT INTO `alulister` (`alu_id`, `loft_bund`, `length_cm`) VALUES
(1, 'Vognbund', '1x46 + 1x107'),
(2, 'Loft', '2 stk 50 x 30 aluvinkel 310 cm<br />\r\n1 stk buet aluliste 320 cm<br />\r\n1 stk buet aluliste 162,5 cm'),
(3, 'BeklÃ¦dning', '3 stk plade + 3 stk buet aluliste 200 cm'),
(4, 'Vognbund', '1x61'),
(5, 'Vognbund', '1x56 + 1x128'),
(6, 'Vognbund', '1 x 60 + 1 x 123');

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
(10, 2),
(11, 4),
(12, 5),
(13, 6);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `bekladninger`
--

CREATE TABLE IF NOT EXISTS `bekladninger` (
  `sani_nr` int(11) NOT NULL,
  `be_id` int(11) NOT NULL AUTO_INCREMENT,
  `be_titel` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `type` int(1) NOT NULL,
  `prioritet` int(11) NOT NULL,
  `billednavn` varchar(255) NOT NULL,
  PRIMARY KEY (`be_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Data dump for tabellen `bekladninger`
--

INSERT INTO `bekladninger` (`sani_nr`, `be_id`, `be_titel`, `type`, `prioritet`, `billednavn`) VALUES
(3169141, 1, 'VENSTRE SIDE', 1, 1, '3169141_1.png'),
(3169141, 2, 'HÃ˜JRE SIDE', 1, 2, '3169141_2.png'),
(3169141, 3, 'SKYDEDÃ˜R', 1, 3, '3169141_3.png'),
(2047090, 9, 'VENSTRE SIDE BAG', 1, 1, '2047090_1_id9.png'),
(2047090, 10, 'VENSTRE MIDTERSTE DEL', 1, 2, '2047090_2_id10.png'),
(2047090, 11, 'VENSTRE SIDE FORRESTE', 1, 3, '2047090_3_id11.png'),
(2047090, 12, 'HÃ˜JRE SIDE BAG', 1, 4, '2047090_4_id12.png'),
(2047090, 13, 'HÃ˜JRE SIDE FORRESTE DEL', 1, 5, '2047090_5_id13.png'),
(2047090, 14, 'NEDERSTE SKYDEDÃ˜R', 1, 6, '2047090_6_id14.png'),
(2047090, 15, 'MIDTERSTE SKYDEDÃ˜R', 1, 7, '2047090_7_id15.png'),
(2047090, 16, 'Ã˜VERSTE SKYDEDÃ˜R', 1, 8, '2047090_8_id16.png'),
(2047090, 17, 'VENSTRE BAGDÃ˜R', 1, 9, '2047090_9_id17.png'),
(2047090, 18, 'HÃ˜JRE BAGDÃ˜R', 1, 10, '2047090_10_id18.png'),
(614313, 19, 'VENSTRE SIDEBEKLÃ†DNING', 1, 1, '614313_1_id19.png'),
(614313, 20, 'HÃ˜JRE SIDEBEKLÃ†DNING', 1, 2, '614313_2_id20.png'),
(614313, 21, 'SKYDEDÃ˜R NEDERST', 1, 3, '614313_3_id21.png'),
(614313, 22, 'SKYDEDÃ˜R Ã˜VERST', 1, 4, '614313_4_id22.png'),
(614313, 23, 'VENSTRE BAGDÃ˜R', 1, 5, '614313_5_id23.png'),
(614313, 24, 'HÃ˜JRE BAGDÃ˜R', 1, 6, '614313_6_id24.png'),
(3169158, 25, 'ingen', 2, 1, '3169158_1_id25.png'),
(2047116, 27, 'ingen', 2, 1, '2047116_1_id27.png'),
(2047116, 28, 'ingen', 2, 2, '2047116_2_id28.png'),
(2047116, 29, 'ingen', 2, 3, '2047116_3_id29.png'),
(1433317, 30, 'VENSTRE SIDEBEKLÃ†DNING', 1, 1, '1433317_1_id30.png'),
(1433317, 31, 'HÃ˜JRE SIDEBEKLÃ†DNING', 1, 2, '1433317_2_id31.png'),
(1433317, 32, 'SKYDEDÃ˜R NEDERST', 1, 3, '1433317_3_id32.png'),
(1433317, 33, 'SKYDEDÃ˜R Ã˜VERST', 1, 4, '1433317_4_id33.png'),
(1433317, 34, 'VENSTRE BAGDÃ˜R', 1, 5, '1433317_5_id34.png'),
(1433317, 35, 'HÃ˜JRE BAGDÃ˜R', 1, 6, '1433317_6_id35.png'),
(2282853, 36, 'VENSTRE SIDE BAG', 1, 1, '2282853_1_id36.png'),
(2282853, 37, 'VENSTRE SIDE FOR', 1, 2, '2282853_2_id37.png'),
(2282853, 38, 'HÃ˜JRE SIDE ', 1, 3, '2282853_3_id38.png'),
(2282853, 39, 'SKYDEDÃ˜R ', 1, 4, '2282853_4_id39.png');

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
  `vo_sani_nr` int(11) NOT NULL,
  `lo_sani_nr` int(11) NOT NULL,
  `be_sani_nr` int(11) NOT NULL,
  `bil_navn` varchar(255) NOT NULL,
  `billedenavn` varchar(255) NOT NULL,
  `pdf_filnavn` varchar(255) NOT NULL,
  PRIMARY KEY (`bil_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Data dump for tabellen `biler`
--

INSERT INTO `biler` (`bil_id`, `fabrikant_id`, `vo_sani_nr`, `lo_sani_nr`, `be_sani_nr`, `bil_navn`, `billedenavn`, `pdf_filnavn`) VALUES
(5, 7, 3169166, 3169158, 3169141, 'Bipper', 'peugeot_bipper.jpg', '1433317.pdf'),
(10, 8, 2047157, 2047116, 2047090, 'Sprinter R2H2', 'Mercedes_Sprinter R2H2_10.png', '2047090_10.pdf'),
(11, 9, 454389, 0, 614313, 'Caddy', 'Volkswagen_Caddy_11.jpg', '614313_11.pdf'),
(12, 10, 382408, 0, 1433317, 'Connect L1', 'Ford_Connect L1_12.jpg', '1433317_12.pdf'),
(13, 11, 381566, 0, 2282853, 'Doblo L1', 'Fiat _Doblo L1_13.jpg', '2282853_13.pdf');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `fabrikant`
--

CREATE TABLE IF NOT EXISTS `fabrikant` (
  `fabrikant_id` int(100) NOT NULL AUTO_INCREMENT,
  `fabrikant_navn` varchar(255) NOT NULL,
  PRIMARY KEY (`fabrikant_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Data dump for tabellen `fabrikant`
--

INSERT INTO `fabrikant` (`fabrikant_id`, `fabrikant_navn`) VALUES
(7, 'Peugot'),
(8, 'Mercedes'),
(9, 'Volkswagen'),
(10, 'Ford'),
(11, 'Fiat ');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Data dump for tabellen `loft_bund`
--

INSERT INTO `loft_bund` (`sani_nr`, `lb_id`, `bund_loft`, `billednavn`) VALUES
(3169166, 2, 'VOGNBUND', '3169166_vognbund.png'),
(2047157, 9, 'VOGNBUND', '2047157_vognbund_9.png'),
(454389, 10, 'VOGNBUND', '454389_vognbund_10.png'),
(382408, 11, 'VOGNBUND', '382408_vognbund_11.png'),
(381566, 12, 'VOGNBUND', '381566_vognbund_12.png');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `loft_bund_connect`
--

CREATE TABLE IF NOT EXISTS `loft_bund_connect` (
  `bil_id` int(11) NOT NULL,
  `lb_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `loft_bund_connect`
--

INSERT INTO `loft_bund_connect` (`bil_id`, `lb_id`) VALUES
(5, 1),
(5, 2),
(10, 6),
(10, 7),
(10, 8),
(10, 9),
(11, 10);

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
(1, 'ansat', 'kodeord', 2),
(2, 'admin', 'kodeord', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
