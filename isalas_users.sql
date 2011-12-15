-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 15-12-2011 a las 14:45:17
-- Versión del servidor: 5.5.8
-- Versión de PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `isalas_ci`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `isalas_users`
--

CREATE TABLE IF NOT EXISTS `isalas_users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `nombreusuario` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `clave` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `apellido` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dni` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fecha_nac` date DEFAULT NULL,
  `telefono` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `movil` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `direccion` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ciudad` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `provincia` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pais` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `empresa` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `activo` tinyint(20) NOT NULL DEFAULT '1',
  `id_master_user` int(11) DEFAULT NULL,
  `fecha_alta` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `fecha_validez` date DEFAULT NULL,
  `fecha_edit` datetime DEFAULT NULL,
  `user_edit` int(11) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcar la base de datos para la tabla `isalas_users`
--

INSERT INTO `isalas_users` (`user_id`, `nombreusuario`, `clave`, `nombre`, `apellido`, `dni`, `fecha_nac`, `telefono`, `movil`, `email`, `direccion`, `ciudad`, `provincia`, `pais`, `empresa`, `activo`, `id_master_user`, `fecha_alta`, `fecha_validez`, `fecha_edit`, `user_edit`) VALUES
(1, 'utndemo', '123456', 'UTN', 'Demo', NULL, NULL, NULL, NULL, 'scorrales@sceu.frba.utn.edu.ar', NULL, 'Buenos Aires', NULL, 'Argentina', NULL, 1, 0, '2011-12-15 09:31:27', '2011-12-30', NULL, NULL);
