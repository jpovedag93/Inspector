-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-05-2016 a las 02:13:28
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
-- Estructura de tabla para la tabla `contactenos_inspector`
--

CREATE TABLE IF NOT EXISTS `contactenos_inspector` (
  `Nombre y Apellido` varchar(64) NOT NULL,
  `Numero_Telefono` varchar(16) NOT NULL,
  `Correo_Contacto` varchar(60) NOT NULL,
  `Comentario` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documento`
--

CREATE TABLE IF NOT EXISTS `documento` (
  `Numero_Documento` varchar(32) NOT NULL,
  `Tipo_Documento` varchar(16) NOT NULL,
  `Otro_Tipo_Documento` varchar(16) NOT NULL,
  `Nombre_en_Documento` varchar(64) NOT NULL,
  `Descripcion_Documento` varchar(255) NOT NULL,
  `Imagen` varchar(32) NOT NULL,
  `Lugar` varchar(255) NOT NULL,
  `Tiempo` datetime NOT NULL,
  `Nick_Usuario_Busqueda` varchar(16) NOT NULL,
  `Estado_Documento` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuestas`
--

CREATE TABLE IF NOT EXISTS `respuestas` (
  `id` int(11) NOT NULL,
  `temaId` int(11) NOT NULL,
  `autor_respuesta` varchar(50) NOT NULL,
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
  `autor_tema` varchar(50) NOT NULL,
  `fecha_hora` datetime NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `temas`
--

INSERT INTO `temas` (`id`, `nombre_tema`, `autor_tema`, `fecha_hora`, `descripcion`) VALUES
(1, 'Bases de datos', 'Pepito Perez', '2016-05-17 11:13:47', 'Foro sobre bases de datos...'),
(2, 'PHP', 'Pepito Perez', '2016-05-17 11:14:48', 'Foro de PHP'),
(3, 'Java', 'Marco Polo', '2016-05-17 11:24:17', 'Foro de Java...'),
(4, 'AAAAAAAA', 'AAAAAAAAAA', '2016-05-17 14:00:00', 'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `Nick_Usuario` varchar(16) NOT NULL,
  `Nombre_Usuario` varchar(30) NOT NULL,
  `Apellido_Usuario` varchar(30) NOT NULL,
  `Ciudad_Usuario` varchar(30) NOT NULL,
  `Telefono_Usuario` int(11) NOT NULL,
  `Correo_Usuario` varchar(60) NOT NULL,
  `Contrasena_Usuario` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `documento`
--
ALTER TABLE `documento`
  ADD PRIMARY KEY (`Numero_Documento`,`Nick_Usuario_Busqueda`), ADD KEY `Nick_Usuario_Busqueda` (`Nick_Usuario_Busqueda`);

--
-- Indices de la tabla `respuestas`
--
ALTER TABLE `respuestas`
  ADD PRIMARY KEY (`id`), ADD KEY `temaId` (`temaId`);

--
-- Indices de la tabla `temas`
--
ALTER TABLE `temas`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `nombre_tema` (`nombre_tema`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Nick_Usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

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
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `documento`
--
ALTER TABLE `documento`
ADD CONSTRAINT `documento_ibfk_1` FOREIGN KEY (`Nick_Usuario_Busqueda`) REFERENCES `usuarios` (`Nick_Usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `respuestas`
--
ALTER TABLE `respuestas`
ADD CONSTRAINT `respuestas_ibfk_1` FOREIGN KEY (`temaId`) REFERENCES `temas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
