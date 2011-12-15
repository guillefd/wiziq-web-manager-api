-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 14-12-2011 a las 15:57:47
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
-- Estructura de tabla para la tabla `isalas_api_requests`
--

CREATE TABLE IF NOT EXISTS `isalas_api_requests` (
  `id_request` int(11) NOT NULL AUTO_INCREMENT,
  `method` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL,
  `titulo` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `horario` time DEFAULT NULL,
  `duracion` smallint(6) DEFAULT NULL,
  `timezone` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `presenter_email` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `presenter_id` int(11) DEFAULT NULL,
  `presenter_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `presenter_default_controls` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `attendee_limit` smallint(6) DEFAULT NULL,
  `control_category_id` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `create_recording` varchar(4) COLLATE utf8_unicode_ci DEFAULT NULL,
  `return_url` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status_ping_url` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `language_culture_name` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `attendee_list` text COLLATE utf8_unicode_ci,
  `descripcion` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `timestamp` datetime NOT NULL,
  `session_id` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `session_ip_address` varchar(16) COLLATE utf8_unicode_ci DEFAULT NULL,
  `session_user_agent` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_request`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=137 ;

--
-- Volcar la base de datos para la tabla `isalas_api_requests`
--

INSERT INTO `isalas_api_requests` (`id_request`, `method`, `class_id`, `titulo`, `fecha`, `horario`, `duracion`, `timezone`, `presenter_email`, `presenter_id`, `presenter_name`, `presenter_default_controls`, `attendee_limit`, `control_category_id`, `create_recording`, `return_url`, `status_ping_url`, `language_culture_name`, `attendee_list`, `descripcion`, `timestamp`, `session_id`, `session_ip_address`, `session_user_agent`, `id_user`) VALUES
(14, 'create', NULL, 'Test One', '2011-12-06', '15:00:00', 180, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 0, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', NULL, 'Descripcion', '2011-12-06 14:45:00', 'ea356d2c12d84eaeecee19a206bd5c06', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53', 0),
(15, 'create', NULL, 'Clase Test 3', '2011-12-12', '10:00:00', 120, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 0, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', NULL, 'Descript', '2011-12-06 15:28:55', '53900fb6fa9c8ef7a1718ad58dccd1b0', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53', 0),
(16, 'create', NULL, 'Test Clase 4', '2011-12-06', '05:00:00', 0, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 0, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', NULL, 'Descripcion', '2011-12-06 16:01:49', 'c002494c72172c2474db63f49843ee31', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53', 0),
(17, 'create', NULL, 'Titulo', '2011-12-06', '05:00:00', 0, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 0, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', NULL, '', '2011-12-06 16:05:52', 'd277ee62acdc38a466692b46e24b07f3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53', 0),
(18, 'create', NULL, 'Demo Test', '2011-12-06', '08:00:00', 23, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 0, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', NULL, '', '2011-12-06 16:08:50', 'b0b87d2b60ba137d99f761b2544c49f3', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53', 0),
(19, 'create', NULL, 'Demo Test', '2011-12-06', '23:00:00', 23, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 0, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', NULL, '', '2011-12-06 16:08:58', '3d14c4ed8a4f31969904e0016ad7d29a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53', 0),
(20, 'create', NULL, 'Demo Test', '2011-12-27', '10:00:00', 120, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 0, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', NULL, '', '2011-12-06 16:10:58', '44b2f9487b3a9d2cfdcfc7e6a6dcea76', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53', 0),
(21, 'create', NULL, 'Test One', '2011-12-20', '10:00:00', 120, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 0, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', NULL, '', '2011-12-06 16:12:12', '1a806e856013f3a3a0ceef2e0b6ad3f4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53', 0),
(22, 'create', NULL, 'Clase Test 5', '2011-12-13', '10:00:00', 120, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 0, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', NULL, '', '2011-12-06 16:14:38', '9ffe14c6ac016f5dc3dc8d6ed91f117b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53', 0),
(23, 'create', NULL, 'Clase Test 5', '2011-12-30', '11:00:00', 120, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 0, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', NULL, '', '2011-12-06 16:15:46', '9a0b61323d5f1eb6a594b94e6d389f21', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53', 0),
(24, 'create', NULL, 'Demo Test', '2011-12-06', '05:00:00', 60, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 0, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', NULL, '', '2011-12-06 17:22:29', 'c2d0d348fb22e3cd1519d451fc3f9a6d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53', 0),
(25, 'create', NULL, 'Demo Test', '2011-12-06', '05:00:00', 60, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 0, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', NULL, '', '2011-12-06 17:32:11', 'b7718ebd64e971380997e78944733635', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53', 0),
(26, 'create', NULL, 'Demo Test', '2011-12-06', '07:00:00', 60, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 0, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', NULL, '', '2011-12-06 18:18:59', '98a4616c9c0fb880324c2a3172d8244b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53', 0),
(27, 'create', NULL, 'titulo', '2011-12-06', '05:00:00', 60, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 0, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', NULL, '', '2011-12-06 18:22:17', '3e636f99bddbd46b824507f293d913ba', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53', 0),
(28, 'create', NULL, 'titulo', '2011-12-14', '05:00:00', 60, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 0, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', NULL, '', '2011-12-06 18:23:04', 'af92ef07a5079f12d41a202dee5ad8f8', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53', 0),
(29, 'create', NULL, 'Clase Test 5', '2011-12-09', '04:00:00', 120, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 0, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', NULL, '', '2011-12-06 18:24:08', '4555c5e3cd52f19727509e20b7100980', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53', 0),
(30, 'create', NULL, 'Clase Test 2', '2011-12-10', '22:00:00', 120, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 0, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', NULL, 'Aqui va la descripcion', '2011-12-06 19:20:11', 'e167e651123cfea4b134d42a797f4512', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53', 0),
(31, 'create', NULL, 'Titulo', '2011-12-09', '10:00:00', 120, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'audio', 0, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', NULL, 'Descrpoidoa adgpoiad g', '2011-12-06 19:22:26', '6a4727b919febf1e36c5411aafba4ca1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53', 0),
(32, 'create', NULL, 'Demo Test', '2011-12-13', '08:00:00', 60, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 0, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', NULL, 'descripcion', '2011-12-06 19:23:57', 'b2dc42bac131bc3781670e07e526e99c', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53', 0),
(33, 'create', NULL, 'Demo Test', '2011-12-15', '11:00:00', 60, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 0, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', NULL, 'oiu oi uio uio uiou iou oi', '2011-12-06 19:24:51', 'e4989441f852cc7d1d7778e2151d8ef7', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53', 0),
(34, 'create', NULL, 'Test One', '2011-12-06', '11:00:00', 120, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 0, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', NULL, '', '2011-12-06 19:35:42', '80e37bc80aa1b091440fb7c98ddcdf8a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53', 0),
(35, 'create', NULL, 'Test One', '2011-12-06', '11:00:00', 120, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 0, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', NULL, '', '2011-12-06 19:35:45', '84a200aebc8190732dc427d3f88cebd0', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53', 0),
(36, 'create', NULL, 'Test One', '2011-12-06', '11:00:00', 120, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 0, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', NULL, '', '2011-12-06 19:35:47', '48cdc8fa5fe5a9346eae4056f2c92ee4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53', 0),
(37, 'create', NULL, 'Test One', '2011-12-06', '11:00:00', 120, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 0, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', NULL, '', '2011-12-06 19:35:48', 'c524d89fecb0766c7c829ae6feaed086', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53', 0),
(38, 'create', NULL, 'Test One', '2011-12-06', '11:00:00', 120, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 0, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', NULL, '', '2011-12-06 19:35:50', '77286ed3ca52f3e93b952053ea991a3a', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53', 0),
(39, 'create', NULL, 'Test One', '2011-12-06', '11:00:00', 120, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 0, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', NULL, '', '2011-12-06 19:35:51', 'ebba8679225a21c9a713ce5670c2218b', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53', 0),
(40, 'create', NULL, 'DEMO clase test', '2011-12-13', '13:00:00', 60, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 0, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', NULL, 'descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion', '2011-12-13 08:20:43', NULL, NULL, NULL, 0),
(41, 'create', NULL, 'DEMO clase test', '2011-12-13', '13:00:00', 60, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 0, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', NULL, 'descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion', '2011-12-13 08:21:23', NULL, NULL, NULL, 0),
(42, 'create', NULL, 'titulo de la clase largo largo largo largo largo largo', '2011-12-14', '04:00:00', 60, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 0, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', NULL, 'descripcion ipo io uio uio uio uio o hkjb y gih pj +oj b hvu h0 i ´jiu viu hop kpojoihiugb iu pi jpo hou gou hio jjpi hpi hjp jpi hoph op', '2011-12-13 08:32:23', NULL, NULL, NULL, 0),
(43, 'create', NULL, 'test test', '2011-12-14', '06:00:00', 60, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 0, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', NULL, 'descripcion', '2011-12-13 08:33:53', NULL, NULL, NULL, 0),
(44, 'create', NULL, 'clase test 14', '2011-12-15', '02:00:00', 60, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 0, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', NULL, '', '2011-12-13 08:35:18', NULL, NULL, NULL, 0),
(45, 'create', NULL, 'test clase 15', '2011-12-15', '05:00:00', 60, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 0, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', NULL, 'jjo   i po o ñoi oñi ñ', '2011-12-13 08:40:09', NULL, NULL, NULL, 0),
(46, 'create', NULL, 'Test Clase 18', '2011-12-15', '04:00:00', 60, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 0, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', NULL, 'jkjkj kj kj kj kj kj kj k jk', '2011-12-13 12:59:37', NULL, NULL, NULL, 0),
(47, 'create', NULL, 'Test Clase 19', '2011-12-15', '10:00:00', 60, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 0, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', NULL, 'trwtvwrtw rw wtrw rw', '2011-12-13 13:04:43', NULL, NULL, NULL, 0),
(48, 'cancel', NULL, '', '0000-00-00', '00:00:00', 0, '', '', 0, '', '', 0, '', '', '', '', '', NULL, '', '0000-00-00 00:00:00', NULL, NULL, NULL, 0),
(49, 'cancel', NULL, '', '0000-00-00', '00:00:00', 0, '', '', 0, '', '', 0, '', '', '', '', '', NULL, '', '0000-00-00 00:00:00', NULL, NULL, NULL, 0),
(50, 'cancel', NULL, '', '0000-00-00', '00:00:00', 0, '', '', 0, '', '', 0, '', '', '', '', '', NULL, '', '0000-00-00 00:00:00', NULL, NULL, NULL, 0),
(51, 'cancel', NULL, '', '0000-00-00', '00:00:00', 0, '', '', 0, '', '', 0, '', '', '', '', '', NULL, '', '2011-12-13 13:25:48', NULL, NULL, NULL, 0),
(52, 'cancel', NULL, '', '0000-00-00', '00:00:00', 0, '', '', 0, '', '', 0, '', '', '', '', '', NULL, '', '2011-12-13 13:27:46', NULL, NULL, NULL, 0),
(53, 'cancel', 721743, '', '0000-00-00', '00:00:00', 0, '', '', 0, '', '', 0, '', '', '', '', '', NULL, '', '2011-12-13 13:34:08', NULL, NULL, NULL, 0),
(54, 'cancel', 721743, '', '0000-00-00', '00:00:00', 0, '', '', 0, '', '', 0, '', '', '', '', '', NULL, '', '2011-12-13 13:51:17', NULL, NULL, NULL, 0),
(55, 'cancel', 721741, '', '0000-00-00', '00:00:00', 0, '', '', 0, '', '', 0, '', '', '', '', '', NULL, '', '2011-12-13 13:51:26', NULL, NULL, NULL, 0),
(56, 'cancel', 721742, '', '0000-00-00', '00:00:00', 0, '', '', 0, '', '', 0, '', '', '', '', '', NULL, '', '2011-12-13 13:51:30', NULL, NULL, NULL, 0),
(57, 'cancel', 721870, '', '0000-00-00', '00:00:00', 0, '', '', 0, '', '', 0, '', '', '', '', '', NULL, '', '2011-12-13 13:52:05', NULL, NULL, NULL, 0),
(58, 'cancel', 729130, '', '0000-00-00', '00:00:00', 0, '', '', 0, '', '', 0, '', '', '', '', '', NULL, '', '2011-12-13 13:52:25', NULL, NULL, NULL, 0),
(59, 'cancel', 729130, '', '0000-00-00', '00:00:00', 0, '', '', 0, '', '', 0, '', '', '', '', '', NULL, '', '2011-12-13 13:52:31', NULL, NULL, NULL, 0),
(60, 'cancel', 729132, '', '0000-00-00', '00:00:00', 0, '', '', 0, '', '', 0, '', '', '', '', '', NULL, '', '2011-12-13 13:52:36', NULL, NULL, NULL, 0),
(61, 'cancel', 729132, '', '0000-00-00', '00:00:00', 0, '', '', 0, '', '', 0, '', '', '', '', '', NULL, '', '2011-12-13 13:52:47', NULL, NULL, NULL, 0),
(62, 'cancel', 729134, '', '0000-00-00', '00:00:00', 0, '', '', 0, '', '', 0, '', '', '', '', '', NULL, '', '2011-12-13 13:52:55', NULL, NULL, NULL, 0),
(63, 'cancel', 729379, '', '0000-00-00', '00:00:00', 0, '', '', 0, '', '', 0, '', '', '', '', '', NULL, '', '2011-12-13 13:59:32', NULL, NULL, NULL, 0),
(64, 'cancel', 729144, '', '0000-00-00', '00:00:00', 0, '', '', 0, '', '', 0, '', '', '', '', '', NULL, '', '2011-12-13 14:00:09', NULL, NULL, NULL, 0),
(65, 'cancel', 721743, '', '0000-00-00', '00:00:00', 0, '', '', 0, '', '', 0, '', '', '', '', '', NULL, '', '2011-12-13 14:00:34', NULL, NULL, NULL, 0),
(66, 'cancel', 721869, '', '0000-00-00', '00:00:00', 0, '', '', 0, '', '', 0, '', '', '', '', '', NULL, '', '2011-12-13 14:00:44', NULL, NULL, NULL, 0),
(67, 'cancel', 729127, '', '0000-00-00', '00:00:00', 0, '', '', 0, '', '', 0, '', '', '', '', '', NULL, '', '2011-12-13 14:00:49', NULL, NULL, NULL, 0),
(68, 'cancel', 721743, '', '0000-00-00', '00:00:00', 0, '', '', 0, '', '', 0, '', '', '', '', '', NULL, '', '2011-12-13 14:03:55', NULL, NULL, NULL, 0),
(69, 'cancel', 721869, '', '0000-00-00', '00:00:00', 0, '', '', 0, '', '', 0, '', '', '', '', '', NULL, '', '2011-12-13 14:06:00', NULL, NULL, NULL, 0),
(70, 'cancel', 729127, '', '0000-00-00', '00:00:00', 0, '', '', 0, '', '', 0, '', '', '', '', '', NULL, '', '2011-12-13 14:06:09', NULL, NULL, NULL, 0),
(71, 'cancel', 729127, '', '0000-00-00', '00:00:00', 0, '', '', 0, '', '', 0, '', '', '', '', '', NULL, '', '2011-12-13 14:06:19', NULL, NULL, NULL, 0),
(72, 'cancel', 729127, '', '0000-00-00', '00:00:00', 0, '', '', 0, '', '', 0, '', '', '', '', '', NULL, '', '2011-12-13 14:06:44', NULL, NULL, NULL, 0),
(73, 'cancel', 729127, '', '0000-00-00', '00:00:00', 0, '', '', 0, '', '', 0, '', '', '', '', '', NULL, '', '2011-12-13 14:08:45', NULL, NULL, NULL, 0),
(74, 'cancel', 721869, '', '0000-00-00', '00:00:00', 0, '', '', 0, '', '', 0, '', '', '', '', '', NULL, '', '2011-12-13 14:08:57', NULL, NULL, NULL, 0),
(75, 'cancel', 721869, '', '0000-00-00', '00:00:00', 0, '', '', 0, '', '', 0, '', '', '', '', '', NULL, '', '2011-12-13 14:09:52', NULL, NULL, NULL, 0),
(76, 'cancel', 721741, '', '0000-00-00', '00:00:00', 0, '', '', 0, '', '', 0, '', '', '', '', '', NULL, '', '2011-12-13 14:09:57', NULL, NULL, NULL, 0),
(77, 'cancel', 721742, '', '0000-00-00', '00:00:00', 0, '', '', 0, '', '', 0, '', '', '', '', '', NULL, '', '2011-12-13 14:10:02', NULL, NULL, NULL, 0),
(78, 'cancel', 721836, '', '0000-00-00', '00:00:00', 0, '', '', 0, '', '', 0, '', '', '', '', '', NULL, '', '2011-12-13 14:10:07', NULL, NULL, NULL, 0),
(79, 'cancel', 721870, '', '0000-00-00', '00:00:00', 0, '', '', 0, '', '', 0, '', '', '', '', '', NULL, '', '2011-12-13 14:10:11', NULL, NULL, NULL, 0),
(80, 'cancel', 729132, '', '0000-00-00', '00:00:00', 0, '', '', 0, '', '', 0, '', '', '', '', '', NULL, '', '2011-12-13 14:10:27', NULL, NULL, NULL, 0),
(81, 'cancel', 729134, '', '0000-00-00', '00:00:00', 0, '', '', 0, '', '', 0, '', '', '', '', '', NULL, '', '2011-12-13 14:10:33', NULL, NULL, NULL, 0),
(82, 'cancel', 729130, '', '0000-00-00', '00:00:00', 0, '', '', 0, '', '', 0, '', '', '', '', '', NULL, '', '2011-12-13 14:10:38', NULL, NULL, NULL, 0),
(83, 'cancel', 721869, '', '0000-00-00', '00:00:00', 0, '', '', 0, '', '', 0, '', '', '', '', '', NULL, '', '2011-12-13 14:10:44', NULL, NULL, NULL, 0),
(84, 'cancel', 721869, '', '0000-00-00', '00:00:00', 0, '', '', 0, '', '', 0, '', '', '', '', '', NULL, '', '2011-12-13 14:40:25', NULL, NULL, NULL, 0),
(85, 'create', 0, 'Clase Demo 13 diciembre', '2011-12-13', '14:41:00', 10, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 0, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', NULL, 'Descripción de la clase', '2011-12-13 14:42:01', NULL, NULL, NULL, 0),
(86, 'create', 0, 'Clase Demo 13 diciembre', '2011-12-13', '14:41:00', 10, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 0, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', NULL, 'Descripción de la clase', '2011-12-13 14:42:08', NULL, NULL, NULL, 0),
(87, 'create', 0, 'Clase Demo 13 diciembre', '2011-12-13', '14:41:00', 10, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 0, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', NULL, 'Descripción de la clase', '2011-12-13 14:42:10', NULL, NULL, NULL, 0),
(88, 'create', 0, 'Clase Demo 13 diciembre', '2011-12-13', '14:41:00', 10, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 0, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', NULL, 'Descripción de la clase', '2011-12-13 14:42:11', NULL, NULL, NULL, 0),
(89, 'create', 0, 'Clase Demo 13 diciembre', '2011-12-13', '14:41:00', 10, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 0, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', NULL, 'Descripción de la clase', '2011-12-13 14:42:12', NULL, NULL, NULL, 0),
(90, 'create', 0, 'Clase Demo 13 diciembre', '2011-12-13', '14:41:00', 15, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 0, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', NULL, 'Descripción de la clase', '2011-12-13 14:42:20', NULL, NULL, NULL, 0),
(91, 'create', 0, 'Clase Demo 13 diciembre', '2011-12-13', '14:41:00', 30, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 0, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', NULL, 'Descripción de la clase', '2011-12-13 14:42:32', NULL, NULL, NULL, 0),
(92, 'create', 0, 'Clase Demo 13 diciembre', '2011-12-13', '14:41:00', 60, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 0, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', NULL, 'Descripción de la clase', '2011-12-13 14:42:48', NULL, NULL, NULL, 0),
(93, 'create', 0, 'Clase Demo 13 diciembre', '2011-12-13', '14:41:00', 60, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 0, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', NULL, 'Descripción de la clase', '2011-12-13 14:42:51', NULL, NULL, NULL, 0),
(94, 'create', 0, 'Clase Demo 13 diciembre', '2011-12-13', '14:43:00', 60, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 0, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', NULL, 'Descripción de la clase', '2011-12-13 14:43:06', NULL, NULL, NULL, 0),
(95, 'create', 0, 'Clase Demo 13 diciembre', '2011-12-13', '14:43:00', 60, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 0, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', NULL, 'Descripción de la clase', '2011-12-13 14:43:07', NULL, NULL, NULL, 0),
(96, 'create', 0, 'Clase Demo 13 diciembre', '2011-12-13', '14:43:00', 60, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 0, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', NULL, 'Descripción de la clase', '2011-12-13 14:43:30', NULL, NULL, NULL, 0),
(97, 'create', 0, 'Clase Demo 13 diciembre', '2011-12-13', '14:43:00', 60, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 0, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', NULL, 'Descripción de la clase', '2011-12-13 14:43:32', NULL, NULL, NULL, 0),
(98, 'create', 0, 'Clase Demo 13 diciembre', '2011-12-13', '14:43:00', 60, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 0, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', NULL, 'Descripción de la clase', '2011-12-13 14:43:51', NULL, NULL, NULL, 0),
(99, 'create', 0, 'Clase Demo 13 diciembre', '2011-12-13', '14:43:00', 60, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 0, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', NULL, 'Descripción de la clase', '2011-12-13 14:44:44', NULL, NULL, NULL, 0),
(100, 'create', 0, 'Clase Demo 13 diciembre', '2011-12-14', '14:43:00', 60, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 0, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', NULL, 'Descripción de la clase', '2011-12-13 14:44:46', NULL, NULL, NULL, 0),
(101, 'create', 0, 'Clase Demo 13 diciembre', '2011-12-13', '14:43:00', 60, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 0, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', NULL, 'Descripción de la clase', '2011-12-13 14:45:08', NULL, NULL, NULL, 0),
(102, 'create', 0, 'Clase Demo 13 diciembre', '2011-12-13', '14:43:00', 60, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 0, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', NULL, 'Descripción de la clase', '2011-12-13 14:45:11', NULL, NULL, NULL, 0),
(103, 'create', 0, 'Clase Demo 13 diciembre', '2011-12-13', '14:47:00', 5, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 0, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', NULL, 'Descripción de la clase', '2011-12-13 14:47:19', NULL, NULL, NULL, 0),
(104, 'cancel', 729476, '', '0000-00-00', '00:00:00', 0, '', '', 0, '', '', 0, '', '', '', '', '', NULL, '', '2011-12-13 14:49:55', NULL, NULL, NULL, 0),
(105, 'create', 0, 'Clase Test 2', '2011-12-15', '01:00:00', 10, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 0, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', NULL, '', '2011-12-13 14:50:43', NULL, NULL, NULL, 0),
(106, 'cancel', 721869, '', '0000-00-00', '00:00:00', 0, '', '', 0, '', '', 0, '', '', '', '', '', NULL, '', '2011-12-13 14:52:33', NULL, NULL, NULL, 0),
(107, 'cancel', 729476, '', '0000-00-00', '00:00:00', 0, '', '', 0, '', '', 0, '', '', '', '', '', NULL, '', '2011-12-13 14:52:55', NULL, NULL, NULL, 0),
(108, 'cancel', 721869, '', '0000-00-00', '00:00:00', 0, '', '', 0, '', '', 0, '', '', '', '', '', NULL, '', '2011-12-13 15:14:32', NULL, NULL, NULL, 0),
(109, 'cancel', 0, '', '0000-00-00', '00:00:00', 0, '', '', 0, '', '', 0, '', '', '', '', '', NULL, '', '2011-12-13 15:56:36', NULL, NULL, NULL, 0),
(110, 'cancel', 0, '', '0000-00-00', '00:00:00', 0, '', '', 0, '', '', 0, '', '', '', '', '', NULL, '', '2011-12-13 15:57:44', NULL, NULL, NULL, 0),
(111, 'cancel', 0, '', '0000-00-00', '00:00:00', 0, '', '', 0, '', '', 0, '', '', '', '', '', NULL, '', '2011-12-13 15:57:54', NULL, NULL, NULL, 0),
(112, 'cancel', 0, '', '0000-00-00', '00:00:00', 0, '', '', 0, '', '', 0, '', '', '', '', '', NULL, '', '2011-12-13 16:00:55', NULL, NULL, NULL, 0),
(113, 'cancel', 0, '', '0000-00-00', '00:00:00', 0, '', '', 0, '', '', 0, '', '', '', '', '', NULL, '', '2011-12-13 16:10:59', NULL, NULL, NULL, 0),
(114, 'cancel', 0, '', '0000-00-00', '00:00:00', 0, '', '', 0, '', '', 0, '', '', '', '', '', NULL, '', '2011-12-13 16:11:05', NULL, NULL, NULL, 0),
(115, 'cancel', 721869, '', '0000-00-00', '00:00:00', 0, '', '', 0, '', '', 0, '', '', '', '', '', NULL, '', '2011-12-13 16:14:58', NULL, NULL, NULL, 0),
(116, 'cancel', 721869, '', '0000-00-00', '00:00:00', 0, '', '', 0, '', '', 0, '', '', '', '', '', NULL, '', '2011-12-13 16:15:19', NULL, NULL, NULL, 0),
(117, 'cancel', 729476, '', '0000-00-00', '00:00:00', 0, '', '', 0, '', '', 0, '', '', '', '', '', NULL, '', '2011-12-13 16:15:27', NULL, NULL, NULL, 0),
(118, 'cancel', 729476, '', '0000-00-00', '00:00:00', 0, '', '', 0, '', '', 0, '', '', '', '', '', NULL, '', '2011-12-13 16:15:34', NULL, NULL, NULL, 0),
(119, 'cancel', 729477, '', '0000-00-00', '00:00:00', 0, '', '', 0, '', '', 0, '', '', '', '', '', NULL, '', '2011-12-13 16:15:44', NULL, NULL, NULL, 0),
(120, 'create', 0, 'Clase Test', '2011-12-13', '22:00:00', 60, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 0, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', NULL, 'descripcion lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum', '2011-12-13 16:16:39', NULL, NULL, NULL, 0),
(121, 'cancel', 721869, '', '0000-00-00', '00:00:00', 0, '', '', 0, '', '', 0, '', '', '', '', '', NULL, '', '2011-12-13 16:36:24', NULL, NULL, NULL, 0),
(122, 'cancel', 721869, '', '0000-00-00', '00:00:00', 0, '', '', 0, '', '', 0, '', '', '', '', '', NULL, '', '2011-12-13 16:36:47', NULL, NULL, NULL, 0),
(123, 'cancel', 729476, '', '0000-00-00', '00:00:00', 0, '', '', 0, '', '', 0, '', '', '', '', '', NULL, '', '2011-12-13 16:36:53', NULL, NULL, NULL, 0),
(124, 'create', 0, 'Clase Test 6', '2011-12-13', '18:00:00', 18, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 0, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', NULL, '', '2011-12-13 16:58:05', NULL, NULL, NULL, 0),
(125, 'cancel', 721869, '', '0000-00-00', '00:00:00', 0, '', '', 0, '', '', 0, '', '', '', '', '', NULL, '', '2011-12-13 17:09:25', NULL, NULL, NULL, 0),
(126, 'cancel', 729569, '', '0000-00-00', '00:00:00', 0, '', '', 0, '', '', 0, '', '', '', '', '', NULL, '', '2011-12-13 17:14:47', NULL, NULL, NULL, 0),
(127, 'cancel', 721869, '', '0000-00-00', '00:00:00', 0, '', '', 0, '', '', 0, '', '', '', '', '', NULL, '', '2011-12-13 21:39:05', NULL, NULL, NULL, 0),
(128, 'cancel', 729556, '', '0000-00-00', '00:00:00', 0, '', '', 0, '', '', 0, '', '', '', '', '', NULL, '', '2011-12-13 21:51:39', NULL, NULL, NULL, 0),
(129, 'create', 0, 'Clase Demo 20', '2011-12-15', '08:00:00', 60, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 50, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', NULL, 'Descripcion', '2011-12-13 23:33:48', NULL, NULL, NULL, 0),
(130, 'add_attendees', 730146, '', '0000-00-00', '00:00:00', 0, '', '', 0, '', '', 0, '', '', '', '', '', '<attendee_list><attendee><attendee_id><![CDATA[210]]></attendee_id><screen_name><![CDATA[Carlos Andres]]></screen_name><language_culture_name><![CDATA[es-ES]]></language_culture_name></attendee><attendee><attendee_id><![CDATA[211]]></attendee_id><screen_name><![CDATA[Juan Gimenez]]></screen_name><language_culture_name><![CDATA[es-ES]]></language_culture_name></attendee><attendee><attendee_id><![CDATA[212]]></attendee_id><screen_name><![CDATA[Jose Alberto]]></screen_name><language_culture_name><![CDATA[es-ES]]></language_culture_name></attendee><attendee><attendee_id><![CDATA[213]]></attendee_id><screen_name><![CDATA[Juan Manuel]]></screen_name><language_culture_name><![CDATA[es-ES]]></language_culture_name></attendee><attendee><attendee_id><![CDATA[214]]></attendee_id><screen_name><![CDATA[Juan Domingo]]></screen_name><language_culture_name><![CDATA[es-ES]]></language_culture_name></attendee></attendee_list>', '', '2011-12-14 08:18:22', NULL, NULL, NULL, 0),
(131, 'add_attendees', 730146, '', '0000-00-00', '00:00:00', 0, '', '', 0, '', '', 0, '', '', '', '', '', '<attendee_list><attendee><attendee_id><![CDATA[215]]></attendee_id><screen_name><![CDATA[Carlos Andres]]></screen_name><language_culture_name><![CDATA[es-ES]]></language_culture_name></attendee><attendee><attendee_id><![CDATA[216]]></attendee_id><screen_name><![CDATA[Juan Gimenez]]></screen_name><language_culture_name><![CDATA[es-ES]]></language_culture_name></attendee><attendee><attendee_id><![CDATA[217]]></attendee_id><screen_name><![CDATA[Jose Alberto]]></screen_name><language_culture_name><![CDATA[es-ES]]></language_culture_name></attendee><attendee><attendee_id><![CDATA[218]]></attendee_id><screen_name><![CDATA[Juan Manuel]]></screen_name><language_culture_name><![CDATA[es-ES]]></language_culture_name></attendee><attendee><attendee_id><![CDATA[219]]></attendee_id><screen_name><![CDATA[Juan Domingo]]></screen_name><language_culture_name><![CDATA[es-ES]]></language_culture_name></attendee></attendee_list>', '', '2011-12-14 08:22:12', NULL, NULL, NULL, 0),
(132, 'add_attendees', 730146, '', '0000-00-00', '00:00:00', 0, '', '', 0, '', '', 0, '', '', '', '', '', '<attendee_list><attendee><attendee_id><![CDATA[263]]></attendee_id><screen_name><![CDATA[Jose Alberto]]></screen_name><language_culture_name><![CDATA[es-ES]]></language_culture_name></attendee><attendee><attendee_id><![CDATA[264]]></attendee_id><screen_name><![CDATA[Carlos Andres]]></screen_name><language_culture_name><![CDATA[es-ES]]></language_culture_name></attendee><attendee><attendee_id><![CDATA[265]]></attendee_id><screen_name><![CDATA[Juan Gimenez]]></screen_name><language_culture_name><![CDATA[es-ES]]></language_culture_name></attendee><attendee><attendee_id><![CDATA[266]]></attendee_id><screen_name><![CDATA[Juan Manuel]]></screen_name><language_culture_name><![CDATA[es-ES]]></language_culture_name></attendee><attendee><attendee_id><![CDATA[267]]></attendee_id><screen_name><![CDATA[Juan Domingo]]></screen_name><language_culture_name><![CDATA[es-ES]]></language_culture_name></attendee></attendee_list>', '', '2011-12-14 08:40:50', NULL, NULL, NULL, 0),
(133, 'add_attendees', 730146, '', '0000-00-00', '00:00:00', 0, '', '', 0, '', '', 0, '', '', '', '', '', '<attendee_list><attendee><attendee_id><![CDATA[268]]></attendee_id><screen_name><![CDATA[Jose Alberto]]></screen_name><language_culture_name><![CDATA[es-ES]]></language_culture_name></attendee><attendee><attendee_id><![CDATA[269]]></attendee_id><screen_name><![CDATA[Carlos Andres]]></screen_name><language_culture_name><![CDATA[es-ES]]></language_culture_name></attendee><attendee><attendee_id><![CDATA[270]]></attendee_id><screen_name><![CDATA[Juan Gimenez]]></screen_name><language_culture_name><![CDATA[es-ES]]></language_culture_name></attendee><attendee><attendee_id><![CDATA[271]]></attendee_id><screen_name><![CDATA[Juan Manuel]]></screen_name><language_culture_name><![CDATA[es-ES]]></language_culture_name></attendee><attendee><attendee_id><![CDATA[272]]></attendee_id><screen_name><![CDATA[Juan Domingo]]></screen_name><language_culture_name><![CDATA[es-ES]]></language_culture_name></attendee></attendee_list>', '', '2011-12-14 08:44:49', NULL, NULL, NULL, 0),
(134, 'add_attendees', 730146, '', '0000-00-00', '00:00:00', 0, '', '', 0, '', '', 0, '', '', '', '', '', '<attendee_list><attendee><attendee_id><![CDATA[273]]></attendee_id><screen_name><![CDATA[Jose Alberto]]></screen_name><language_culture_name><![CDATA[es-ES]]></language_culture_name></attendee><attendee><attendee_id><![CDATA[274]]></attendee_id><screen_name><![CDATA[Carlos Andres]]></screen_name><language_culture_name><![CDATA[es-ES]]></language_culture_name></attendee><attendee><attendee_id><![CDATA[275]]></attendee_id><screen_name><![CDATA[Juan Gimenez]]></screen_name><language_culture_name><![CDATA[es-ES]]></language_culture_name></attendee><attendee><attendee_id><![CDATA[276]]></attendee_id><screen_name><![CDATA[Juan Manuel]]></screen_name><language_culture_name><![CDATA[es-ES]]></language_culture_name></attendee><attendee><attendee_id><![CDATA[277]]></attendee_id><screen_name><![CDATA[Juan Domingo]]></screen_name><language_culture_name><![CDATA[es-ES]]></language_culture_name></attendee></attendee_list>', '', '2011-12-14 08:46:30', NULL, NULL, NULL, 0),
(135, 'add_attendees', 730146, '', '0000-00-00', '00:00:00', 0, '', '', 0, '', '', 0, '', '', '', '', '', '<attendee_list><attendee><attendee_id><![CDATA[278]]></attendee_id><screen_name><![CDATA[Jose Alberto]]></screen_name><language_culture_name><![CDATA[es-ES]]></language_culture_name></attendee><attendee><attendee_id><![CDATA[279]]></attendee_id><screen_name><![CDATA[Carlos Andres]]></screen_name><language_culture_name><![CDATA[es-ES]]></language_culture_name></attendee><attendee><attendee_id><![CDATA[280]]></attendee_id><screen_name><![CDATA[Juan Gimenez]]></screen_name><language_culture_name><![CDATA[es-ES]]></language_culture_name></attendee><attendee><attendee_id><![CDATA[281]]></attendee_id><screen_name><![CDATA[Juan Manuel]]></screen_name><language_culture_name><![CDATA[es-ES]]></language_culture_name></attendee><attendee><attendee_id><![CDATA[282]]></attendee_id><screen_name><![CDATA[Juan Domingo]]></screen_name><language_culture_name><![CDATA[es-ES]]></language_culture_name></attendee></attendee_list>', '', '2011-12-14 08:48:16', NULL, NULL, NULL, 0),
(136, 'create', 0, 'Clase demo 25', '2011-12-16', '09:00:00', 60, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 50, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', '', 'Descripcion de la sala 25', '2011-12-14 11:10:26', NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `isalas_api_response`
--

CREATE TABLE IF NOT EXISTS `isalas_api_response` (
  `id_response` int(11) NOT NULL AUTO_INCREMENT,
  `id_request` int(11) DEFAULT NULL,
  `method` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL,
  `recording_url` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `presenter_email` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `presenter_url` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `attendeeTag` text COLLATE utf8_unicode_ci,
  `add_attendeeStatus` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `errorcode` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `errormsg` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `timestamp` datetime DEFAULT NULL,
  PRIMARY KEY (`id_response`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=135 ;

--
-- Volcar la base de datos para la tabla `isalas_api_response`
--

INSERT INTO `isalas_api_response` (`id_response`, `id_request`, `method`, `status`, `class_id`, `recording_url`, `presenter_email`, `presenter_url`, `attendeeTag`, `add_attendeeStatus`, `errorcode`, `errormsg`, `timestamp`) VALUES
(14, 14, 'create', 'ok', 721673, 'http://authorlive.com/aliveext/Recorded.aspx?SessionCode=k%2bNrv%2fUoV40%3d', 'info@eytech.com.ar', 'http://authorlive.com/aliveext/LoginToSession.aspx?SessionCode=xsOsua3c9xwX3hkE%2bSY9SA%3d%3d', NULL, NULL, '', '', '2011-12-06 14:45:01'),
(15, 15, 'create', 'ok', 721712, 'http://authorlive.com/aliveext/Recorded.aspx?SessionCode=BclvZwOoJmM%3d', 'info@eytech.com.ar', 'http://authorlive.com/aliveext/LoginToSession.aspx?SessionCode=9vnSEOMD4WHnSaCVi2sCIQ%3d%3d', NULL, NULL, '', '', '2011-12-06 15:29:05'),
(16, 16, '', 'fail', 0, '', '', '', NULL, NULL, '1004', 'start_time parameter cannot precede current datetime.', '2011-12-06 16:01:50'),
(17, 17, '', 'fail', 0, '', '', '', NULL, NULL, '1004', 'start_time parameter cannot precede current datetime.', '2011-12-06 16:05:53'),
(18, 18, '', 'fail', 0, '', '', '', NULL, NULL, '1004', 'start_time parameter cannot precede current datetime.', '2011-12-06 16:08:51'),
(19, 19, 'create', 'ok', 721738, 'http://authorlive.com/aliveext/Recorded.aspx?SessionCode=n1t4SebOVlU%3d', 'info@eytech.com.ar', 'http://authorlive.com/aliveext/LoginToSession.aspx?SessionCode=EzPxwFW024iTOnecsUcDRw%3d%3d', NULL, NULL, '', '', '2011-12-06 16:09:02'),
(20, 20, 'create', 'ok', 721741, 'http://authorlive.com/aliveext/Recorded.aspx?SessionCode=mrTtYfaa9nU%3d', 'info@eytech.com.ar', 'http://authorlive.com/aliveext/LoginToSession.aspx?SessionCode=MsZfds5pHQE5E4W%2fJVJfbQ%3d%3d', NULL, NULL, '', '', '2011-12-06 16:10:58'),
(21, 21, 'create', 'ok', 721742, 'http://authorlive.com/aliveext/Recorded.aspx?SessionCode=%2ffyIqd538jY%3d', 'info@eytech.com.ar', 'http://authorlive.com/aliveext/LoginToSession.aspx?SessionCode=LRaQFD18ZrL4%2fPoPMCN68g%3d%3d', NULL, NULL, '', '', '2011-12-06 16:12:13'),
(22, 22, 'create', 'ok', 721743, 'http://authorlive.com/aliveext/Recorded.aspx?SessionCode=5W1Vs15MYxw%3d', 'info@eytech.com.ar', 'http://authorlive.com/aliveext/LoginToSession.aspx?SessionCode=Q8NaHNzCh3BeXGAW%2b5m1hQ%3d%3d', NULL, NULL, '', '', '2011-12-06 16:14:39'),
(23, 23, 'create', 'ok', 721744, 'http://authorlive.com/aliveext/Recorded.aspx?SessionCode=dznDS3j%2ffSg%3d', 'info@eytech.com.ar', 'http://authorlive.com/aliveext/LoginToSession.aspx?SessionCode=MGDSQ0q9TciUNhRZNjhG3Q%3d%3d', NULL, NULL, '', '', '2011-12-06 16:15:47'),
(24, 24, '', 'fail', 0, '', '', '', NULL, NULL, '1004', 'start_time parameter cannot precede current datetime.', '2011-12-06 17:23:13'),
(25, 25, '', 'fail', 0, '', '', '', NULL, NULL, '1004', 'start_time parameter cannot precede current datetime.', '2011-12-06 17:32:15'),
(26, 26, '', 'fail', 0, '', '', '', NULL, NULL, '1004', 'start_time parameter cannot precede current datetime.', '2011-12-06 18:19:00'),
(27, 27, '', 'fail', 0, '', '', '', NULL, NULL, '1004', 'start_time parameter cannot precede current datetime.', '2011-12-06 18:22:17'),
(28, 28, 'create', 'ok', 721836, 'http://authorlive.com/aliveext/Recorded.aspx?SessionCode=UsouW0u2mho%3d', 'info@eytech.com.ar', 'http://authorlive.com/aliveext/LoginToSession.aspx?SessionCode=MdFFXiDzaRDuYQLwkCEsaA%3d%3d', NULL, NULL, '', '', '2011-12-06 18:23:05'),
(29, 29, 'create', 'ok', 721837, 'http://authorlive.com/aliveext/Recorded.aspx?SessionCode=qaUlhVUZV9I%3d', 'info@eytech.com.ar', 'http://authorlive.com/aliveext/LoginToSession.aspx?SessionCode=ItVrE0xsJycy3drwCYOGPA%3d%3d', NULL, NULL, '', '', '2011-12-06 18:24:09'),
(30, 30, 'create', 'ok', 721867, 'http://authorlive.com/aliveext/Recorded.aspx?SessionCode=%2f9JVd4x6N98%3d', 'info@eytech.com.ar', 'http://authorlive.com/aliveext/LoginToSession.aspx?SessionCode=rUTcG%2bH5Y4yl%2bZl1C66eXw%3d%3d', NULL, NULL, '', '', '2011-12-06 19:20:13'),
(31, 31, 'create', 'ok', 721868, 'http://authorlive.com/aliveext/Recorded.aspx?SessionCode=CBa%2fy54oaNc%3d', 'info@eytech.com.ar', 'http://authorlive.com/aliveext/LoginToSession.aspx?SessionCode=CqVGeA27pNcluHBzbZZhHA%3d%3d', NULL, NULL, '', '', '2011-12-06 19:22:27'),
(32, 32, 'create', 'ok', 721869, 'http://authorlive.com/aliveext/Recorded.aspx?SessionCode=dzehqn3JHzc%3d', 'info@eytech.com.ar', 'http://authorlive.com/aliveext/LoginToSession.aspx?SessionCode=Y30XsZoceVsoElVmX%2fDGGw%3d%3d', NULL, NULL, '', '', '2011-12-06 19:23:58'),
(33, 33, 'create', 'ok', 721870, 'http://authorlive.com/aliveext/Recorded.aspx?SessionCode=l%2fcuQlPVa%2fw%3d', 'info@eytech.com.ar', 'http://authorlive.com/aliveext/LoginToSession.aspx?SessionCode=q%2f5bUFfbIAccQS5hHAHO9g%3d%3d', NULL, NULL, '', '', '2011-12-06 19:24:53'),
(34, 34, '', 'fail', 0, '', '', '', NULL, NULL, '1004', 'start_time parameter cannot precede current datetime.', '2011-12-06 19:35:43'),
(35, 35, '', 'fail', 0, '', '', '', NULL, NULL, '1004', 'start_time parameter cannot precede current datetime.', '2011-12-06 19:35:46'),
(36, 36, '', 'fail', 0, '', '', '', NULL, NULL, '1004', 'start_time parameter cannot precede current datetime.', '2011-12-06 19:35:48'),
(37, 37, '', 'fail', 0, '', '', '', NULL, NULL, '1004', 'start_time parameter cannot precede current datetime.', '2011-12-06 19:35:49'),
(38, 38, '', 'fail', 0, '', '', '', NULL, NULL, '1004', 'start_time parameter cannot precede current datetime.', '2011-12-06 19:35:51'),
(39, 39, '', 'fail', 0, '', '', '', NULL, NULL, '1004', 'start_time parameter cannot precede current datetime.', '2011-12-06 19:35:52'),
(40, 40, '', 'fail', 0, '', '', '', NULL, NULL, '1000', 'There is some error while processing your request.', '2011-12-13 08:21:05'),
(41, 41, 'create', 'ok', 729127, 'http://authorlive.com/aliveext/Recorded.aspx?SessionCode=C6H0I436bZk%3d', 'info@eytech.com.ar', 'http://authorlive.com/aliveext/LoginToSession.aspx?SessionCode=J2etKB5gVsGzwVDWQBpJNQ%3d%3d', NULL, NULL, '', '', '2011-12-13 08:21:23'),
(42, 42, 'create', 'ok', 729130, 'http://authorlive.com/aliveext/Recorded.aspx?SessionCode=9tS9QQheXHo%3d', 'info@eytech.com.ar', 'http://authorlive.com/aliveext/LoginToSession.aspx?SessionCode=mJepY5inC3dVZZOdzrNVWw%3d%3d', NULL, NULL, '', '', '2011-12-13 08:32:23'),
(43, 43, 'create', 'ok', 729132, 'http://authorlive.com/aliveext/Recorded.aspx?SessionCode=1jzVbT8wvPk%3d', 'info@eytech.com.ar', 'http://authorlive.com/aliveext/LoginToSession.aspx?SessionCode=ZREgNLpo7xIuA3Nm%2bjGNvg%3d%3d', NULL, NULL, '', '', '2011-12-13 08:33:54'),
(44, 44, 'create', 'ok', 729134, 'http://authorlive.com/aliveext/Recorded.aspx?SessionCode=HIzE9aueKqs%3d', 'info@eytech.com.ar', 'http://authorlive.com/aliveext/LoginToSession.aspx?SessionCode=pu%2f6%2b617VlCKwFSMVeDnxg%3d%3d', NULL, NULL, '', '', '2011-12-13 08:35:18'),
(45, 45, 'create', 'ok', 729144, 'http://authorlive.com/aliveext/Recorded.aspx?SessionCode=Gd8OTkLVn0I%3d', 'info@eytech.com.ar', 'http://authorlive.com/aliveext/LoginToSession.aspx?SessionCode=zE%2bOxAKVUULZkSKmcHZE7A%3d%3d', NULL, NULL, '', '', '2011-12-13 08:40:10'),
(46, 46, 'create', 'ok', 729375, 'http://authorlive.com/aliveext/Recorded.aspx?SessionCode=yxLjHZifPTw%3d', 'info@eytech.com.ar', 'http://authorlive.com/aliveext/LoginToSession.aspx?SessionCode=oN7htik0bCgQc3O3rfzDXQ%3d%3d', NULL, NULL, '', '', '2011-12-13 12:59:38'),
(47, 47, 'create', 'ok', 729379, 'http://authorlive.com/aliveext/Recorded.aspx?SessionCode=BOynQwOXtBA%3d', 'info@eytech.com.ar', 'http://authorlive.com/aliveext/LoginToSession.aspx?SessionCode=ZpEbhyGEA2AVzjbJhwfp3g%3d%3d', NULL, NULL, '', '', '2011-12-13 13:04:50'),
(48, 48, 'cancel', 'ok', 0, '', '', '', NULL, NULL, '', '', NULL),
(49, 49, '', 'fail', 0, '', '', '', NULL, NULL, '1033', 'Class is already cancelled.', NULL),
(50, 50, '', 'fail', 0, '', '', '', NULL, NULL, '1033', 'Class is already cancelled.', NULL),
(51, 51, '', 'fail', 0, '', '', '', NULL, NULL, '403', 'Forbidden: The request is refused by the API.', '2011-12-13 13:25:49'),
(52, 52, '', 'fail', 0, '', '', '', NULL, NULL, '1033', 'Class is already cancelled.', '2011-12-13 13:27:46'),
(53, 53, '', 'fail', 0, '', '', '', NULL, NULL, '1036', 'Cannot cancel expired class.', '2011-12-13 13:34:08'),
(54, 54, '', 'fail', 721743, '', '', '', NULL, NULL, '1036', 'Cannot cancel expired class.', '2011-12-13 13:51:17'),
(55, 55, '', 'fail', 721741, '', '', '', NULL, NULL, '1033', 'Class is already cancelled.', '2011-12-13 13:51:26'),
(56, 56, '', 'fail', 721742, '', '', '', NULL, NULL, '1033', 'Class is already cancelled.', '2011-12-13 13:51:30'),
(57, 57, '', 'fail', 721870, '', '', '', NULL, NULL, '1033', 'Class is already cancelled.', '2011-12-13 13:52:05'),
(58, 58, 'cancel', 'ok', 729130, '', '', '', NULL, NULL, '', '', '2011-12-13 13:52:25'),
(59, 59, '', 'fail', 729130, '', '', '', NULL, NULL, '1033', 'Class is already cancelled.', '2011-12-13 13:52:31'),
(60, 60, 'cancel', 'ok', 729132, '', '', '', NULL, NULL, '', '', '2011-12-13 13:52:36'),
(61, 61, '', 'fail', 729132, '', '', '', NULL, NULL, '1033', 'Class is already cancelled.', '2011-12-13 13:52:47'),
(62, 62, 'cancel', 'ok', 729134, '', '', '', NULL, NULL, '', '', '2011-12-13 13:52:55'),
(63, 63, 'cancel', 'ok', 729379, '', '', '', NULL, NULL, '', '', '2011-12-13 13:59:32'),
(64, 64, 'cancel', 'ok', 729144, '', '', '', NULL, NULL, '', '', '2011-12-13 14:00:09'),
(65, 65, '', 'fail', 721743, '', '', '', NULL, NULL, '1036', 'Cannot cancel expired class.', '2011-12-13 14:00:34'),
(66, 66, '', 'fail', 721869, '', '', '', NULL, NULL, '1036', 'Cannot cancel expired class.', '2011-12-13 14:00:44'),
(67, 67, '', 'fail', 729127, '', '', '', NULL, NULL, '1033', 'Class is already cancelled.', '2011-12-13 14:00:49'),
(68, 68, '', 'fail', 721743, '', '', '', NULL, NULL, '1036', 'Cannot cancel expired class.', '2011-12-13 14:03:55'),
(69, 69, '', 'fail', 721869, '', '', '', NULL, NULL, '1036', 'Cannot cancel expired class.', '2011-12-13 14:06:00'),
(70, 70, '', 'fail', 729127, '', '', '', NULL, NULL, '1033', 'Class is already cancelled.', '2011-12-13 14:06:09'),
(71, 71, '', 'fail', 729127, '', '', '', NULL, NULL, '1033', 'Class is already cancelled.', '2011-12-13 14:06:19'),
(72, 72, '', 'fail', 729127, '', '', '', NULL, NULL, '1033', 'Class is already cancelled.', '2011-12-13 14:06:44'),
(73, 73, '', 'fail', 729127, '', '', '', NULL, NULL, '1033', 'Class is already cancelled.', '2011-12-13 14:08:45'),
(74, 74, '', 'fail', 721869, '', '', '', NULL, NULL, '1036', 'Cannot cancel expired class.', '2011-12-13 14:08:57'),
(75, 75, '', 'fail', 721869, '', '', '', NULL, NULL, '1036', 'Cannot cancel expired class.', '2011-12-13 14:09:52'),
(76, 76, '', 'fail', 721741, '', '', '', NULL, NULL, '1033', 'Class is already cancelled.', '2011-12-13 14:09:57'),
(77, 77, '', 'fail', 721742, '', '', '', NULL, NULL, '1033', 'Class is already cancelled.', '2011-12-13 14:10:02'),
(78, 78, '', 'fail', 721836, '', '', '', NULL, NULL, '1033', 'Class is already cancelled.', '2011-12-13 14:10:07'),
(79, 79, '', 'fail', 721870, '', '', '', NULL, NULL, '1033', 'Class is already cancelled.', '2011-12-13 14:10:11'),
(80, 80, '', 'fail', 729132, '', '', '', NULL, NULL, '1033', 'Class is already cancelled.', '2011-12-13 14:10:27'),
(81, 81, '', 'fail', 729134, '', '', '', NULL, NULL, '1033', 'Class is already cancelled.', '2011-12-13 14:10:33'),
(82, 82, '', 'fail', 729130, '', '', '', NULL, NULL, '1033', 'Class is already cancelled.', '2011-12-13 14:10:38'),
(83, 83, '', 'fail', 721869, '', '', '', NULL, NULL, '1036', 'Cannot cancel expired class.', '2011-12-13 14:10:44'),
(84, 84, '', 'fail', 721869, '', '', '', NULL, NULL, '1036', 'Cannot cancel expired class.', '2011-12-13 14:40:25'),
(85, 85, '', 'fail', 0, '', '', '', NULL, NULL, '403', 'Forbidden: The request is refused by the API.', '2011-12-13 14:42:01'),
(86, 86, '', 'fail', 0, '', '', '', NULL, NULL, '403', 'Forbidden: The request is refused by the API.', '2011-12-13 14:42:09'),
(87, 87, '', 'fail', 0, '', '', '', NULL, NULL, '403', 'Forbidden: The request is refused by the API.', '2011-12-13 14:42:10'),
(88, 88, '', 'fail', 0, '', '', '', NULL, NULL, '403', 'Forbidden: The request is refused by the API.', '2011-12-13 14:42:11'),
(89, 89, '', 'fail', 0, '', '', '', NULL, NULL, '403', 'Forbidden: The request is refused by the API.', '2011-12-13 14:42:12'),
(90, 90, '', 'fail', 0, '', '', '', NULL, NULL, '403', 'Forbidden: The request is refused by the API.', '2011-12-13 14:42:21'),
(91, 91, '', 'fail', 0, '', '', '', NULL, NULL, '403', 'Forbidden: The request is refused by the API.', '2011-12-13 14:42:33'),
(92, 92, '', 'fail', 0, '', '', '', NULL, NULL, '403', 'Forbidden: The request is refused by the API.', '2011-12-13 14:42:49'),
(93, 93, '', 'fail', 0, '', '', '', NULL, NULL, '403', 'Forbidden: The request is refused by the API.', '2011-12-13 14:42:51'),
(94, 94, '', 'fail', 0, '', '', '', NULL, NULL, '403', 'Forbidden: The request is refused by the API.', '2011-12-13 14:43:06'),
(95, 95, '', 'fail', 0, '', '', '', NULL, NULL, '403', 'Forbidden: The request is refused by the API.', '2011-12-13 14:43:08'),
(96, 96, '', 'fail', 0, '', '', '', NULL, NULL, '403', 'Forbidden: The request is refused by the API.', '2011-12-13 14:43:31'),
(97, 97, '', 'fail', 0, '', '', '', NULL, NULL, '403', 'Forbidden: The request is refused by the API.', '2011-12-13 14:43:33'),
(98, 98, '', 'fail', 0, '', '', '', NULL, NULL, '403', 'Forbidden: The request is refused by the API.', '2011-12-13 14:43:51'),
(99, 99, '', 'fail', 0, '', '', '', NULL, NULL, '403', 'Forbidden: The request is refused by the API.', '2011-12-13 14:44:44'),
(100, 100, '', 'fail', 0, '', '', '', NULL, NULL, '403', 'Forbidden: The request is refused by the API.', '2011-12-13 14:44:47'),
(101, 101, '', 'fail', 0, '', '', '', NULL, NULL, '403', 'Forbidden: The request is refused by the API.', '2011-12-13 14:45:09'),
(102, 102, '', 'fail', 0, '', '', '', NULL, NULL, '403', 'Forbidden: The request is refused by the API.', '2011-12-13 14:45:11'),
(103, 103, 'create', 'ok', 729476, 'http://authorlive.com/aliveext/Recorded.aspx?SessionCode=CD3fVCqlqzU%3d', 'info@eytech.com.ar', 'http://authorlive.com/aliveext/LoginToSession.aspx?SessionCode=QcSDpcVxT9tOO94mammj8Q%3d%3d', NULL, NULL, '', '', '2011-12-13 14:47:19'),
(104, 104, '', 'fail', 729476, '', '', '', NULL, NULL, '1035', 'Cannot cancel completed class.', '2011-12-13 14:49:55'),
(105, 105, 'create', 'ok', 729477, 'http://authorlive.com/aliveext/Recorded.aspx?SessionCode=nasCZ8NAX54%3d', 'info@eytech.com.ar', 'http://authorlive.com/aliveext/LoginToSession.aspx?SessionCode=jzWNGDA6mOW9ja7HXDQnXg%3d%3d', NULL, NULL, '', '', '2011-12-13 14:50:43'),
(106, 106, '', 'fail', 721869, '', '', '', NULL, NULL, '1036', 'Cannot cancel expired class.', '2011-12-13 14:52:33'),
(107, 107, '', 'fail', 729476, '', '', '', NULL, NULL, '1035', 'Cannot cancel completed class.', '2011-12-13 14:52:55'),
(108, 108, '', 'fail', 721869, '', '', '', NULL, NULL, '1036', 'Cannot cancel expired class.', '2011-12-13 15:14:32'),
(109, 109, '', 'fail', 0, '', '', '', NULL, NULL, '1000', 'There is some error while processing your request.', '2011-12-13 15:56:36'),
(110, 110, '', 'fail', 0, '', '', '', NULL, NULL, '1000', 'There is some error while processing your request.', '2011-12-13 15:57:44'),
(111, 111, '', 'fail', 0, '', '', '', NULL, NULL, '1000', 'There is some error while processing your request.', '2011-12-13 15:57:54'),
(112, 112, '', 'fail', 0, '', '', '', NULL, NULL, '1000', 'There is some error while processing your request.', '2011-12-13 16:00:55'),
(113, 113, '', 'fail', 0, '', '', '', NULL, NULL, '1000', 'There is some error while processing your request.', '2011-12-13 16:10:59'),
(114, 114, '', 'fail', 0, '', '', '', NULL, NULL, '1000', 'There is some error while processing your request.', '2011-12-13 16:11:05'),
(115, 115, '', 'fail', 721869, '', '', '', NULL, NULL, '1036', 'Cannot cancel expired class.', '2011-12-13 16:14:58'),
(116, 116, '', 'fail', 721869, '', '', '', NULL, NULL, '1036', 'Cannot cancel expired class.', '2011-12-13 16:15:19'),
(117, 117, '', 'fail', 729476, '', '', '', NULL, NULL, '1035', 'Cannot cancel completed class.', '2011-12-13 16:15:27'),
(118, 118, '', 'fail', 729476, '', '', '', NULL, NULL, '1035', 'Cannot cancel completed class.', '2011-12-13 16:15:34'),
(119, 119, 'cancel', 'ok', 729477, '', '', '', NULL, NULL, '', '', '2011-12-13 16:15:44'),
(120, 120, 'create', 'ok', 729556, 'http://authorlive.com/aliveext/Recorded.aspx?SessionCode=jjq5D0LMfi4%3d', 'info@eytech.com.ar', 'http://authorlive.com/aliveext/LoginToSession.aspx?SessionCode=wiwegsmpgewwqumILP1G%2bQ%3d%3d', NULL, NULL, '', '', '2011-12-13 16:16:41'),
(121, 121, '', 'fail', 721869, '', '', '', NULL, NULL, '1036', 'Cannot cancel expired class.', '2011-12-13 16:36:24'),
(122, 122, '', 'fail', 721869, '', '', '', NULL, NULL, '1036', 'Cannot cancel expired class.', '2011-12-13 16:36:47'),
(123, 123, '', 'fail', 729476, '', '', '', NULL, NULL, '1035', 'Cannot cancel completed class.', '2011-12-13 16:36:53'),
(124, 124, 'create', 'ok', 729569, 'http://authorlive.com/aliveext/Recorded.aspx?SessionCode=%2fK3Y%2bbBKkwU%3d', 'info@eytech.com.ar', 'http://authorlive.com/aliveext/LoginToSession.aspx?SessionCode=yzHy%2bhu8hNzHRCu6NRSTbw%3d%3d', NULL, NULL, '', '', '2011-12-13 16:58:06'),
(125, 125, '', 'fail', 721869, '', '', '', NULL, NULL, '1036', 'Cannot cancel expired class.', '2011-12-13 17:09:25'),
(126, 126, 'cancel', 'ok', 729569, '', '', '', NULL, NULL, '', '', '2011-12-13 17:14:47'),
(127, 127, '', 'fail', 721869, '', '', '', NULL, NULL, '1036', 'Cannot cancel expired class.', '2011-12-13 21:39:05'),
(128, 128, 'cancel', 'ok', 729556, '', '', '', NULL, NULL, '', '', '2011-12-13 21:51:39'),
(129, 129, 'create', 'ok', 730146, 'http://authorlive.com/aliveext/Recorded.aspx?SessionCode=8yavhuMQyuM%3d', 'info@eytech.com.ar', 'http://authorlive.com/aliveext/LoginToSession.aspx?SessionCode=ffZ5k9ESX1CPvcR3%2fOW5Kg%3d%3d', NULL, NULL, '', '', '2011-12-13 23:33:50'),
(130, 132, 'add_attendees', 'ok', 730146, '', '', '', '5', '', '', '', '2011-12-14 08:40:50'),
(131, 133, 'add_attendees', 'ok', 730146, '', '', '', '5', '', '', '', '2011-12-14 08:44:49'),
(132, 134, 'add_attendees', 'ok', 730146, '', '', '', '5', '', '', '', '2011-12-14 08:46:30'),
(133, 135, 'add_attendees', 'ok', 730146, '', '', '', '5', '', '', '', '2011-12-14 08:48:16'),
(134, 136, 'create', 'ok', 730584, 'http://authorlive.com/aliveext/Recorded.aspx?SessionCode=TUrZnpMND0I%3d', 'info@eytech.com.ar', 'http://authorlive.com/aliveext/LoginToSession.aspx?SessionCode=Z8l45ORXDteFcnt5gFDacQ%3d%3d', '', '', '', '', '2011-12-14 11:10:27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `isalas_attendees`
--

CREATE TABLE IF NOT EXISTS `isalas_attendees` (
  `id_attendee` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL,
  `id_response` int(11) DEFAULT NULL,
  `status` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `timestamp` timestamp NULL DEFAULT NULL,
  `attendee_url` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `language_culture_name` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `habilitado` tinyint(4) DEFAULT NULL,
  `loginpw` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_attendee`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=283 ;

--
-- Volcar la base de datos para la tabla `isalas_attendees`
--

INSERT INTO `isalas_attendees` (`id_attendee`, `nombre`, `email`, `class_id`, `id_response`, `status`, `timestamp`, `attendee_url`, `language_culture_name`, `habilitado`, `loginpw`) VALUES
(83, 'Carlos Andres', 'mail1@gmail.com', 721869, NULL, NULL, '2011-12-13 21:40:21', NULL, 'es-ES', 1, '879000'),
(88, 'Juan Gimenez', 'mail2@gmail.com', 721869, NULL, NULL, '2011-12-13 21:41:56', NULL, 'es-ES', 1, '1074A3'),
(97, 'Jose Alberto', 'mail3@gmail.com', 721869, NULL, NULL, '2011-12-13 21:45:46', NULL, 'es-ES', 1, '8D3B97'),
(98, 'Juan Manuel', 'mail4@gmail.com', 721869, NULL, NULL, '2011-12-13 21:45:46', NULL, 'es-ES', 1, '4AD341'),
(99, 'Juan Domingo', 'mail5@gmail.com', 721869, NULL, NULL, '2011-12-13 21:45:46', NULL, 'es-ES', 1, 'AC45BD'),
(200, 'Carlos Andres', 'mail1@gmail.com', 729476, NULL, NULL, '2011-12-13 23:30:44', NULL, 'es-ES', 1, '32D8B1'),
(201, 'Juan Gimenez', 'mail2@gmail.com', 729476, NULL, NULL, '2011-12-13 23:30:44', NULL, 'es-ES', 1, 'EC00B7'),
(202, 'Jose Alberto', 'mail3@gmail.com', 729476, NULL, NULL, '2011-12-13 23:30:44', NULL, 'es-ES', 1, 'A71069'),
(203, 'Juan Manuel', 'mail4@gmail.com', 729476, NULL, NULL, '2011-12-13 23:30:44', NULL, 'es-ES', 1, '14A979'),
(204, 'Juan Domingo', 'mail5@gmail.com', 729476, NULL, NULL, '2011-12-13 23:30:44', NULL, 'es-ES', 1, '207995'),
(278, 'Jose Alberto', 'mail30@gmail.com', 730146, 133, 'ok', '2011-12-14 08:48:15', 'http://authorlive.com/aliveext/LoginToSession.aspx?SessionCode=Nvpu5TMogDEF6LrkNT2n4g%3d%3d', 'es-ES', 1, 'D27AC7'),
(279, 'Carlos Andres', 'mail10@gmail.com', 730146, 133, 'ok', '2011-12-14 08:48:15', 'http://authorlive.com/aliveext/LoginToSession.aspx?SessionCode=Nvpu5TMogDFwVuWGDl%2fg4Q%3d%3d', 'es-ES', 1, '2C6EC1'),
(280, 'Juan Gimenez', 'mail20@gmail.com', 730146, 133, 'ok', '2011-12-14 08:48:15', 'http://authorlive.com/aliveext/LoginToSession.aspx?SessionCode=Nvpu5TMogDHjC3VW2xoEcA%3d%3d', 'es-ES', 1, 'A4A8C3'),
(281, 'Juan Manuel', 'mail40@gmail.com', 730146, 133, 'ok', '2011-12-14 08:48:15', 'http://authorlive.com/aliveext/LoginToSession.aspx?SessionCode=Nvpu5TMogDHc0WkMgmfTtQ%3d%3d', 'es-ES', 1, '5D15A9'),
(282, 'Juan Domingo', 'mail50@gmail.com', 730146, 133, 'ok', '2011-12-14 08:48:15', 'http://authorlive.com/aliveext/LoginToSession.aspx?SessionCode=Nvpu5TMogDEMGpVj0%2bc%2fdg%3d%3d', 'es-ES', 1, '388295');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `isalas_contactos`
--

CREATE TABLE IF NOT EXISTS `isalas_contactos` (
  `id_contactos` int(11) NOT NULL AUTO_INCREMENT,
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
  `id_user` int(11) DEFAULT NULL,
  `fecha_alta` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `fecha_edit` datetime DEFAULT NULL,
  `user_edit` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_contactos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `isalas_contactos`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `isalas_salas`
--

CREATE TABLE IF NOT EXISTS `isalas_salas` (
  `id_sala` int(11) NOT NULL AUTO_INCREMENT,
  `id_response` int(11) DEFAULT NULL,
  `titulo` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `horario` time DEFAULT NULL,
  `duracion` smallint(6) DEFAULT NULL,
  `timezone` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `presenter_email` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `presenter_id` int(11) DEFAULT NULL,
  `presenter_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `presenter_default_controls` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `attendee_limit` smallint(6) DEFAULT NULL,
  `control_category_id` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `create_recording` varchar(4) COLLATE utf8_unicode_ci DEFAULT NULL,
  `return_url` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status_ping_url` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `language_culture_name` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descripcion` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL,
  `presenter_url` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `recording_url` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `timestamp` datetime NOT NULL,
  `status` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `apiCancelResponse` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_sala`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=26 ;

--
-- Volcar la base de datos para la tabla `isalas_salas`
--

INSERT INTO `isalas_salas` (`id_sala`, `id_response`, `titulo`, `fecha`, `horario`, `duracion`, `timezone`, `presenter_email`, `presenter_id`, `presenter_name`, `presenter_default_controls`, `attendee_limit`, `control_category_id`, `create_recording`, `return_url`, `status_ping_url`, `language_culture_name`, `descripcion`, `class_id`, `presenter_url`, `recording_url`, `timestamp`, `status`, `apiCancelResponse`) VALUES
(1, 14, 'Test One', '2011-12-06', '15:00:00', 180, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 0, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', 'Descripcion', 721673, 'http://authorlive.com/aliveext/LoginToSession.aspx?SessionCode=xsOsua3c9xwX3hkE%2bSY9SA%3d%3d', 'http://authorlive.com/aliveext/Recorded.aspx?SessionCode=k%2bNrv%2fUoV40%3d', '2011-12-06 14:45:01', 'ok', 0),
(2, 15, 'Clase Test 3', '2011-12-12', '10:00:00', 120, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 0, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', 'Descript', 721712, 'http://authorlive.com/aliveext/LoginToSession.aspx?SessionCode=9vnSEOMD4WHnSaCVi2sCIQ%3d%3d', 'http://authorlive.com/aliveext/Recorded.aspx?SessionCode=BclvZwOoJmM%3d', '2011-12-06 15:29:05', 'ok', 0),
(3, 19, 'Demo Test', '2011-12-06', '23:00:00', 23, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 0, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', 'Descripción de la sala Descripción de la sala Descripción de la sala Descripción de la sala Descripción de la sala Descripción de la sala Descripción de la sala Descripción de la sala Descripción de la sala Descripción de la sala Descripción de la sala Descripción de la sala Descripción de la sala Descripción de la sala Descripción de la sala Descripción de la sala Descripción de la sala Descripción de la sala Descripción de la sala Descripción de la sala ', 721738, 'http://authorlive.com/aliveext/LoginToSession.aspx?SessionCode=EzPxwFW024iTOnecsUcDRw%3d%3d', 'http://authorlive.com/aliveext/Recorded.aspx?SessionCode=n1t4SebOVlU%3d', '2011-12-06 16:09:02', 'ok', 0),
(4, 20, 'Demo Test', '2011-12-27', '10:00:00', 120, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 0, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', '', 721741, 'http://authorlive.com/aliveext/LoginToSession.aspx?SessionCode=MsZfds5pHQE5E4W%2fJVJfbQ%3d%3d', 'http://authorlive.com/aliveext/Recorded.aspx?SessionCode=mrTtYfaa9nU%3d', '2011-12-06 16:10:58', 'deleted', 76),
(5, 21, 'Test One', '2011-12-20', '10:00:00', 120, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 0, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', '', 721742, 'http://authorlive.com/aliveext/LoginToSession.aspx?SessionCode=LRaQFD18ZrL4%2fPoPMCN68g%3d%3d', 'http://authorlive.com/aliveext/Recorded.aspx?SessionCode=%2ffyIqd538jY%3d', '2011-12-06 16:12:13', 'deleted', 77),
(6, 22, 'Clase Test 5', '2011-12-13', '10:00:00', 120, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 0, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', '', 721743, 'http://authorlive.com/aliveext/LoginToSession.aspx?SessionCode=Q8NaHNzCh3BeXGAW%2b5m1hQ%3d%3d', 'http://authorlive.com/aliveext/Recorded.aspx?SessionCode=5W1Vs15MYxw%3d', '2011-12-06 16:14:39', 'deleted', 68),
(7, 23, 'Clase Test 5', '2011-12-30', '11:00:00', 120, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 0, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', '', 721744, 'http://authorlive.com/aliveext/LoginToSession.aspx?SessionCode=MGDSQ0q9TciUNhRZNjhG3Q%3d%3d', 'http://authorlive.com/aliveext/Recorded.aspx?SessionCode=dznDS3j%2ffSg%3d', '2011-12-06 16:15:47', 'deleted', 0),
(8, 28, 'titulo', '2011-12-14', '05:00:00', 60, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 0, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', '', 721836, 'http://authorlive.com/aliveext/LoginToSession.aspx?SessionCode=MdFFXiDzaRDuYQLwkCEsaA%3d%3d', 'http://authorlive.com/aliveext/Recorded.aspx?SessionCode=UsouW0u2mho%3d', '2011-12-06 18:23:05', 'deleted', 78),
(9, 29, 'Clase Test 5', '2011-12-09', '04:00:00', 120, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 0, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', '', 721837, 'http://authorlive.com/aliveext/LoginToSession.aspx?SessionCode=ItVrE0xsJycy3drwCYOGPA%3d%3d', 'http://authorlive.com/aliveext/Recorded.aspx?SessionCode=qaUlhVUZV9I%3d', '2011-12-06 18:24:09', 'ok', 0),
(10, 30, 'Clase Test 2', '2011-12-10', '22:00:00', 120, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 0, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', 'Aqui va la descripcion', 721867, 'http://authorlive.com/aliveext/LoginToSession.aspx?SessionCode=rUTcG%2bH5Y4yl%2bZl1C66eXw%3d%3d', 'http://authorlive.com/aliveext/Recorded.aspx?SessionCode=%2f9JVd4x6N98%3d', '2011-12-06 19:20:13', 'ok', 0),
(11, 31, 'Titulo', '2011-12-09', '10:00:00', 120, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'audio', 0, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', 'Descrpoidoa adgpoiad g', 721868, 'http://authorlive.com/aliveext/LoginToSession.aspx?SessionCode=CqVGeA27pNcluHBzbZZhHA%3d%3d', 'http://authorlive.com/aliveext/Recorded.aspx?SessionCode=CBa%2fy54oaNc%3d', '2011-12-06 19:22:27', 'ok', 0),
(12, 32, 'Demo Test', '2011-12-13', '08:00:00', 60, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 0, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', 'descripcion', 721869, 'http://authorlive.com/aliveext/LoginToSession.aspx?SessionCode=Y30XsZoceVsoElVmX%2fDGGw%3d%3d', 'http://authorlive.com/aliveext/Recorded.aspx?SessionCode=dzehqn3JHzc%3d', '2011-12-06 19:23:58', 'ok', 0),
(13, 33, 'Demo Test', '2011-12-15', '11:00:00', 60, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 0, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', 'oiu oi uio uio uiou iou oi', 721870, 'http://authorlive.com/aliveext/LoginToSession.aspx?SessionCode=q%2f5bUFfbIAccQS5hHAHO9g%3d%3d', 'http://authorlive.com/aliveext/Recorded.aspx?SessionCode=l%2fcuQlPVa%2fw%3d', '2011-12-06 19:24:53', 'deleted', 79),
(14, 41, 'DEMO clase test', '2011-12-13', '13:00:00', 60, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 0, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', 'descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion descripcion', 729127, 'http://authorlive.com/aliveext/LoginToSession.aspx?SessionCode=J2etKB5gVsGzwVDWQBpJNQ%3d%3d', 'http://authorlive.com/aliveext/Recorded.aspx?SessionCode=C6H0I436bZk%3d', '2011-12-13 08:21:23', 'deleted', 73),
(15, 42, 'titulo de la clase largo largo largo largo largo largo', '2011-12-14', '04:00:00', 60, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 0, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', 'descripcion ipo io uio uio uio uio o hkjb y gih pj +oj b hvu h0 i ´jiu viu hop kpojoihiugb iu pi jpo hou gou hio jjpi hpi hjp jpi hoph op', 729130, 'http://authorlive.com/aliveext/LoginToSession.aspx?SessionCode=mJepY5inC3dVZZOdzrNVWw%3d%3d', 'http://authorlive.com/aliveext/Recorded.aspx?SessionCode=9tS9QQheXHo%3d', '2011-12-13 08:32:23', 'deleted', 82),
(16, 43, 'test test', '2011-12-14', '06:00:00', 60, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 0, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', 'descripcion', 729132, 'http://authorlive.com/aliveext/LoginToSession.aspx?SessionCode=ZREgNLpo7xIuA3Nm%2bjGNvg%3d%3d', 'http://authorlive.com/aliveext/Recorded.aspx?SessionCode=1jzVbT8wvPk%3d', '2011-12-13 08:33:54', 'deleted', 80),
(17, 44, 'clase test 14', '2011-12-15', '02:00:00', 60, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 0, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', '', 729134, 'http://authorlive.com/aliveext/LoginToSession.aspx?SessionCode=pu%2f6%2b617VlCKwFSMVeDnxg%3d%3d', 'http://authorlive.com/aliveext/Recorded.aspx?SessionCode=HIzE9aueKqs%3d', '2011-12-13 08:35:18', 'deleted', 81),
(18, 45, 'test clase 15', '2011-12-15', '05:00:00', 60, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 0, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', 'jjo   i po o ñoi oñi ñ', 729144, 'http://authorlive.com/aliveext/LoginToSession.aspx?SessionCode=zE%2bOxAKVUULZkSKmcHZE7A%3d%3d', 'http://authorlive.com/aliveext/Recorded.aspx?SessionCode=Gd8OTkLVn0I%3d', '2011-12-13 08:40:10', 'deleted', 64),
(19, 47, 'Test Clase 19', '2011-12-15', '10:00:00', 60, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 0, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', 'trwtvwrtw rw wtrw rw', 729379, 'http://authorlive.com/aliveext/LoginToSession.aspx?SessionCode=ZpEbhyGEA2AVzjbJhwfp3g%3d%3d', 'http://authorlive.com/aliveext/Recorded.aspx?SessionCode=BOynQwOXtBA%3d', '2011-12-13 13:04:50', 'deleted', 63),
(20, 103, 'Clase Demo 13 diciembre', '2011-12-13', '14:47:00', 5, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 0, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', 'Descripción de la clase', 729476, 'http://authorlive.com/aliveext/LoginToSession.aspx?SessionCode=QcSDpcVxT9tOO94mammj8Q%3d%3d', 'http://authorlive.com/aliveext/Recorded.aspx?SessionCode=CD3fVCqlqzU%3d', '2011-12-13 14:47:19', 'ok', NULL),
(21, 105, 'Clase Test 2', '2011-12-15', '01:00:00', 10, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 0, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', '', 729477, 'http://authorlive.com/aliveext/LoginToSession.aspx?SessionCode=jzWNGDA6mOW9ja7HXDQnXg%3d%3d', 'http://authorlive.com/aliveext/Recorded.aspx?SessionCode=nasCZ8NAX54%3d', '2011-12-13 14:50:44', 'deleted', 119),
(22, 120, 'Clase Test', '2011-12-13', '22:00:00', 60, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 0, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', 'descripcion lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum', 729556, 'http://authorlive.com/aliveext/LoginToSession.aspx?SessionCode=wiwegsmpgewwqumILP1G%2bQ%3d%3d', 'http://authorlive.com/aliveext/Recorded.aspx?SessionCode=jjq5D0LMfi4%3d', '2011-12-13 16:16:41', 'deleted', 128),
(23, 124, 'Clase Test 6', '2011-12-13', '18:00:00', 18, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 0, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', '', 729569, 'http://authorlive.com/aliveext/LoginToSession.aspx?SessionCode=yzHy%2bhu8hNzHRCu6NRSTbw%3d%3d', 'http://authorlive.com/aliveext/Recorded.aspx?SessionCode=%2fK3Y%2bbBKkwU%3d', '2011-12-13 16:58:06', 'deleted', 126),
(24, 129, 'Clase Demo 20', '2011-12-15', '08:00:00', 60, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 50, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', 'Descripcion', 730146, 'http://authorlive.com/aliveext/LoginToSession.aspx?SessionCode=ffZ5k9ESX1CPvcR3%2fOW5Kg%3d%3d', 'http://authorlive.com/aliveext/Recorded.aspx?SessionCode=8yavhuMQyuM%3d', '2011-12-13 23:33:50', 'ok', NULL),
(25, 134, 'Clase demo 25', '2011-12-16', '09:00:00', 60, 'America/Argentina/Buenos_Aires', 'info@eytech.com.ar', 0, '', 'video', 50, '', '', 'http://demo.isalas.com.ar', '', 'es-ES', 'Descripcion de la sala 25', 730584, 'http://authorlive.com/aliveext/LoginToSession.aspx?SessionCode=Z8l45ORXDteFcnt5gFDacQ%3d%3d', 'http://authorlive.com/aliveext/Recorded.aspx?SessionCode=TUrZnpMND0I%3d', '2011-12-14 11:10:27', 'ok', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `isalas_sessions`
--

CREATE TABLE IF NOT EXISTS `isalas_sessions` (
  `session_id` varchar(40) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `ip_address` varchar(16) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `user_agent` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcar la base de datos para la tabla `isalas_sessions`
--

INSERT INTO `isalas_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('0a41d0bdaf97f18411f0a5f0e700b417', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/535.2 (KHTML, like Gecko) Chrome/15.0.874.121 Safari/535.2', 1323236138, ''),
('22e9a10715708f7b243b35ae53346a92', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/535.2 (KHTML, like Gecko) Chrome/15.0.874.121 Safari/535.2', 1323236151, ''),
('9e5df392a3bcad2128313b19d8ea325d', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/535.2 (KHTML, like Gecko) Chrome/15.0.874.121 Safari/535.2', 1323236147, ''),
('aba220bd7a6537f86458c22ac3daf996', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/535.2 (KHTML, like Gecko) Chrome/15.0.874.121 Safari/535.2', 1323236148, '');
