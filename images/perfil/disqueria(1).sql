-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 29-11-2016 a las 01:39:16
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `disqueria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cancion`
--

CREATE TABLE IF NOT EXISTS `cancion` (
  `id_cancion` int(2) NOT NULL AUTO_INCREMENT,
  `artista` varchar(30) NOT NULL,
  `genero` varchar(20) NOT NULL,
  `titulo` varchar(20) NOT NULL,
  `ubicacion` varchar(60) NOT NULL,
  PRIMARY KEY (`id_cancion`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Volcado de datos para la tabla `cancion`
--

INSERT INTO `cancion` (`id_cancion`, `artista`, `genero`, `titulo`, `ubicacion`) VALUES
(5, 'Desconocido', 'Blues ', 'Berlin Blues', 'berlin blues.mp3'),
(7, 'Los Cafres', 'Reggae', 'Esclava', 'esclava.mp3'),
(8, 'Los Cafres', 'Reggae', 'Dreadlocks', 'dreadlocks.mp3'),
(9, 'Sublime', 'Ska', 'Date Rape', 'date rape.mp3'),
(10, 'Joss Stone', 'Soul', 'Spoiled', 'spoiled.mp3'),
(11, 'Amy & Tony Bennet', 'Soul', 'Body and Soul', 'body and soul.mp3'),
(12, 'La Vela Puerca', 'Rock', 'Claro y Oscuro', 'claro y oscuro.mp3'),
(13, 'Stivie Ray Voughan', 'Rock', 'Cold Shot', 'cold shot.mp3'),
(14, 'Pappo', 'Blues ', 'Desconfio de la Vida', 'desconfio de la vida.mp3'),
(15, 'Los Cafres', 'Reggae', 'Este es mi Arte', 'este es mi arte.mp3'),
(16, 'Alicia Keys', 'pop', 'Fallin', 'fallin.mp3'),
(17, 'Creddence', 'Folk', 'Fortunate Son', 'fortunate son.mp3'),
(18, 'Los Redondos', 'Rock', 'Jam', 'jam.mp3'),
(19, 'La Muza', 'Reggae', 'Aprender', 'aprender.mp3'),
(20, 'Riddim', 'Reggae', 'Quiero', '06 Quiero.mp3'),
(21, 'Cultura Profetica', 'Reggae', 'Dias Intensos', '06 - Dias Intensos.mp3'),
(22, 'Cultura Profetica', 'Reggae', 'Arboles', '11 - Arboles.mp3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consulta`
--

CREATE TABLE IF NOT EXISTS `consulta` (
  `id` int(2) NOT NULL,
  `id_playlist` int(2) NOT NULL,
  KEY `id_playlist` (`id_playlist`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contiene`
--

CREATE TABLE IF NOT EXISTS `contiene` (
  `id_playlist` int(2) NOT NULL,
  `id_cancion` int(2) NOT NULL,
  KEY `id_playlist` (`id_playlist`,`id_cancion`),
  KEY `id_cancion` (`id_cancion`),
  KEY `id_playlist_2` (`id_playlist`),
  KEY `id_cancion_2` (`id_cancion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contiene`
--

INSERT INTO `contiene` (`id_playlist`, `id_cancion`) VALUES
(115, 7),
(115, 15),
(115, 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE IF NOT EXISTS `perfil` (
  `id_perfil` int(2) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(20) NOT NULL,
  PRIMARY KEY (`id_perfil`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`id_perfil`, `descripcion`) VALUES
(1, 'administrador'),
(2, 'usuario'),
(3, 'visitante');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `playlist`
--

CREATE TABLE IF NOT EXISTS `playlist` (
  `id_playlist` int(2) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  `genero` varchar(20) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `fecha` date NOT NULL,
  `comentario` varchar(160) NOT NULL,
  `reproducciones` int(10) NOT NULL,
  `votos` int(10) NOT NULL,
  `crea_id_usuario` int(2) NOT NULL,
  `estado` varchar(10) NOT NULL,
  PRIMARY KEY (`id_playlist`),
  KEY `crea_id_usuario` (`crea_id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=116 ;

--
-- Volcado de datos para la tabla `playlist`
--

INSERT INTO `playlist` (`id_playlist`, `nombre`, `genero`, `foto`, `fecha`, `comentario`, `reproducciones`, `votos`, `crea_id_usuario`, `estado`) VALUES
(115, 'Surrealsmo', 'variado', 'artaud.jpg', '2016-11-28', '', 0, 0, 11, 'publico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ranking_votacion`
--

CREATE TABLE IF NOT EXISTS `ranking_votacion` (
  `id_ranking` int(2) NOT NULL AUTO_INCREMENT,
  `puesto` int(3) NOT NULL,
  PRIMARY KEY (`id_ranking`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `relaciona_usuario`
--

CREATE TABLE IF NOT EXISTS `relaciona_usuario` (
  `id_usuario` int(2) NOT NULL,
  `id_usuario_2` int(2) NOT NULL,
  `estado` varchar(40) NOT NULL,
  KEY `id_usuario` (`id_usuario`),
  KEY `id_usuario_2` (`id_usuario_2`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `relaciona_usuario`
--

INSERT INTO `relaciona_usuario` (`id_usuario`, `id_usuario_2`, `estado`) VALUES
(11, 9, 'amigos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reporte`
--

CREATE TABLE IF NOT EXISTS `reporte` (
  `id_reporte` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` int(11) NOT NULL,
  `crea_usuario_id` int(2) NOT NULL,
  `tiene_playlist_id` int(2) NOT NULL,
  `tiene_cancion_id` int(2) NOT NULL,
  PRIMARY KEY (`id_reporte`),
  KEY `crea_usuario_id` (`crea_usuario_id`,`tiene_playlist_id`,`tiene_cancion_id`),
  KEY `tiene_playlist_id` (`tiene_playlist_id`),
  KEY `tiene_cancion_id` (`tiene_cancion_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubicacion`
--

CREATE TABLE IF NOT EXISTS `ubicacion` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `cordenadas` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `ubicacion`
--

INSERT INTO `ubicacion` (`id`, `cordenadas`) VALUES
(1, '-34.591060, -58.393176'),
(2, '-34.605563, -58.377995');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(2) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contrasena` varchar(40) DEFAULT NULL,
  `estado` varchar(20) NOT NULL,
  `ubicacion` varchar(60) NOT NULL,
  `comentario` varchar(140) NOT NULL,
  `tiene_id_perfi` int(2) NOT NULL,
  `tiene_id_ubicacion` int(2) NOT NULL,
  PRIMARY KEY (`id_usuario`),
  KEY `tiene_id_perfi` (`tiene_id_perfi`),
  KEY `tiene_id_ubicacion` (`tiene_id_ubicacion`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellido`, `email`, `contrasena`, `estado`, `ubicacion`, `comentario`, `tiene_id_perfi`, `tiene_id_ubicacion`) VALUES
(3, 'Martin', 'Gonzalvo', 'martin@gmail.com', '925d7518fc597af0e43f5606f9a51512', 'activo', 'martin.JPG', '', 1, 1),
(9, 'Roberto', 'Marley', 'bob@gmail.com', '9f9d51bc70ef21ca5c14f307980a29d8', 'activo', 'bob.jpg', '', 2, 1),
(10, 'Hibbert', 'Toot', 'hibbert@gmail.com', '2f1e40efd0bb18da396abd34f507b7d6', 'activo', 'hibbert.jpg', '', 2, 1),
(11, 'Luis', 'Spenitta', 'luis@gmail.com', '502ff82f7f1f8218dd41201fe4353687', 'activo', 'spineta.jpg', '', 2, 1),
(25, 'Elwood', 'Blues', 'elwood@gmail.com', '3a61b71b271203a633e10c5b3fa9f258', 'activo', 'elwood.jpg', '', 2, 1);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `consulta`
--
ALTER TABLE `consulta`
  ADD CONSTRAINT `consulta_ibfk_1` FOREIGN KEY (`id_playlist`) REFERENCES `playlist` (`id_playlist`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `contiene`
--
ALTER TABLE `contiene`
  ADD CONSTRAINT `contiene_ibfk_1` FOREIGN KEY (`id_playlist`) REFERENCES `playlist` (`id_playlist`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `contiene_ibfk_2` FOREIGN KEY (`id_cancion`) REFERENCES `cancion` (`id_cancion`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `playlist`
--
ALTER TABLE `playlist`
  ADD CONSTRAINT `playlist_ibfk_1` FOREIGN KEY (`crea_id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `relaciona_usuario`
--
ALTER TABLE `relaciona_usuario`
  ADD CONSTRAINT `relaciona_usuario_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `relaciona_usuario_ibfk_3` FOREIGN KEY (`id_usuario_2`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `reporte`
--
ALTER TABLE `reporte`
  ADD CONSTRAINT `reporte_ibfk_1` FOREIGN KEY (`crea_usuario_id`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reporte_ibfk_2` FOREIGN KEY (`tiene_playlist_id`) REFERENCES `playlist` (`id_playlist`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reporte_ibfk_3` FOREIGN KEY (`tiene_cancion_id`) REFERENCES `cancion` (`id_cancion`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`tiene_id_perfi`) REFERENCES `perfil` (`id_perfil`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`tiene_id_ubicacion`) REFERENCES `ubicacion` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
