-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 05, 2015 at 12:25 PM
-- Server version: 5.1.73
-- PHP Version: 5.4.16

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lamaquinasensible_com_ar`
--

-- --------------------------------------------------------

--
-- Table structure for table `locales`
--

CREATE TABLE IF NOT EXISTS `locales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `barrio` enum('belgrano','caballito','colegiales','congreso','flores','palermo','chacarita','parque patricios','ninguno') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'ninguno',
  `cant_salas` int(11) NOT NULL,
  `puntaje` float NOT NULL,
  `avatar` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `creado_en` datetime NOT NULL,
  `update_en` datetime NOT NULL,
  `cancel_en` datetime NOT NULL,
  `local_tipo_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `dias` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `desde` time NOT NULL,
  `hasta` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `locales`
--

INSERT INTO `locales` (`id`, `nombre`, `direccion`, `telefono`, `barrio`, `cant_salas`, `puntaje`, `avatar`, `creado_en`, `update_en`, `cancel_en`, `local_tipo_id`, `user_id`, `dias`, `desde`, `hasta`) VALUES
(1, 'La Cripta', 'Av. Nazca 2206', '4583 3504', 'flores', 0, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '00:00:00', '00:00:00'),
(2, 'Rosas Negras', 'AV CABILDO 3100', '4544 2287', 'belgrano', 5, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '00:00:00', '00:00:00'),
(3, 'Orfeo', 'Av Federico Lacroze 3500', '45554712', 'colegiales', 3, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '00:00:00', '00:00:00'),
(4, 'La sala del rock hostel', 'Av. Rivadavia 1587', '4382-6345/1532605531', 'congreso', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '', '00:00:00', '00:00:00'),
(5, 'El Pasaje', 'Pasaje Pescadores 34', '4637-3577', 'flores', 2, 0, '', '2015-07-05 08:04:46', '2015-07-05 08:04:46', '0000-00-00 00:00:00', 0, 0, 'unknown', '00:00:00', '00:00:00'),
(6, 'La Cascada', 'Manuel García 178', '1536670764', 'parque patricios', 1, 0, '', '2015-07-05 08:15:18', '2015-07-05 08:15:18', '0000-00-00 00:00:00', 0, 0, 'unknown', '00:00:00', '00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
