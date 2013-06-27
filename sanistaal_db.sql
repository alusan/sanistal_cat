-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Vært: localhost
-- Genereringstid: 27. 06 2013 kl. 18:31:43
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Data dump for tabellen `alulister`
--

INSERT INTO `alulister` (`alu_id`, `loft_bund`, `length_cm`) VALUES
(1, 'Vognbund', '1 x 46 + 1 x 107'),
(2, 'Loft', '2 stk 50 x 30 aluvinkel 310 cm<br />\r\n1 stk buet aluliste 320 cm<br />\r\n1 stk buet aluliste 162,5 cm'),
(3, 'BeklÃ¦dning', '3 stk plade + 3 stk buet aluliste 200 cm'),
(4, 'Vognbund', '1 x 61'),
(5, 'Vognbund', '1 x 56 + 1 x 128'),
(6, 'Vognbund', '1 x 60 + 1 x 123'),
(7, 'BeklÃ¦dning', '1 stk 20 x 20 vinkel'),
(8, 'Vognbund', '1 x 139,5 + 1 x 153,5'),
(9, 'Loft', '4 stk 20 x 20 vinkel + 1 stk buet aluliste 200 cm'),
(10, 'BeklÃ¦dning', '2 stk plade + 2 stk buet aluliste 200 cm'),
(11, 'Loft', '1 stk 50 x 30 aluvinkel 130 cm'),
(12, 'Vognbund', '2 x 139,5 + 1 x 153,5'),
(13, 'BeklÃ¦dning', '2 stk plade + 2 stk buet aluliste 214 cm'),
(14, 'BeklÃ¦dning', '3 stk plade + 3 stk buet aluliste 200 cm'),
(15, 'Loft', '2 stk 50 x 30 aluvinkel 400 cm<br />\r\n1 stk buet aluliste 400 cm<br />\r\n1 stk buet aluliste 300 cm'),
(16, 'Vognbund', '1 x 130 + 1 x 150'),
(17, 'Loft', '1 stk buet aluliste 400 cm<br />\r\n1 stk buet aluliste 300 cm'),
(18, 'Loft', '1 stk buet aluliste 320 cm<br />\r\n1 stk buet aluliste 162,5 cm'),
(19, 'Loft', '2 stk 50 x 30 aluvinkel 330 cm<br />\r\n1 stk buet aluliste 320 cm<br />\r\n1 stk buet aluliste 300 cm'),
(20, 'Vognbund', '1 x 100 + 1 x 154'),
(21, 'Vognbund', '1 x 128 + 1 x 154'),
(22, 'Loft', '2 stk 50 x 30 aluvinkel 400 cm<br />\r\n1 stk buet aluliste 450 cm<br />\r\n1 stk buet aluliste 300 cm'),
(23, 'Loft', '2 stk 50 x 30 aluvinkel 350 cm<br />\r\n1 stk buet aluliste 400 cm<br />\r\n1 stk buet aluliste 200 cm');

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
(13, 6),
(15, 7),
(15, 8),
(16, 7),
(16, 8),
(14, 7),
(14, 8),
(18, 9),
(18, 8),
(19, 9),
(19, 8),
(17, 9),
(17, 8),
(20, 7),
(20, 8),
(21, 7),
(21, 8),
(22, 7),
(22, 8),
(23, 10),
(23, 11),
(23, 8),
(24, 10),
(24, 11),
(24, 8),
(25, 10),
(25, 11),
(25, 8),
(26, 10),
(26, 8),
(27, 10),
(27, 8),
(28, 10),
(28, 8),
(29, 9),
(29, 12),
(31, 9),
(31, 12),
(32, 13),
(32, 8),
(33, 13),
(33, 8),
(34, 13),
(34, 8),
(35, 3),
(35, 2),
(38, 10),
(39, 10),
(30, 9),
(30, 12),
(37, 3),
(36, 14),
(40, 15),
(41, 15),
(42, 16),
(43, 16),
(44, 16),
(45, 10),
(45, 16),
(47, 10),
(47, 16),
(46, 10),
(46, 16),
(53, 18),
(50, 17),
(52, 18),
(51, 17),
(55, 10),
(55, 19),
(55, 21),
(54, 10),
(54, 19),
(54, 20),
(57, 10),
(57, 20),
(59, 20),
(60, 10),
(60, 19),
(60, 20),
(61, 10),
(61, 19),
(61, 21),
(58, 10),
(58, 19),
(58, 21),
(62, 14),
(62, 22),
(62, 20),
(63, 20),
(64, 14),
(64, 23),
(64, 20),
(65, 14),
(65, 23),
(65, 21);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=279 ;

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
(3169158, 25, 'LOFT', 2, 1, '3169158_1_id25.png'),
(2047116, 27, 'LOFT', 2, 1, '2047116_1_id27.png'),
(2047116, 28, 'LOFT', 2, 2, '2047116_2_id28.png'),
(2047116, 29, 'LOFT', 2, 3, '2047116_3_id29.png'),
(1433317, 30, 'VENSTRE SIDEBEKLÃ†DNING', 1, 1, '1433317_1_id30.png'),
(1433317, 31, 'HÃ˜JRE SIDEBEKLÃ†DNING', 1, 2, '1433317_2_id31.png'),
(1433317, 32, 'SKYDEDÃ˜R NEDERST', 1, 3, '1433317_3_id32.png'),
(1433317, 33, 'SKYDEDÃ˜R Ã˜VERST', 1, 4, '1433317_4_id33.png'),
(1433317, 34, 'VENSTRE BAGDÃ˜R', 1, 5, '1433317_5_id34.png'),
(1433317, 35, 'HÃ˜JRE BAGDÃ˜R', 1, 6, '1433317_6_id35.png'),
(2282853, 36, 'VENSTRE SIDE BAG', 1, 1, '2282853_1_id36.png'),
(2282853, 37, 'VENSTRE SIDE FOR', 1, 2, '2282853_2_id37.png'),
(2282853, 38, 'HÃ˜JRE SIDE ', 1, 3, '2282853_3_id38.png'),
(2282853, 39, 'SKYDEDÃ˜R ', 1, 4, '2282853_4_id39.png'),
(1967322, 40, 'VENSTRE SIDE BAG', 1, 1, '1967322_1_id40.png'),
(1967322, 41, 'VENSTRE SIDE FOR', 1, 2, '1967322_2_id41.png'),
(1967322, 42, 'HÃ˜JRE SIDE', 1, 3, '1967322_3_id42.png'),
(1967322, 43, 'SKYDEDÃ˜R NEDERST', 1, 4, '1967322_4_id43.png'),
(1967322, 44, 'SKYDEDÃ˜R Ã˜VERST', 1, 5, '1967322_5_id44.png'),
(1967322, 45, 'VENSTRE BAGDÃ˜R NEDERST', 1, 6, '1967322_6_id45.png'),
(1967322, 46, 'HÃ˜JRE BAGDÃ˜R NEDERST', 1, 7, '1967322_7_id46.png'),
(1967322, 47, 'VENSTRE BAGDÃ˜R Ã˜VERST', 1, 8, '1967322_8_id47.png'),
(1967322, 48, 'HÃ˜JRE BAGDÃ˜R Ã˜VERST', 1, 9, '1967322_9_id48.png'),
(2047132, 49, 'LOFT ', 2, 1, '2047132_1_id49.png'),
(2047132, 50, 'LOFT', 2, 2, '2047132_2_id50.png'),
(1967330, 51, 'VENSTRE SIDE BAG', 1, 1, '1967330_1_id51.png'),
(1967330, 52, 'VENSTRE SIDE FOR', 1, 2, '1967330_2_id52.png'),
(1967330, 53, 'HÃ˜JRE SIDE', 1, 3, '1967330_3_id53.png'),
(1967330, 54, 'SKYDEDÃ˜R NEDERST', 1, 4, '1967330_4_id54.png'),
(1967330, 55, 'SKYDEDÃ˜R Ã˜VERST', 1, 5, '1967330_5_id55.png'),
(1967330, 56, 'VENSTRE BAGDÃ˜R NEDERST', 1, 6, '1967330_6_id56.png'),
(1967330, 57, 'HÃ˜JRE BAGDÃ˜R NEDERST', 1, 7, '1967330_7_id57.png'),
(1967330, 58, 'VENSTRE BAGDÃ˜R Ã˜VERST U.RUDE', 1, 8, '1967330_8_id58.png'),
(1967330, 59, 'HÃ˜JRE BAGDÃ˜R Ã˜VERST U.RUDE', 1, 9, '1967330_9_id59.png'),
(1967330, 60, 'VENSTRE BAGDÃ˜R Ã˜VERST', 1, 10, '1967330_10_id60.png'),
(1967330, 61, 'HÃ˜JRE BAGDÃ˜R Ã˜VERST', 1, 11, '1967330_11_id61.png'),
(2270854, 62, 'LOFT', 2, 1, '2270854_1_id62.png'),
(1894013, 63, 'VENSTRE SIDE BAG', 1, 1, '1894013_1_id63.png'),
(1894013, 64, 'VENSTRE SIDE FOR', 1, 2, '1894013_2_id64.png'),
(1894013, 65, 'HÃ˜JRE SIDE', 1, 3, '1894013_3_id65.png'),
(1894013, 66, 'SKYDEDÃ˜R NEDERST', 1, 4, '1894013_4_id66.png'),
(1894013, 67, 'SKYDEDÃ˜R Ã˜VERST', 1, 5, '1894013_5_id67.png'),
(1894013, 68, 'VENSTRE BAGDÃ˜R NEDERST', 1, 6, '1894013_6_id68.png'),
(1894013, 69, 'HÃ˜JRE BAGDÃ˜R NEDERST', 1, 7, '1894013_7_id69.png'),
(1894013, 70, 'VENSTRE BAGDÃ˜R Ã˜VERST', 1, 8, '1894013_8_id70.png'),
(1894013, 71, 'HÃ˜JRE BAGDÃ˜R Ã˜VERST', 1, 9, '1894013_9_id71.png'),
(2047124, 72, 'VENSTRE SIDE BAG', 1, 1, '2047124_1_id72.png'),
(2047124, 73, 'VENSTRE SIDE MIDT', 1, 2, '2047124_2_id73.png'),
(2047124, 74, 'VENSTRE SIDE FOR', 1, 3, '2047124_3_id74.png'),
(2047124, 75, 'HÃ˜JRE SIDE BAG', 1, 4, '2047124_4_id75.png'),
(2047124, 76, 'HÃ˜JRE SIDE FOR', 1, 5, '2047124_5_id76.png'),
(2047124, 77, 'SKYDEDÃ˜R NEDERST', 1, 6, '2047124_6_id77.png'),
(2047124, 78, 'SKYDEDÃ˜R Ã˜VERST', 1, 7, '2047124_7_id78.png'),
(2047124, 79, 'VENSTRE BAGDÃ˜R NEDERST', 1, 8, '2047124_8_id79.png'),
(2047124, 80, 'HÃ˜JRE BAGDÃ˜R NEDERST', 1, 9, '2047124_9_id80.png'),
(2047124, 81, 'VENSTRE BAGDÃ˜R Ã˜VERST U.RUDER', 1, 10, '2047124_10_id81.png'),
(2047124, 82, 'HÃ˜JRE BAGDÃ˜R Ã˜VERST U.RUDER', 1, 11, '2047124_11_id82.png'),
(2047124, 83, 'VENSTRE BAGDÃ˜R Ã˜VERST', 1, 12, '2047124_12_id83.png'),
(2047124, 84, 'HÃ˜JRE BAGDÃ˜R Ã˜VERST', 1, 13, '2047124_13_id84.png'),
(2067759, 85, 'LOFT', 2, 1, '2067759_1_id85.png'),
(2047140, 86, 'VENSTRE BAG', 1, 1, '2047140_1_id86.png'),
(2047140, 87, 'VENSTRE SIDE MIDT', 1, 2, '2047140_2_id87.png'),
(2047140, 88, 'VENSTRE SIDE FOR', 1, 3, '2047140_3_id88.png'),
(2047140, 89, 'HÃ˜JRE SIDE BAG', 1, 4, '2047140_4_id89.png'),
(2047140, 90, 'HÃ˜JRE SIDE FOR', 1, 5, '2047140_5_id90.png'),
(2047140, 91, 'SKYDEDÃ˜R NEDERST', 1, 6, '2047140_6_id91.png'),
(2047140, 92, 'SKYDEDÃ˜R Ã˜VERST', 1, 7, '2047140_7_id92.png'),
(2047140, 93, 'VENSTRE BAGDÃ˜R NEDERST', 1, 8, '2047140_8_id93.png'),
(2047140, 94, 'HÃ˜JRE BAGDÃ˜R NEDERST', 1, 9, '2047140_9_id94.png'),
(2047140, 95, 'VENSTRE BAGDÃ˜R Ã˜VERST U.RUDE', 1, 10, '2047140_10_id95.png'),
(2047140, 96, 'HÃ˜JRE BAGDÃ˜R U.RUDE', 1, 11, '2047140_11_id96.png'),
(2047140, 97, 'VENSTRE BAGDÃ˜R Ã˜VERST', 1, 12, '2047140_12_id97.png'),
(2047140, 98, 'HÃ˜JRE BAGDÃ˜R Ã˜VERST', 1, 13, '2047140_13_id98.png'),
(477786, 99, 'VENSTRE SIDE BAG', 1, 1, '477786_1_id99.png'),
(477786, 100, 'HÃ˜JRE SIDE', 1, 2, '477786_2_id100.png'),
(477786, 101, 'SKYDEDÃ˜R H NEDERST', 1, 3, '477786_3_id101.png'),
(477786, 102, 'SKYDEDÃ˜R V NEDERST', 1, 4, '477786_4_id102.png'),
(477786, 103, 'SKYDEDÃ˜R H Ã˜VERST', 1, 5, '477786_5_id103.png'),
(477786, 104, 'SKYDEDÃ˜R V Ã˜VERST', 1, 6, '477786_6_id104.png'),
(477786, 105, 'VENSTRE BAGDÃ˜R NEDERST', 1, 7, '477786_7_id105.png'),
(477786, 106, 'HÃ˜JRE BAGDÃ˜R NEDERST', 1, 8, '477786_8_id106.png'),
(477786, 107, 'VENSTRE BAGDÃ˜R Ã˜VERST U.RUDE', 1, 9, '477786_9_id107.png'),
(477786, 108, 'HÃ˜JRE BAGDÃ˜R Ã˜VERST U.RUDE', 1, 10, '477786_10_id108.png'),
(477786, 109, 'VENSTRE BAGDÃ˜R Ã˜VERST', 1, 11, '477786_11_id109.png'),
(477786, 110, 'HÃ˜JRE BAGDÃ˜R Ã˜VERST', 1, 12, '477786_12_id110.png'),
(3204500, 112, 'VENSTRE BAGENDE SIDE', 1, 1, '3204500_1_id112.png'),
(3204500, 113, 'VENSTRE SIDE MIDT', 1, 2, '3204500_2_id113.png'),
(3204500, 114, 'VENSTRE SIDE FOR', 1, 3, '3204500_3_id114.png'),
(3204500, 115, 'HÃ˜JRE SIDE BAG', 1, 4, '3204500_4_id115.png'),
(3204500, 116, 'HÃ˜JRE SIDE FOR', 1, 5, '3204500_5_id116.png'),
(3204500, 117, 'Ã˜VERSTE SKYDEDÃ˜R', 1, 6, '3204500_6_id117.png'),
(3204500, 118, 'NEDERSTE SKYDEDÃ˜R', 1, 7, '3204500_7_id118.png'),
(3204500, 119, 'Ã˜VERSTE BAGDÃ˜R', 1, 8, '3204500_8_id119.png'),
(3204500, 120, 'Ã˜VERSTE BAGDÃ˜R', 1, 9, '3204500_9_id120.png'),
(3204500, 121, 'BAGDÃ˜R MIDT', 1, 10, '3204500_10_id121.png'),
(3204500, 122, 'BAGDÃ˜R MIDT', 1, 11, '3204500_11_id122.png'),
(3204500, 123, 'BAGDÃ˜R NEDERST', 1, 12, '3204500_12_id123.png'),
(3204500, 124, 'BAGDÃ˜R NEDERST', 1, 13, '3204500_13_id124.png'),
(3204500, 125, 'OVER SKYDEDÃ˜R', 1, 14, '3204500_14_id125.png'),
(2283000, 126, 'VENSTRE BAGERSTE DEL', 1, 1, '2283000_1_id126.png'),
(2283000, 127, 'VENSTRE MIDTERSTE DEL', 1, 2, '2283000_2_id127.png'),
(2283000, 128, 'VENSTRE SIDE FORRESTE', 1, 3, '2283000_3_id128.png'),
(2283000, 129, 'HÃ˜JRE SIDE BAGERSTE', 1, 4, '2283000_4_id129.png'),
(2283000, 130, 'HÃ˜JRE SIDE FORRESTE', 1, 5, '2283000_5_id130.png'),
(2283000, 131, 'NEDERSTE SKYDEDÃ˜R', 1, 6, '2283000_6_id131.png'),
(2283000, 132, 'MIDTERSTE SKYDEDÃ˜R', 1, 7, '2283000_7_id132.png'),
(2283000, 133, 'VENSTRE BAGDÃ˜R', 1, 8, '2283000_8_id133.png'),
(2283000, 134, 'HÃ˜JRE BAGDÃ˜R', 1, 9, '2283000_9_id134.png'),
(3384005, 136, 'LOFT', 2, 1, '3384005_1_id136.png'),
(911859, 137, 'VENSTRE SIDE BAG', 1, 1, '911859_1_id137.png'),
(911859, 138, 'VENSTRE SIDE FOR', 1, 2, '911859_2_id138.png'),
(911859, 139, 'HÃ˜JRE SIDE BAG', 1, 3, '911859_3_id139.png'),
(911859, 140, 'SKYDEDÃ˜R NEDERST', 1, 4, '911859_4_id140.png'),
(911859, 141, 'MIDT SKYDEDÃ˜R', 1, 5, '911859_5_id141.png'),
(911859, 142, 'VENSTRE BAGDÃ˜R', 1, 6, '911859_6_id142.png'),
(911859, 143, 'HÃ˜JRE BAGDÃ˜R', 1, 7, '911859_7_id143.png'),
(2979649, 144, 'LOFT', 2, 1, '2979649_1_id144.png'),
(2047108, 145, 'VENSTRE SIDE BAG', 1, 1, '2047108_1_id145.png'),
(2047108, 146, 'VENSTRTE MIDTERSTE DEL', 1, 2, '2047108_2_id146.png'),
(2047108, 147, 'VENSTRE SIDE FORRESTE DEL', 1, 3, '2047108_3_id147.png'),
(2047108, 148, 'HÃ˜JRE SIDE BAG', 1, 4, '2047108_4_id148.png'),
(2047108, 149, 'HÃ˜JRE SIDE FORRESTE DEL', 1, 5, '2047108_5_id149.png'),
(2047108, 150, 'NEDERSTE SKYDEDÃ˜R', 1, 6, '2047108_6_id150.png'),
(2047108, 151, 'MIDTERSTE SKYDEDÃ˜R', 1, 7, '2047108_7_id151.png'),
(2047108, 152, 'Ã˜VERSTE SKYDEDÃ˜R', 1, 8, '2047108_8_id152.png'),
(2047108, 153, 'VENSTRE BAGDÃ˜R', 1, 9, '2047108_9_id153.png'),
(2047108, 154, 'HÃ˜JRE BAGDÃ˜R', 1, 10, '2047108_10_id154.png'),
(2412559, 155, 'LOFT', 2, 1, '2412559_1_id155.png'),
(2412559, 156, 'LOFT', 2, 2, '2412559_2_id156.png'),
(2412559, 157, 'LOFT', 2, 3, '2412559_3_id157.png'),
(2412559, 158, 'LOFT', 2, 4, '2412559_4_id158.png'),
(2412559, 159, 'LOFT', 2, 5, '2412559_5_id159.png'),
(3385754, 160, 'HÃ˜JRE BAGDÃ˜R NED', 1, 1, '3385754_1_id160.png'),
(3385754, 161, 'VENSTRE BAGDÃ˜R NED', 1, 2, '3385754_2_id161.png'),
(3385754, 162, 'NEDERSTE SKYDEDÃ˜R', 1, 3, '3385754_3_id162.png'),
(3385754, 163, 'Ã˜VERSTE SKYDEDÃ˜R', 1, 4, '3385754_4_id163.png'),
(3385754, 164, 'TOP BAGDÃ˜R VENSTRE', 1, 5, '3385754_5_id164.png'),
(3385754, 165, 'TOP BAGDÃ˜R HÃ˜JRE', 1, 6, '3385754_6_id165.png'),
(3385754, 166, 'VENSTRE FORRESTE', 1, 7, '3385754_7_id166.png'),
(3385754, 167, 'VENSTRE BAG', 1, 8, '3385754_8_id167.png'),
(3385754, 168, 'HÃ˜JRE BAG', 1, 9, '3385754_9_id168.png'),
(1392935, 169, 'LOFT', 2, 1, '1392935_1_id169.png'),
(3385762, 170, 'HÃ˜JRE BAGDÃ˜R NED', 1, 1, '3385762_1_id170.png'),
(3385762, 171, 'VENSTRE BAGDÃ˜R NED', 1, 2, '3385762_2_id171.png'),
(3385762, 172, 'NEDERSTE SKYDEDÃ˜R', 1, 3, '3385762_3_id172.png'),
(3385762, 173, 'Ã˜VERSTE SKYDEDÃ˜R', 1, 4, '3385762_4_id173.png'),
(3385762, 174, 'TOP BAGDÃ˜R VENSTRE', 1, 5, '3385762_5_id174.png'),
(3385762, 175, 'TOP BAGDÃ˜R HÃ˜JRE', 1, 6, '3385762_6_id175.png'),
(3385762, 176, 'VENSTRE FORRESTE', 1, 7, '3385762_7_id176.png'),
(3385762, 177, 'VENSTRE MIDT', 1, 8, '3385762_8_id177.png'),
(3385762, 178, 'VENSTRE BAG', 1, 9, '3385762_9_id178.png'),
(3385762, 179, 'HÃ˜JRE FOR', 1, 10, '3385762_10_id179.png'),
(3385762, 180, 'HÃ˜JRE BAG', 1, 11, '3385762_11_id180.png'),
(1410190, 181, 'LOFT', 2, 1, '1410190_1_id181.png'),
(3107216, 182, 'VENSTRE SIDE BAG', 1, 1, '3107216_1_id182.png'),
(3107216, 183, 'VENSTRE SIDE FOR', 1, 2, '3107216_2_id183.png'),
(3107216, 184, 'HÃ˜JRE SIDE', 1, 3, '3107216_3_id184.png'),
(2977551, 185, 'VENSTRE SIDE', 1, 1, '2977551_1_id185.png'),
(2977551, 186, 'HÃ˜JRE SIDE', 1, 2, '2977551_2_id186.png'),
(1314764, 187, 'VENSTRE BAGERSTE DEL', 1, 1, '1314764_1_id187.png'),
(1314764, 188, 'VENSTRE FORRESTE DEL', 1, 2, '1314764_1_id188.png'),
(1314764, 189, 'HÃ˜JRE BAGERSTE DEL', 1, 3, '1314764_2_id189.png'),
(1314764, 190, 'SKYDEDÃ˜R NEDERST', 1, 4, '1314764_4_id190.png'),
(1314764, 191, 'SKYDEDÃ˜R Ã˜VERST', 1, 5, '1314764_5_id191.png'),
(1314764, 192, 'VENSTRE BAGDÃ˜R NEDERST', 1, 6, '1314764_6_id192.png'),
(1314764, 193, 'HÃ˜JRE BAGDÃ˜R NEDERST', 1, 7, '1314764_7_id193.png'),
(1314764, 194, 'VENSTRE BAGDÃ˜R RUDEFELT', 1, 8, '1314764_8_id194.png'),
(1314764, 195, 'HÃ˜JRE BAGDÃ˜R RUDEFELT', 1, 9, '1314764_9_id195.png'),
(1314764, 196, 'VENSTRE BAGDÃ˜R Ã˜VERST', 1, 10, '1314764_10_id196.png'),
(1314764, 197, 'HÃ˜JRE BAGDÃ˜R Ã˜VERST', 1, 11, '1314764_11_id197.png'),
(2292076, 199, 'VENSTRE SIDE BEKLÃ†DNING', 1, 1, '2292076_1_id199.png'),
(2292076, 200, 'HÃ˜JRE SIDE BEKLÃ†DNING', 1, 2, '2292076_2_id200.png'),
(2292076, 201, 'HÃ˜JRE SKYDEDÃ˜R Ã˜VERST', 1, 3, '2292076_3_id201.png'),
(2292076, 202, 'HÃ˜JRE SKYDEDÃ˜R NEDERST', 1, 4, '2292076_4_id202.png'),
(2292076, 203, 'VENSTRE SKYDEDÃ˜R Ã˜VERST', 1, 5, '2292076_5_id203.png'),
(2292076, 204, 'VENSTRE SKYDEDÃ˜R NEDERST', 1, 6, '2292076_6_id204.png'),
(2292076, 205, 'VENSTRE BAGDÃ˜R NEDERST', 1, 7, '2292076_7_id205.png'),
(2292076, 206, 'HÃ˜JRE BAGDÃ˜R NEDERST', 1, 8, '2292076_8_id206.png'),
(2292076, 207, 'VENSTRE BAGDÃ˜R RUDEFELT', 1, 9, '2292076_9_id207.png'),
(2292076, 208, 'HÃ˜JRE BAGDÃ˜R RUDEFELT', 1, 10, '2292076_10_id208.png'),
(3383981, 209, 'LOFT', 2, 1, '3383981_1_id209.png'),
(3383981, 210, 'LOFT', 2, 2, '3383981_2_id210.png'),
(1094499, 211, 'VENSTRE SIDE BEKLÃ†DNING', 1, 8, '1094499_8_id211.png'),
(1094499, 212, 'HÃ˜JRE SIDE BEKLÃ†DNING', 1, 2, '1094499_2_id212.png'),
(1094499, 213, 'SKYDEDÃ˜R NEDERST', 1, 3, '1094499_3_id213.png'),
(1094499, 214, 'SKYDEDÃ˜R Ã˜VERST', 1, 4, '1094499_4_id214.png'),
(1094499, 215, 'VENSTRE BAGDÃ˜R NEDERST', 1, 5, '1094499_5_id215.png'),
(1094499, 216, 'HÃ˜JRE BAGDÃ˜R NEDERST', 1, 6, '1094499_6_id216.png'),
(1094499, 217, 'VENSTRE BAGDÃ˜R Ã˜VERST', 1, 7, '1094499_7_id217.png'),
(1094499, 218, 'HÃ˜JRE BAGDÃ˜R Ã˜VERST', 1, 8, '1094499_8_id218.png'),
(1462076, 219, 'LOFT', 2, 1, '1462076_1_id219.png'),
(1418243, 221, 'VENSTRE BAGERSTE DEL', 1, 1, '1418243_1_id221.png'),
(1418243, 222, 'HÃ˜JRE BAGERSTE DEL', 1, 2, '1418243_2_id222.png'),
(1418243, 223, 'HÃ˜JRE SKYDEDÃ˜R NEDERST', 1, 3, '1418243_3_id223.png'),
(1418243, 224, 'HÃ˜JRE SKYDEDÃ˜R Ã˜VERST', 1, 4, '1418243_4_id224.png'),
(1418243, 225, 'VENSTRE SKYDEDÃ˜R', 1, 5, '1418243_5_id225.png'),
(1418243, 226, 'VENSTRE SKYDEDÃ˜R Ã˜VERST', 1, 6, '1418243_6_id226.png'),
(1418243, 227, 'VENSTRE BAGDÃ˜R NEDERST', 1, 7, '1418243_7_id227.png'),
(1418243, 228, 'HÃ˜JRE BAGDÃ˜R NEDERST', 1, 8, '1418243_8_id228.png'),
(1418243, 229, 'VENSTRE BAGDÃ˜R RUDEFELT', 1, 9, '1418243_9_id229.png'),
(1418243, 230, 'HÃ˜JRE BAGDÃ˜R RUDEFELT', 1, 10, '1418243_10_id230.png'),
(1418243, 231, 'VENSTRE BAGDÃ˜R Ã˜VERST', 1, 11, '1418243_11_id231.png'),
(1418243, 232, 'HÃ˜JRE BAGDÃ˜R Ã˜VERST', 1, 12, '1418243_12_id232.png'),
(1267657, 233, 'LOFT', 2, 1, '1267657_1_id233.png'),
(1316314, 234, 'VENSTRE BAGERSTE DEL', 1, 1, '1316314_1_id234.png'),
(1316314, 235, 'VENSTRE MIDTERSTE DEL', 1, 2, '1316314_2_id235.png'),
(1316314, 236, 'VENSTRE FORRESTE DEL', 1, 3, '1316314_3_id236.png'),
(1316314, 237, 'HÃ˜JRE BAGERSTE DEL', 1, 4, '1316314_4_id237.png'),
(1316314, 238, 'HÃ˜JRE FORRESTE DEL', 1, 5, '1316314_5_id238.png'),
(1316314, 239, 'SKYDEDÃ˜R NEDERSTE', 1, 6, '1316314_6_id239.png'),
(1316314, 240, 'SKYDEDÃ˜R Ã˜VERSTE', 1, 7, '1316314_7_id240.png'),
(1316314, 241, 'VENSTRE BAGDÃ˜R NEDERST', 1, 8, '1316314_8_id241.png'),
(1316314, 242, 'HÃ˜JRE BAGDÃ˜R NEDERST', 1, 9, '1316314_9_id242.png'),
(1316314, 243, 'VENSTRE BAGDÃ˜R RUDEFELT', 1, 10, '1316314_10_id243.png'),
(1316314, 244, 'HÃ˜JRE BAGDÃ˜R RUDEFELT', 1, 11, '1316314_11_id244.png'),
(1316314, 245, 'VENSTRE BAGDÃ˜R Ã˜VERST', 1, 12, '1316314_12_id245.png'),
(1316314, 246, 'HÃ˜JRE BAGDÃ˜R Ã˜VERST', 1, 13, '1316314_13_id246.png'),
(1316306, 247, 'LOFT', 2, 1, '1316306_1_id247.png'),
(1316306, 248, 'LOFT', 2, 2, '1316306_2_id248.png'),
(1316306, 249, 'LOFT', 2, 3, '1316306_3_id249.png'),
(1316306, 250, 'LOFT', 2, 4, '1316306_4_id250.png'),
(1316306, 251, 'LOFT', 2, 5, '1316306_5_id251.png'),
(1316306, 252, 'LOFT', 2, 6, '1316306_6_id252.png'),
(1413293, 253, 'VENSTRE SIDE BEKLÃ†DNING', 1, 1, '1413293_1_id253.png'),
(1413293, 254, 'HÃ˜JRE SIDE BEKLÃ†DNING', 1, 2, '1413293_2_id254.png'),
(1413293, 255, 'HÃ˜JRE SKYDEDÃ˜R NEDERST', 1, 3, '1413293_3_id255.png'),
(1413293, 256, 'HÃ˜JRE SKYDEDÃ˜R Ã˜VERST', 1, 4, '1413293_4_id256.png'),
(1413293, 257, 'VENSTRE SKYDEDÃ˜R NEDERST', 1, 5, '1413293_5_id257.png'),
(1413293, 258, 'VENSTRE SKYDEDÃ˜R Ã˜VERST', 1, 6, '1413293_6_id258.png'),
(1413293, 259, 'VENSTRE BAGDÃ˜R NEDERST', 1, 7, '1413293_7_id259.png'),
(1413293, 260, 'HÃ˜JRE BAGDÃ˜R NEDERST', 1, 8, '1413293_8_id260.png'),
(1413293, 261, 'VENSTRE BAGDÃ˜R Ã˜VERST', 1, 9, '1413293_9_id261.png'),
(1413293, 262, 'HÃ˜JRE BAGDÃ˜R Ã˜VERST', 1, 10, '1413293_10_id262.png'),
(1462076, 264, 'LOFT', 2, 2, '1462076_2_id264.png'),
(1094523, 265, 'VENSTRE BAGERSTE DEL', 1, 1, '1094523_1_id265.png'),
(1094523, 266, 'VENSTRE MIDTERSTE DEL', 1, 2, '1094523_2_id266.png'),
(1094523, 267, 'VENSTRE FORRESTE DEL', 1, 3, '1094523_3_id267.png'),
(1094523, 268, 'HÃ˜JRE BAGERSTE DEL', 1, 4, '1094523_4_id268.png'),
(1094523, 269, 'HÃ˜JRE FORRESTE DEL', 1, 5, '1094523_5_id269.png'),
(1094523, 270, 'SKYDEDÃ˜R NEDERSTE', 1, 6, '1094523_6_id270.png'),
(1094523, 271, 'SKYDEDÃ˜R Ã˜VERST', 1, 7, '1094523_7_id271.png'),
(1094523, 272, 'VENSTRE BAGDÃ˜R NEDERST', 1, 8, '1094523_8_id272.png'),
(1094523, 273, 'HÃ˜JRE BAGDÃ˜R NEDERST', 1, 9, '1094523_9_id273.png'),
(1094523, 274, 'VENSTRE BAGDÃ˜R RUDEFELT', 1, 10, '1094523_10_id274.png'),
(1094523, 275, 'HÃ˜JRE BAGDÃ˜R RUDEFELT', 1, 11, '1094523_11_id275.png'),
(1094523, 276, 'VENSTRE BAGDÃ˜R Ã˜VERST', 1, 12, '1094523_12_id276.png'),
(1094523, 277, 'HÃ˜JRE BAGDÃ˜R Ã˜VERST', 1, 13, '1094523_13_id277.png'),
(1406396, 278, 'LOFT', 2, 1, '1406396_1_id278.png');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=66 ;

--
-- Data dump for tabellen `biler`
--

INSERT INTO `biler` (`bil_id`, `fabrikant_id`, `vo_sani_nr`, `lo_sani_nr`, `be_sani_nr`, `bil_navn`, `billedenavn`, `pdf_filnavn`) VALUES
(5, 7, 3169166, 3169158, 3169141, 'Bipper', 'peugeot_bipper.jpg', '1433317.pdf'),
(10, 8, 2047157, 2047116, 2047090, 'Sprinter R2H2', 'Mercedes_Sprinter R2H2_10.png', '2047090_10.pdf'),
(11, 9, 454389, 0, 614313, 'Caddy', 'Volkswagen_Caddy_11.jpg', '614313_11.pdf'),
(12, 10, 382408, 0, 1433317, 'Connect L1', 'Ford_Connect L1_12.jpg', '1433317_12.pdf'),
(13, 11, 381566, 0, 2282853, 'Doblo L1', 'Fiat _Doblo L1_13.jpg', '2282853_13.pdf'),
(14, 7, 1889682, 2047132, 1967322, 'Boxer L2H1', 'Peugeot_Boxer_14.jpg', '1967322_14.pdf'),
(15, 12, 1889682, 2047132, 1967322, 'Jumper  L2H1', 'Citroen_Jumper _15.jpg', '1967322_15.pdf'),
(16, 11, 1889682, 2047132, 1967322, 'Ducato L2H1', 'Fiat _Ducato_16.jpg', '1967322_16.pdf'),
(17, 7, 1889682, 2270854, 1967330, 'Boxer  L2H2', 'Peugeot_Boxer  L2H2_17.jpg', '0_17.pdf'),
(18, 12, 1889682, 2270854, 1967330, 'Jumper  L2H2', 'Citroen_Jumper  L2H2_18.jpg', '0_18.pdf'),
(19, 11, 1889682, 2270854, 1967330, 'Ducato L2H2', 'Fiat _Ducato L2H2_19.jpg', '0_19.pdf'),
(20, 7, 892323, 0, 1894013, 'Boxer L1H1', 'Peugeot_Boxer L1H1_20.jpg', '1894013_20.pdf'),
(21, 12, 892323, 0, 1894013, 'Jumper  L1H1', 'Citroen_Jumper  L1H1_21.jpg', '1894013_21.pdf'),
(22, 11, 892323, 0, 1894013, 'Ducato L1H1', 'Fiat _Ducato L1H1_22.jpg', '1894013_22.pdf'),
(23, 7, 2046704, 2067759, 2047124, 'Boxer  L3H2', 'Peugeot_Boxer  L3H2_23.jpg', '2047124_23.pdf'),
(24, 12, 2046704, 2067759, 2047124, 'Jumper  L3H2', 'Citroen_Jumper  L3H2_24.jpg', '2047124_24.pdf'),
(25, 11, 2046704, 2067759, 2047124, 'Ducato L3H2', 'Fiat _Ducato L3H2_25.jpg', '2047124_25.pdf'),
(26, 7, 2046712, 0, 2047140, 'Boxer  L4H2', 'Peugeot_Boxer  L4H2_26.jpg', '2047140_26.pdf'),
(27, 12, 2046712, 0, 2047140, 'Jumper  L4H2', 'Citroen_Jumper  L4H2_27.jpg', '2047140_27.pdf'),
(28, 11, 2046712, 0, 2047140, 'Ducato L4H2', 'Fiat _Ducato L4H2_28.jpg', '2047140_28.pdf'),
(29, 7, 1889682, 2270854, 477786, 'Boxer  L2H2 m2skyde', 'Peugeot_Boxer  L2H2 m2skyde_29.jpg', '477786_29.pdf'),
(30, 12, 1889682, 2270854, 477786, 'Jumper  L2H2 m2skyde', 'Citroen_Jumper  L2H2 m2skyde_30.jpg', '477786_30.pdf'),
(31, 11, 1889682, 2270854, 477786, 'Ducato L2H2 m2skyde', 'Fiat _Ducato L2H2 m2skyde_31.jpg', '477786_31.pdf'),
(32, 7, 2046712, 0, 3204500, 'Boxer L4H3', 'Peugeot_Boxer L4H3_32.jpg', '3204500_32.pdf'),
(33, 12, 2046712, 0, 3204500, 'Jumper  L4H3', 'Citroen_Jumper  L4H3_33.jpg', '3204500_33.pdf'),
(34, 11, 2046712, 0, 3204500, 'Ducato L4H3', 'Fiat _Ducato L4H3_34.jpg', '3204500_34.pdf'),
(35, 9, 2047157, 2047116, 2047090, 'Crafter R2H2', 'Volkswagen_Crafter R2H2_35.jpg', '2047090_35.pdf'),
(36, 9, 2047157, 3384005, 2283000, 'Crafter R2H1', 'Volkswagen_Crafter R2H1_36.jpg', '2282853_36.pdf'),
(37, 8, 2047157, 3384005, 2283000, 'Sprinter R2H1', 'Mercedes_Sprinter R2H1_37.jpg', '2283000_37.pdf'),
(38, 8, 0, 2979649, 911859, 'Sprinter R1H1', 'Mercedes_Sprinter R12H1_38.jpg', '911859_38.pdf'),
(39, 9, 0, 2979649, 911859, 'Crafter R1H1', 'Volkswagen_Crafter R1H1_39.jpg', '911859_39.pdf'),
(40, 8, 0, 2412559, 2047108, 'Sprinter R3H2', 'Mercedes_Sprinter R3H2_40.jpg', '2047108_40.pdf'),
(41, 9, 0, 2412559, 2047108, 'Crafter R3H2', 'Volkswagen_Crafter R3H2_41.jpg', '2047108_41.pdf'),
(42, 14, 3385721, 1392935, 3385754, 'Movano L2-For', 'Opel_Movano L2-For_42.jpg', '3385754_42.pdf'),
(43, 15, 3385721, 1392935, 3385754, 'NV400 L2-For', 'Nissan_NV400 L2-For_43.jpg', '3385754_43.pdf'),
(44, 16, 3385721, 1392935, 3385754, 'Master L2-For', 'Renault_Master L2-For_44.jpg', '3385754_44.pdf'),
(45, 16, 3385739, 1410190, 3385762, 'Master L3-For', 'Renault_Master L3-For_45.jpg', '3385762_45.pdf'),
(46, 14, 3385739, 1410190, 3385762, 'Movano L3-For', 'Opel_Movano L3-For_46.jpg', '3385762_46.pdf'),
(47, 15, 3385739, 1410190, 3385762, 'NV400 L3-For', 'Nissan_NV400 L3-For_47.jpg', '3385762_47.pdf'),
(50, 8, 0, 0, 3107216, 'Sprinter R3-tillaeg', 'Mercedes_Sprinter R3 - tillaeg_50.jpg', '3107216_50.pdf'),
(51, 9, 0, 0, 3107216, 'Crafter R3-tillaeg', 'Volkswagen_Crafter R3-tillaege_51.jpg', '3107216_51.pdf'),
(52, 9, 0, 0, 2977551, 'Crafter R2-tillaeg', 'Volkswagen_Crafter R2 - tillaege_52.jpg', '2977551_52.pdf'),
(53, 8, 0, 0, 2977551, 'Sprinter R2-tillaeg', 'Mercedes_Sprinter R2 - tillaege_53.png', '2977551_53.pdf'),
(54, 10, 382507, 1267657, 1314764, 'Transit L2 H2-H3-Bag', 'Ford_Transit L2 H2-H3-Bag_54.jpg', '1314764_54.pdf'),
(55, 10, 382515, 1267657, 1314764, 'Transit L2 H2-H3-For', 'Ford_Transit L2 H2-H3-For_55.jpg', '1314764_55.pdf'),
(57, 10, 382507, 3383981, 2292076, 'Transit L2H1-Bag m2skyde', 'Ford_Transit L2H1-Bag m2skyde_57.jpg', '2292076_57.pdf'),
(58, 10, 382515, 3383981, 2292076, 'Transit L2H1-For m2skyde', 'Ford_Transit L2H1-For m2skyde_58.jpg', '2292076_58.pdf'),
(59, 10, 382432, 1462076, 1094499, 'Transit L1H1', 'Ford_Transit L1H1_59.jpg', '1094499_59.pdf'),
(60, 10, 382507, 1267657, 1418243, 'Transit L2 H2-H3-Bag m2skyde', 'Ford_Transit L2 H2-H3-Bag m2skyde_60.jpg', '1418243_60.pdf'),
(61, 10, 382515, 1267657, 1418243, 'Transit L2 H2-H3-For m2skyde', 'Ford_Transit L2 H2-H3-For m2skyde_61.jpg', '1418243_61.pdf'),
(62, 10, 0, 1316306, 1316314, 'Transit L4 H2-H3 ', 'Ford_Transit L4 H2-H3 _62.jpg', '1316314_62.pdf'),
(63, 10, 382432, 1462076, 1413293, 'Transit L1H1 m2skyde', 'Ford_Transit L1H1 m2skyde_63.jpg', '1413293_63.pdf'),
(64, 10, 382481, 1406396, 1094523, 'Transit L3 H2-H3-Bag', 'Ford_Transit L3 H2-H3-Bag_64.jpg', '1094523_64.pdf'),
(65, 10, 2240075, 1406396, 1094523, 'Transit L3 H2-H3-For', 'Ford_Transit L3 H2-H3-For_65.jpg', '1094523_65.pdf');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `fabrikant`
--

CREATE TABLE IF NOT EXISTS `fabrikant` (
  `fabrikant_id` int(100) NOT NULL AUTO_INCREMENT,
  `fabrikant_navn` varchar(255) NOT NULL,
  PRIMARY KEY (`fabrikant_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Data dump for tabellen `fabrikant`
--

INSERT INTO `fabrikant` (`fabrikant_id`, `fabrikant_navn`) VALUES
(7, 'Peugeot'),
(8, 'Mercedes'),
(9, 'Volkswagen'),
(10, 'Ford'),
(11, 'Fiat '),
(12, 'Citroen'),
(14, 'Opel'),
(15, 'Nissan'),
(16, 'Renault');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Data dump for tabellen `loft_bund`
--

INSERT INTO `loft_bund` (`sani_nr`, `lb_id`, `bund_loft`, `billednavn`) VALUES
(3169166, 2, 'VOGNBUND', '3169166_vognbund.png'),
(454389, 10, 'VOGNBUND', '454389_vognbund_10.png'),
(382408, 11, 'VOGNBUND', '382408_vognbund_11.png'),
(381566, 12, 'VOGNBUND', '381566_vognbund_12.png'),
(1889682, 14, 'VOGNBUND', '1889682_vognbund_14.png'),
(892323, 15, 'VOGNBUND', '892323_vognbund_15.png'),
(2046704, 16, 'VOGNBUND', '2046704_vognbund_16.png'),
(2046712, 18, 'VOGNBUND', '2046712_vognbund_18.png'),
(2047157, 19, 'VOGNBUND', '2047157_vognbund_19.png'),
(3385721, 20, 'VOGNBUND', '3385721_vognbund_20.png'),
(3385739, 21, 'VOGNBUND', '3385739_vognbund_21.png'),
(382507, 22, 'VOGNBUND', '382507_vognbund_22.png'),
(382515, 23, 'VOGNBUND', '382515_vognbund_23.png'),
(382432, 24, 'VOGNBUND', '382432_vognbund_24.png'),
(382481, 26, 'VOGNBUND', '382481_vognbund_26.png'),
(2240075, 27, 'VOGNBUND', '2240075_vognbund_27.png');

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
