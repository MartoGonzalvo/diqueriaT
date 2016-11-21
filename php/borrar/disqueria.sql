-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 21-11-2016 a las 02:55:10
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `cancion`
--

INSERT INTO `cancion` (`id_cancion`, `artista`, `genero`, `titulo`, `ubicacion`) VALUES
(5, 'Desconocido', 'Blues ', 'Berlin Blues', ''),
(7, 'Los Cafres', 'Reggae', 'Esclava', '');

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
(1, 7),
(1, 7);

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
  `crea_id_usuario` int(2) NOT NULL,
  `estado` varchar(10) NOT NULL,
  PRIMARY KEY (`id_playlist`),
  KEY `crea_id_usuario` (`crea_id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `playlist`
--

INSERT INTO `playlist` (`id_playlist`, `nombre`, `genero`, `foto`, `crea_id_usuario`, `estado`) VALUES
(1, 'Rastamam live up', 'reggae', '', 9, 'publico'),
(2, 'Skafrica', 'Ska', '', 16, 'privado');

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
  `id_playlist` int(2) NOT NULL,
  `opinion` varchar(40) NOT NULL,
  KEY `id_usuario` (`id_usuario`,`id_playlist`),
  KEY `id_playlist` (`id_playlist`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `contrasena` varchar(10) DEFAULT NULL,
  `estado` varchar(20) NOT NULL,
  `tiene_id_perfi` int(2) NOT NULL,
  `tiene_id_ubicacion` int(2) NOT NULL,
  PRIMARY KEY (`id_usuario`),
  KEY `tiene_id_perfi` (`tiene_id_perfi`),
  KEY `tiene_id_ubicacion` (`tiene_id_ubicacion`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellido`, `email`, `contrasena`, `estado`, `tiene_id_perfi`, `tiene_id_ubicacion`) VALUES
(3, 'martin', 'gonzalvo', 'martin@gmail.com', 'capo', 'activo', 1, 1),
(4, 'maximiliano', 'avendaño', 'maxi@gmail.com', 'maxi', 'borrado', 2, 2),
(9, 'Roberto', 'Marley', 'bob@gmail.com', 'bob', 'borrado', 2, 1),
(10, 'Hibbert', 'Toot', 'hibbert@gmail.com', 'toot', 'activo', 2, 1),
(11, 'Luis', 'Spinetta', 'luis@gmail.com', 'luis', 'borrado', 2, 1),
(12, 'Elwod', 'Blues', 'elwood@gmail.com', 'blues', 'activo', 2, 1),
(14, 'Atahualpa', 'Yupanqui', 'atahualpa@gmail.com', '180b2f0ca7', 'activo', 2, 1),
(16, 'Carlos', 'Garcia', 'charly@gmail.com', '49878439e7', 'activo', 2, 1),
(17, 'Manuel', 'Serrat', 'manuel@gmail.com', 'f13bb1bed0', 'borrado', 2, 1),
(18, 'Martin', 'Gonzalvo', 'gonzalvomartin@gmail.com', '7a9470ecb8', 'activo', 2, 1);

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
  ADD CONSTRAINT `relaciona_usuario_ibfk_2` FOREIGN KEY (`id_playlist`) REFERENCES `playlist` (`id_playlist`) ON DELETE CASCADE ON UPDATE CASCADE;

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
