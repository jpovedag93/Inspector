-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-05-2016 a las 01:58:41
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `inspector`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudades`
--

CREATE TABLE IF NOT EXISTS `ciudades` (
  `id` int(11) NOT NULL,
  `nombre_ciudad` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documento`
--

CREATE TABLE IF NOT EXISTS `documento` (
  `Numero_Documento` varchar(32) NOT NULL,
  `tipo_documento` int(11) NOT NULL,
  `Nombre_en_Documento` varchar(64) NOT NULL,
  `Descripcion_Documento` varchar(255) NOT NULL,
  `Imagen` varchar(32) NOT NULL,
  `Lugar` varchar(255) NOT NULL,
  `Tiempo` datetime NOT NULL,
  `Nick_Usuario_Busqueda` varchar(16) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados_documento`
--

CREATE TABLE IF NOT EXISTS `estados_documento` (
  `id` int(11) NOT NULL,
  `nombre_estado` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuestas`
--

CREATE TABLE IF NOT EXISTS `respuestas` (
  `id` int(11) NOT NULL,
  `temaId` int(11) NOT NULL,
  `autor_respuesta` varchar(16) NOT NULL,
  `respuesta` text NOT NULL,
  `fecha_hora` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temas`
--

CREATE TABLE IF NOT EXISTS `temas` (
  `id` int(11) NOT NULL,
  `nombre_tema` varchar(40) NOT NULL,
  `usuario` varchar(16) NOT NULL,
  `fecha_hora` datetime NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_documento`
--

CREATE TABLE IF NOT EXISTS `tipos_documento` (
  `id` int(11) NOT NULL,
  `nombre_tipo_documento` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `Nick_Usuario` varchar(16) NOT NULL,
  `Nombre_Usuario` varchar(30) NOT NULL,
  `Apellido_Usuario` varchar(30) NOT NULL,
  `ciudad_usuario` int(11) NOT NULL,
  `Telefono_Usuario` int(11) NOT NULL,
  `Correo_Usuario` varchar(60) NOT NULL,
  `Contrasena_Usuario` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `nombre_ciudad` (`nombre_ciudad`);

--
-- Indices de la tabla `documento`
--
ALTER TABLE `documento`
  ADD PRIMARY KEY (`Numero_Documento`,`Nick_Usuario_Busqueda`), ADD KEY `Nick_Usuario_Busqueda` (`Nick_Usuario_Busqueda`), ADD KEY `tipo_documento` (`tipo_documento`), ADD KEY `estado` (`estado`);

--
-- Indices de la tabla `estados_documento`
--
ALTER TABLE `estados_documento`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `respuestas`
--
ALTER TABLE `respuestas`
  ADD PRIMARY KEY (`id`), ADD KEY `temaId` (`temaId`), ADD KEY `autor_respuesta` (`autor_respuesta`);

--
-- Indices de la tabla `temas`
--
ALTER TABLE `temas`
  ADD PRIMARY KEY (`id`,`usuario`), ADD UNIQUE KEY `nombre_tema` (`nombre_tema`), ADD KEY `usuario` (`usuario`);

--
-- Indices de la tabla `tipos_documento`
--
ALTER TABLE `tipos_documento`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `nombre_tipo_documento` (`nombre_tipo_documento`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Nick_Usuario`), ADD KEY `ciudad_usuario` (`ciudad_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estados_documento`
--
ALTER TABLE `estados_documento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `respuestas`
--
ALTER TABLE `respuestas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `temas`
--
ALTER TABLE `temas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `tipos_documento`
--
ALTER TABLE `tipos_documento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `documento`
--
ALTER TABLE `documento`
ADD CONSTRAINT `documento_ibfk_1` FOREIGN KEY (`Nick_Usuario_Busqueda`) REFERENCES `usuarios` (`Nick_Usuario`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `documento_ibfk_2` FOREIGN KEY (`tipo_documento`) REFERENCES `tipos_documento` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `documento_ibfk_3` FOREIGN KEY (`estado`) REFERENCES `estados_documento` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `respuestas`
--
ALTER TABLE `respuestas`
ADD CONSTRAINT `respuestas_ibfk_1` FOREIGN KEY (`temaId`) REFERENCES `temas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `respuestas_ibfk_2` FOREIGN KEY (`autor_respuesta`) REFERENCES `usuarios` (`Nick_Usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `temas`
--
ALTER TABLE `temas`
ADD CONSTRAINT `temas_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`Nick_Usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`ciudad_usuario`) REFERENCES `ciudades` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
