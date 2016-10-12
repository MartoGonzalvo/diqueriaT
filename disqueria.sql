-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-10-2016 a las 21:40:35
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  PRIMARY KEY (`id_cancion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  KEY `id_cancion` (`id_cancion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE IF NOT EXISTS `perfil` (
  `id_perfil` int(2) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(20) NOT NULL,
  PRIMARY KEY (`id_perfil`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  `tiene_id_perfi` int(2) NOT NULL,
  `tiene_id_ubicacion` int(2) NOT NULL,
  PRIMARY KEY (`id_usuario`),
  KEY `tiene_id_perfi` (`tiene_id_perfi`),
  KEY `tiene_id_ubicacion` (`tiene_id_ubicacion`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellido`, `email`, `tiene_id_perfi`, `tiene_id_ubicacion`) VALUES
(3, 'martin', 'gonzalvo', 'martin@gmail.com', 1, 1),
(4, 'maximiliano', 'avendaño', 'maxi@gmail.com', 1, 2);

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
  ADD CONSTRAINT `contiene_ibfk_2` FOREIGN KEY (`id_cancion`) REFERENCES `cancion` (`id_cancion`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `contiene_ibfk_1` FOREIGN KEY (`id_playlist`) REFERENCES `playlist` (`id_playlist`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `playlist`
--
ALTER TABLE `playlist`
  ADD CONSTRAINT `playlist_ibfk_1` FOREIGN KEY (`crea_id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `relaciona_usuario`
--
ALTER TABLE `relaciona_usuario`
  ADD CONSTRAINT `relaciona_usuario_ibfk_2` FOREIGN KEY (`id_playlist`) REFERENCES `playlist` (`id_playlist`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `relaciona_usuario_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `reporte`
--
ALTER TABLE `reporte`
  ADD CONSTRAINT `reporte_ibfk_3` FOREIGN KEY (`tiene_cancion_id`) REFERENCES `cancion` (`id_cancion`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reporte_ibfk_1` FOREIGN KEY (`crea_usuario_id`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reporte_ibfk_2` FOREIGN KEY (`tiene_playlist_id`) REFERENCES `playlist` (`id_playlist`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`tiene_id_ubicacion`) REFERENCES `ubicacion` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`tiene_id_perfi`) REFERENCES `perfil` (`id_perfil`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
