-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-07-2015 a las 07:29:07
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `lamaquina`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `locales`
--

CREATE TABLE IF NOT EXISTS `locales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `barrio` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cant_salas` int(11) NOT NULL,
  `horario` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `puntaje` float NOT NULL,
  `avatar` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `creado_en` datetime NOT NULL,
  `update_en` datetime NOT NULL,
  `cancel_en` datetime NOT NULL,
  `local_tipo_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=258 ;

--
-- Volcado de datos para la tabla `locales`
--

INSERT INTO `locales` (`id`, `nombre`, `direccion`, `telefono`, `barrio`, `cant_salas`, `horario`, `puntaje`, `avatar`, `creado_en`, `update_en`, `cancel_en`, `local_tipo_id`, `user_id`) VALUES
(1, 'La Cripta', 'Av. Nazca 2206', '4583 3504', 'flores', 0, '', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(2, 'Rosas Negras', 'AV CABILDO 3100', '4544 2287', 'belgrano', 5, '', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(3, 'Orfeo', 'Av Federico Lacroze 3500', '45554712', 'colegiales', 3, '', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(4, 'La sala del rock hostel', 'Av. Rivadavia 1587', '4382-6345/1532605531', 'congreso', 1, '', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(5, 'El Pasaje', 'Pasaje Pescadores 34', '4637-3577', 'flores', 2, '', 0, '', '2015-07-05 08:04:46', '2015-07-05 08:04:46', '0000-00-00 00:00:00', 0, 0),
(6, 'La Cascada', 'Manuel García 178', '1536670764', 'parque patricios', 1, '', 0, '', '2015-07-05 08:15:18', '2015-07-05 08:15:18', '0000-00-00 00:00:00', 0, 0),
(164, 'Jorgelin', 'Acevedo 344', '23423423444', 'caballito', 2, '', 0, '', '2015-07-05 23:12:32', '2015-07-05 23:12:32', '0000-00-00 00:00:00', 0, 0),
(163, 'Amapola Sound', 'Belgrano 1234', '5411 3527-1572', 'montserrat', 3, '', 0, '', '2015-07-05 22:35:49', '2015-07-05 22:35:49', '0000-00-00 00:00:00', 0, 0),
(257, 'Fisurita', 'Great Deceiver 666', '65465465465465465455', '', 3, '{"Wed":{"apertura":8,"cierre":23},"Thu":{"apertura":8,"cierre":23},"Fri":{"apertura":8,"cierre":23},"Sat":{"apertura":8,"cierre":24},"Sun":{"apertura":8,"cierre":24}}', 0, '', '2015-07-10 21:00:01', '2015-07-10 21:00:01', '0000-00-00 00:00:00', 0, 0),
(216, 'Asylum', 'Av. Pepe 123 PB1', '4444-4444', '', 3, '{"Mon":{"apertura":1,"cierre":22},"Wed":{"apertura":1,"cierre":22},"Thu":{"apertura":1,"cierre":22},"Sat":{"apertura":1,"cierre":22}}', 0, '', '2015-07-08 02:20:49', '2015-07-08 02:20:49', '0000-00-00 00:00:00', 0, 0),
(215, 'Asylum', 'Av. Pepe 123 PB1', '4444-4444', '', 3, '{"Mon":{"apertura":1,"cierre":22},"Wed":{"apertura":1,"cierre":22},"Thu":{"apertura":1,"cierre":22},"Sat":{"apertura":1,"cierre":22}}', 0, '', '2015-07-08 02:18:59', '2015-07-08 02:18:59', '0000-00-00 00:00:00', 0, 0),
(214, 'Asylum', 'Av. Pepe 123 PB1', '4444-4444', '', 3, '{"Mon":{"apertura":1,"cierre":22},"Wed":{"apertura":1,"cierre":22},"Thu":{"apertura":1,"cierre":22},"Sat":{"apertura":1,"cierre":22}}', 0, '', '2015-07-08 02:18:15', '2015-07-08 02:18:15', '0000-00-00 00:00:00', 0, 0),
(213, 'Asylum', 'Av. Pepe 123 PB1', '4444-4444', '', 3, '{"Mon":{"apertura":1,"cierre":22},"Wed":{"apertura":1,"cierre":22},"Thu":{"apertura":1,"cierre":22},"Sat":{"apertura":1,"cierre":22}}', 0, '', '2015-07-08 02:09:49', '2015-07-08 02:09:49', '0000-00-00 00:00:00', 0, 0),
(212, 'Asylum', 'Av. Pepe 123 PB1', '4444-4444', '', 3, '{"Mon":{"apertura":1,"cierre":22},"Wed":{"apertura":1,"cierre":22},"Thu":{"apertura":1,"cierre":22},"Sat":{"apertura":1,"cierre":22}}', 0, '', '2015-07-08 02:05:48', '2015-07-08 02:05:48', '0000-00-00 00:00:00', 0, 0),
(210, 'Asylum', 'Av. Pepe 123 PB1', '4444-4444', '', 3, '{"Mon":{"apertura":1,"cierre":22},"Wed":{"apertura":1,"cierre":22},"Thu":{"apertura":1,"cierre":22},"Sat":{"apertura":1,"cierre":22}}', 0, '', '2015-07-08 01:57:47', '2015-07-08 01:57:47', '0000-00-00 00:00:00', 0, 0),
(211, 'Asylum', 'Av. Pepe 123 PB1', '4444-4444', '', 3, '{"Mon":{"apertura":1,"cierre":22},"Wed":{"apertura":1,"cierre":22},"Thu":{"apertura":1,"cierre":22},"Sat":{"apertura":1,"cierre":22}}', 0, '', '2015-07-08 02:04:55', '2015-07-08 02:04:55', '0000-00-00 00:00:00', 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
