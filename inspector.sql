-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-05-2016 a las 03:45:14
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
  `Correo_Contacto` text NOT NULL,
  `Comentario` text NOT NULL
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
  `Descripcion_Documento` text NOT NULL,
  `Imagen` varchar(32) NOT NULL,
  `Lugar` text NOT NULL,
  `Tiempo` datetime NOT NULL,
  `Nick_Usuario_Busqueda` varchar(16) NOT NULL,
  `Estado_Documento` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `foro_inspector`
--

CREATE TABLE IF NOT EXISTS `foro_inspector` (
  `id_entrada` int(16) NOT NULL,
  `Autor` varchar(200) NOT NULL,
  `Titulo` varchar(200) NOT NULL,
  `Mensaje` text NOT NULL,
  `Fecha` datetime NOT NULL,
  `Respuestas` int(16) NOT NULL,
  `Identificador` int(8) NOT NULL,
  `Ult_Respuesta` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `Nick_Usuario` varchar(16) NOT NULL,
  `Nombre_Usuario` text NOT NULL,
  `Apellido_Usuario` text NOT NULL,
  `Ciudad_Usuario` text NOT NULL,
  `Telefono_Usuario` int(11) NOT NULL,
  `Correo_Usuario` text NOT NULL,
  `Contrasena_Usuario` text NOT NULL
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
-- Indices de la tabla `foro_inspector`
--
ALTER TABLE `foro_inspector`
  ADD PRIMARY KEY (`id_entrada`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Nick_Usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `foro_inspector`
--
ALTER TABLE `foro_inspector`
  MODIFY `id_entrada` int(16) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `documento`
--
ALTER TABLE `documento`
ADD CONSTRAINT `documento_ibfk_1` FOREIGN KEY (`Nick_Usuario_Busqueda`) REFERENCES `usuarios` (`Nick_Usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
