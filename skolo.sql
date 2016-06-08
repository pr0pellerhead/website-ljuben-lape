-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2016 at 03:01 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `skolo`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokumenti`
--

CREATE TABLE IF NOT EXISTS `dokumenti` (
`id` int(11) NOT NULL,
  `ime` varchar(45) DEFAULT NULL,
  `opis` text,
  `tip` varchar(45) DEFAULT NULL,
  `dokument` varchar(200) DEFAULT NULL,
  `objaven_na` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `galerii`
--

CREATE TABLE IF NOT EXISTS `galerii` (
`id` int(11) NOT NULL,
  `ime` varchar(100) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `galerii`
--

INSERT INTO `galerii` (`id`, `ime`) VALUES
(2, 'Den na drvoto'),
(5, 'Nova Galerija'),
(8, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `galerija_sliki`
--

CREATE TABLE IF NOT EXISTS `galerija_sliki` (
`id` int(11) NOT NULL,
  `id_galerija` varchar(100) DEFAULT NULL,
  `ime` varchar(45) DEFAULT NULL,
  `opis` varchar(200) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `galerija_sliki`
--

INSERT INTO `galerija_sliki` (`id`, `id_galerija`, `ime`, `opis`) VALUES
(1, '8', '1668243_12219341_895825230501209_789292041211', NULL),
(2, '2', '1699829_12640262_1065851396800797_47084529665', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kategorii`
--

CREATE TABLE IF NOT EXISTS `kategorii` (
`id` int(11) NOT NULL,
  `kategorija` varchar(100) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `kategorii`
--

INSERT INTO `kategorii` (`id`, `kategorija`) VALUES
(1, 'natprevari'),
(2, 'proekti'),
(3, 'za_roditelite'),
(4, 'najnovi_informacii');

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

CREATE TABLE IF NOT EXISTS `korisnici` (
`id` int(11) NOT NULL,
  `ime` varchar(45) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `id_tip_korisnici` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`id`, `ime`, `email`, `password`, `id_tip_korisnici`) VALUES
(13, 'Kristina', 'kristina@yahoo.com', '1234', 1),
(15, 'Ana Banana', 'ab@yahoo.com', '12345', 1),
(16, 'Jana Janeva', 'jj@yahoo.com', '123', 1),
(19, 'Vikica V', 'viki@yahoo.com', 'viki', 2),
(20, 'Kiki', 'k@yahoo.com', 'kiki', 2),
(21, 'Kiki', 'k@yahoo.com', '1234', 2);

-- --------------------------------------------------------

--
-- Table structure for table `profesori`
--

CREATE TABLE IF NOT EXISTS `profesori` (
`id` int(11) NOT NULL,
  `ime` varchar(45) NOT NULL,
  `predmet` varchar(45) NOT NULL,
  `priemen_den` varchar(45) NOT NULL,
  `priemen_cas` varchar(45) NOT NULL,
  `id_tip_profesor` int(11) DEFAULT NULL,
  `slika` varchar(200) DEFAULT NULL,
  `biografija` text
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `profesori`
--

INSERT INTO `profesori` (`id`, `ime`, `predmet`, `priemen_den`, `priemen_cas`, `id_tip_profesor`, `slika`, `biografija`) VALUES
(1, 'Sanja Stanisavevska', 'Biologija', 'Ponedelnik', '14:00', 2, 'images/1.jpg', 'Lorem ipsum'),
(2, 'Mimi Danailova', 'Tehnicko', 'Petok', '09:30', 2, 'images/2.jpg', 'Lorem ipsum'),
(3, 'Lazo Lazeski', 'Oddelenski', 'Sreda', '13:00', 1, 'images/4.jpg', 'Lorem ipsum');

-- --------------------------------------------------------

--
-- Table structure for table `raspored_na_zvonejne`
--

CREATE TABLE IF NOT EXISTS `raspored_na_zvonejne` (
`id` int(11) NOT NULL,
  `id_smena` int(11) NOT NULL,
  `reden_broj` int(11) NOT NULL,
  `tip` varchar(45) NOT NULL,
  `pocetok` varchar(45) NOT NULL,
  `kraj` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `smeni`
--

CREATE TABLE IF NOT EXISTS `smeni` (
`id` int(11) NOT NULL,
  `ime` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `strani`
--

CREATE TABLE IF NOT EXISTS `strani` (
`id` int(11) NOT NULL,
  `naslov` varchar(300) NOT NULL,
  `sodrzina` text NOT NULL,
  `objavena_na` datetime NOT NULL,
  `id_kategorija` int(11) NOT NULL,
  `slika_golema` varchar(300) DEFAULT NULL,
  `slika_mala` varchar(300) DEFAULT NULL,
  `id_galerija` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `strani`
--

INSERT INTO `strani` (`id`, `naslov`, `sodrzina`, `objavena_na`, `id_kategorija`, `slika_golema`, `slika_mala`, `id_galerija`) VALUES
(9, '&#1053;&#1072;&#1089;&#1083;&#1086;&#1074; &#1073;&#1088;&#1086;&#1112; 5', '<p>&#1057;&#1086;&#1076;&#1088;&#1078;&#1080;&#1085;&#1072;&nbsp;<strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '2016-06-06 11:44:49', 2, '7310821_WhiteSands006.jpg', '4754577_12640262_1065851396800797_4708452966531261506_o.jpg', 2),
(10, '&#1053;&#1072;&#1089;&#1083;&#1086;&#1074; &#1073;&#1088;&#1086;&#1112; 2', '<ul>\r\n<li style="text-align: left;">&#1057;&#1086;&#1076;&#1088;&#1078;&#1080;&#1085;&#1072;&nbsp;<strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</li>\r\n</ul>', '2016-06-06 11:47:23', 1, '6517333_WhiteSands006.jpg', '3905059_12640262_1065851396800797_4708452966531261506_o.jpg', 2),
(11, '&#1053;&#1072;&#1089;&#1083;&#1086;&#1074; &#1073;&#1088;&#1086;&#1112; 3- editiran', '<ul>\r\n<li style="text-align: left;">editirana &#1057;&#1086;&#1076;&#1088;&#1078;&#1080;&#1085;&#1072;&nbsp;<strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</li>\r\n</ul>', '2016-06-06 11:47:44', 1, '9276550_WhiteSands006.jpg', '5690887_12640262_1065851396800797_4708452966531261506_o.jpg', 2),
(12, '&#1053;&#1072;&#1089;&#1083;&#1086;&#1074; 6', '<p>&#1057;&#1086;&#1076;&#1088;&#1078;&#1080;&#1085;&#1072;&nbsp;<strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of L</p>', '2016-06-06 13:12:54', 2, '4846862_12640262_1065851396800797_4708452966531261506_o.jpg', '8854949_12640262_1065851396800797_4708452966531261506_o.jpg', 2),
(13, '&#1053;&#1072;&#1089;&#1083;&#1086;&#1074; &#1073;&#1088;&#1086;&#1112; 7', '<p>&#1057;&#1086;&#1076;&#1088;&#1078;&#1080;&#1085;&#1072;&nbsp;<strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of L</p>', '2016-06-06 13:13:54', 2, '5672210_12640262_1065851396800797_4708452966531261506_o.jpg', '1364746_12640262_1065851396800797_4708452966531261506_o.jpg', 2),
(15, '&#1057;&#1054;&#1056;&#1040;&#1041;&#1054;&#1058;&#1050;&#1040; &#1057;&#1054; &#1056;&#1054;&#1044;&#1048;&#1058;&#1045;&#1051;&#1048;&#1058;&#1045;', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>', '2016-06-08 12:38:17', 3, NULL, NULL, 2),
(16, '&#1056;&#1054;&#1044;&#1048;&#1058;&#1045;&#1051;&#1057;&#1050;&#1048; &#1057;&#1056;&#1045;&#1044;&#1041;&#1048;', '<h1>&nbsp;</h1>\r\n<div class="sorabotka-roditeli">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</div>\r\n<div class="sorabotka-roditeli sredbi">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</div>\r\n<div class="sorabotka-roditeli sredbi">\r\n<div class="sorabotka-roditeli">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</div>\r\n<div class="sorabotka-roditeli sredbi">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.\r\n<div class="sorabotka-roditeli">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate</div>\r\n<div class="sorabotka-roditeli sredbi">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</div>\r\n</div>\r\n</div>', '2016-06-08 12:38:54', 3, NULL, NULL, 2),
(17, '&#1053;&#1072;&#1112;&#1085;&#1086;&#1074;&#1080; &#1048;&#1085;&#1092;&#1086;&#1088;&#1084;&#1072;&#1094;&#1080;&#1080; 1', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>', '2016-06-08 14:19:47', 4, '8800292_tour-icon1.png', '1872589_cycle.png', 2),
(18, '&#1053;&#1072;&#1112;&#1085;&#1086;&#1074;&#1080; &#1080;&#1085;&#1092;&#1086;&#1088;&#1084;&#1072;&#1094;&#1080;&#1080; 2', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem IpsumLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>', '2016-06-08 14:20:18', 4, '9362243_cycle.png', '7156463_tour-icon1.png', 2),
(19, '&#1053;&#1072;&#1112;&#1085;&#1086;&#1074;&#1080; &#1080;&#1085;&#1092;&#1086;&#1088;&#1084;&#1072;&#1094;&#1080;&#1080; 3', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem IpsumLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>', '2016-06-08 14:20:54', 4, '1710815_hill.png', '1432037_house.png', 2),
(20, '&#1053;&#1072;&#1112;&#1085;&#1086;&#1074;&#1080; &#1080;&#1085;&#1092;&#1086;&#1088;&#1084;&#1072;&#1094;&#1080;&#1080; 4', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem IpsumLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem IpsumLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>', '2016-06-08 14:22:27', 4, '2404602_birds1.png', '7586029_sun.png', 2),
(21, '&#1053;&#1072;&#1112;&#1085;&#1086;&#1074;&#1080; &#1080;&#1085;&#1092;&#1086;&#1088;&#1084;&#1072;&#1094;&#1080;&#1080; 5', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', '2016-06-08 14:40:46', 4, '4095947_birds2.png', '7723907_hill.png', 2),
(22, '&#1053;&#1072;&#1112;&#1085;&#1086;&#1074;&#1080; &#1048;&#1085;&#1092;&#1086;&#1088;&#1084;&#1072;&#1094;&#1080;&#1080; 6', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', '2016-06-08 14:41:43', 4, '4890533_house.png', '3630676_sun.png', 2),
(23, '&#1053;&#1072;&#1089;&#1083;&#1086;&#1074; &#1073;&#1088;&#1086;&#1112; 4', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum<strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum<strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>', '2016-06-08 14:53:36', 1, '6317657_1699829_12640262_1065851396800797_4708452966531261506_o.jpg', '8999694_1699829_12640262_1065851396800797_4708452966531261506_o.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tip_korisnici`
--

CREATE TABLE IF NOT EXISTS `tip_korisnici` (
`id` int(11) NOT NULL,
  `tip` varchar(45) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tip_korisnici`
--

INSERT INTO `tip_korisnici` (`id`, `tip`) VALUES
(1, 'Admin'),
(2, 'Moderator');

-- --------------------------------------------------------

--
-- Table structure for table `tip_profesori`
--

CREATE TABLE IF NOT EXISTS `tip_profesori` (
`id` int(11) NOT NULL,
  `tip` varchar(45) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tip_profesori`
--

INSERT INTO `tip_profesori` (`id`, `tip`) VALUES
(1, 'Oddelenski'),
(2, 'Predmeten');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokumenti`
--
ALTER TABLE `dokumenti`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galerii`
--
ALTER TABLE `galerii`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galerija_sliki`
--
ALTER TABLE `galerija_sliki`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategorii`
--
ALTER TABLE `kategorii`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `korisnici`
--
ALTER TABLE `korisnici`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profesori`
--
ALTER TABLE `profesori`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `raspored_na_zvonejne`
--
ALTER TABLE `raspored_na_zvonejne`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smeni`
--
ALTER TABLE `smeni`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `strani`
--
ALTER TABLE `strani`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tip_korisnici`
--
ALTER TABLE `tip_korisnici`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tip_profesori`
--
ALTER TABLE `tip_profesori`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokumenti`
--
ALTER TABLE `dokumenti`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `galerii`
--
ALTER TABLE `galerii`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `galerija_sliki`
--
ALTER TABLE `galerija_sliki`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kategorii`
--
ALTER TABLE `kategorii`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `korisnici`
--
ALTER TABLE `korisnici`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `profesori`
--
ALTER TABLE `profesori`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `raspored_na_zvonejne`
--
ALTER TABLE `raspored_na_zvonejne`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `smeni`
--
ALTER TABLE `smeni`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `strani`
--
ALTER TABLE `strani`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `tip_korisnici`
--
ALTER TABLE `tip_korisnici`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tip_profesori`
--
ALTER TABLE `tip_profesori`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
