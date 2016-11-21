-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-11-2016 a las 20:35:12
-- Versión del servidor: 5.7.14
-- Versión de PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `disqueria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cancion`
--

CREATE TABLE `cancion` (
  `id_cancion` int(2) NOT NULL,
  `artista` varchar(30) NOT NULL,
  `genero` varchar(20) NOT NULL,
  `titulo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consulta`
--

CREATE TABLE `consulta` (
  `id` int(2) NOT NULL,
  `id_playlist` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contiene`
--

CREATE TABLE `contiene` (
  `id_playlist` int(2) NOT NULL,
  `id_cancion` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE `perfil` (
  `id_perfil` int(2) NOT NULL,
  `descripcion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `playlist` (
  `id_playlist` int(2) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `genero` varchar(20) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `crea_id_usuario` int(2) NOT NULL,
  `estado` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ranking_votacion`
--

CREATE TABLE `ranking_votacion` (
  `id_ranking` int(2) NOT NULL,
  `puesto` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `relaciona_usuario`
--

CREATE TABLE `relaciona_usuario` (
  `id_usuario` int(2) NOT NULL,
  `id_playlist` int(2) NOT NULL,
  `opinion` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reporte`
--

CREATE TABLE `reporte` (
  `id_reporte` int(11) NOT NULL,
  `descripcion` int(11) NOT NULL,
  `crea_usuario_id` int(2) NOT NULL,
  `tiene_playlist_id` int(2) NOT NULL,
  `tiene_cancion_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubicacion`
--

CREATE TABLE `ubicacion` (
  `id` int(2) NOT NULL,
  `cordenadas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `usuario` (
  `id_usuario` int(2) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contrasena` varchar(10) DEFAULT NULL,
  `estado` varchar(20) NOT NULL,
  `tiene_id_perfi` int(2) NOT NULL,
  `tiene_id_ubicacion` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellido`, `email`, `contrasena`, `estado`, `tiene_id_perfi`, `tiene_id_ubicacion`) VALUES
(3, 'martin', 'gonzalvo', 'martin@gmail.com', 'capo', 'activo', 1, 1),
(4, 'maximiliano', 'avendaño', 'maxi@gmail.com', 'maxi', 'activo', 2, 2),
(9, 'Roberto', 'Marley', 'bob@gmail.com', 'bob', 'borrado', 2, 1),
(10, 'Hibbert', 'Toot', 'hibbert@gmail.com', 'toot', 'activo', 2, 1),
(11, 'Luis', 'Spinetta', 'luis@gmail.com', 'luis', 'activo', 2, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cancion`
--
ALTER TABLE `cancion`
  ADD PRIMARY KEY (`id_cancion`);

--
-- Indices de la tabla `consulta`
--
ALTER TABLE `consulta`
  ADD KEY `id_playlist` (`id_playlist`),
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `contiene`
--
ALTER TABLE `contiene`
  ADD KEY `id_playlist` (`id_playlist`,`id_cancion`),
  ADD KEY `id_cancion` (`id_cancion`);

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`id_perfil`);

--
-- Indices de la tabla `playlist`
--
ALTER TABLE `playlist`
  ADD PRIMARY KEY (`id_playlist`),
  ADD KEY `crea_id_usuario` (`crea_id_usuario`);

--
-- Indices de la tabla `ranking_votacion`
--
ALTER TABLE `ranking_votacion`
  ADD PRIMARY KEY (`id_ranking`);

--
-- Indices de la tabla `relaciona_usuario`
--
ALTER TABLE `relaciona_usuario`
  ADD KEY `id_usuario` (`id_usuario`,`id_playlist`),
  ADD KEY `id_playlist` (`id_playlist`);

--
-- Indices de la tabla `reporte`
--
ALTER TABLE `reporte`
  ADD PRIMARY KEY (`id_reporte`),
  ADD KEY `crea_usuario_id` (`crea_usuario_id`,`tiene_playlist_id`,`tiene_cancion_id`),
  ADD KEY `tiene_playlist_id` (`tiene_playlist_id`),
  ADD KEY `tiene_cancion_id` (`tiene_cancion_id`);

--
-- Indices de la tabla `ubicacion`
--
ALTER TABLE `ubicacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `tiene_id_perfi` (`tiene_id_perfi`),
  ADD KEY `tiene_id_ubicacion` (`tiene_id_ubicacion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cancion`
--
ALTER TABLE `cancion`
  MODIFY `id_cancion` int(2) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `perfil`
--
ALTER TABLE `perfil`
  MODIFY `id_perfil` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `playlist`
--
ALTER TABLE `playlist`
  MODIFY `id_playlist` int(2) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `ranking_votacion`
--
ALTER TABLE `ranking_votacion`
  MODIFY `id_ranking` int(2) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `reporte`
--
ALTER TABLE `reporte`
  MODIFY `id_reporte` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `ubicacion`
--
ALTER TABLE `ubicacion`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
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
