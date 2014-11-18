-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 19-11-2014 a las 00:44:11
-- Versión del servidor: 5.5.40-0ubuntu0.14.04.1
-- Versión de PHP: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `diagnosticosoft_bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `AuthAssignment`
--

CREATE TABLE IF NOT EXISTS `AuthAssignment` (
  `itemname` varchar(64) COLLATE utf8_spanish_ci NOT NULL,
  `userid` varchar(64) COLLATE utf8_spanish_ci NOT NULL,
  `bizrule` text COLLATE utf8_spanish_ci,
  `data` text COLLATE utf8_spanish_ci,
  PRIMARY KEY (`itemname`,`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `AuthAssignment`
--

INSERT INTO `AuthAssignment` (`itemname`, `userid`, `bizrule`, `data`) VALUES
('superadmin', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `authitem`
--

CREATE TABLE IF NOT EXISTS `authitem` (
  `name` varchar(64) COLLATE utf8_spanish_ci NOT NULL,
  `type` int(11) NOT NULL,
  `description` text COLLATE utf8_spanish_ci,
  `bizrule` text COLLATE utf8_spanish_ci,
  `data` text COLLATE utf8_spanish_ci,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `authitem`
--

INSERT INTO `authitem` (`name`, `type`, `description`, `bizrule`, `data`) VALUES
('admin', 2, 'Rol Administrador', NULL, NULL),
('superadmin', 2, 'Usuario Dios', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `authitemchild`
--

CREATE TABLE IF NOT EXISTS `authitemchild` (
  `parent` varchar(64) COLLATE utf8_spanish_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `authitemchild`
--

INSERT INTO `authitemchild` (`parent`, `child`) VALUES
('superadmin', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `om_centros`
--

CREATE TABLE IF NOT EXISTS `om_centros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(128) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(256) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `movil` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `email` varchar(128) COLLATE utf8_spanish_ci DEFAULT NULL,
  `mapa` text COLLATE utf8_spanish_ci,
  `poblacion` varchar(128) COLLATE utf8_spanish_ci DEFAULT NULL,
  `codigopostal` varchar(128) COLLATE utf8_spanish_ci DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL COMMENT 'Propietario del centro',
  PRIMARY KEY (`id`),
  KEY `id_usuario` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `om_medidasusuarios`
--

CREATE TABLE IF NOT EXISTS `om_medidasusuarios` (
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `valor` float NOT NULL,
  `id_zona` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `observaciones` text COLLATE utf8_spanish_ci,
  PRIMARY KEY (`id`),
  KEY `id_usuario` (`id_usuario`),
  KEY `id_zona` (`id_zona`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `om_observaciones`
--

CREATE TABLE IF NOT EXISTS `om_observaciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `motivo` varchar(128) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tratamientosAnteriores` text COLLATE utf8_spanish_ci,
  `variacionesPeso` text COLLATE utf8_spanish_ci,
  `pesoMax` float DEFAULT NULL,
  `pesoMin` float DEFAULT NULL,
  `pesoIdeal` float DEFAULT NULL,
  `tallaActual` float DEFAULT NULL,
  `tallaDeseada` float DEFAULT NULL,
  `tensionMax` int(11) DEFAULT NULL,
  `tensionMin` int(11) DEFAULT NULL,
  `enfermedades` text COLLATE utf8_spanish_ci,
  `alergias` text COLLATE utf8_spanish_ci,
  `terapias` text COLLATE utf8_spanish_ci,
  `menstruaciones` text COLLATE utf8_spanish_ci,
  `embarazos` tinyint(1) NOT NULL DEFAULT '0',
  `partos` tinyint(1) NOT NULL DEFAULT '0',
  `abortos` tinyint(1) NOT NULL DEFAULT '0',
  `metodoAnticonceptivo` text COLLATE utf8_spanish_ci,
  `diuresis` text COLLATE utf8_spanish_ci,
  `suenyo` text COLLATE utf8_spanish_ci,
  `ritmoIntestinal` text COLLATE utf8_spanish_ci,
  `actividadFisica` text COLLATE utf8_spanish_ci,
  `digestiones` varchar(128) COLLATE utf8_spanish_ci DEFAULT NULL,
  `pesadezPiernas` text COLLATE utf8_spanish_ci,
  `dolor` text COLLATE utf8_spanish_ci,
  `calambres` tinyint(1) NOT NULL DEFAULT '0',
  `piesFrios` tinyint(1) NOT NULL DEFAULT '0',
  `manosFrias` tinyint(1) NOT NULL DEFAULT '0',
  `id_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_usuario` (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `om_observaciones`
--

INSERT INTO `om_observaciones` (`id`, `motivo`, `tratamientosAnteriores`, `variacionesPeso`, `pesoMax`, `pesoMin`, `pesoIdeal`, `tallaActual`, `tallaDeseada`, `tensionMax`, `tensionMin`, `enfermedades`, `alergias`, `terapias`, `menstruaciones`, `embarazos`, `partos`, `abortos`, `metodoAnticonceptivo`, `diuresis`, `suenyo`, `ritmoIntestinal`, `actividadFisica`, `digestiones`, `pesadezPiernas`, `dolor`, `calambres`, `piesFrios`, `manosFrias`, `id_usuario`) VALUES
(1, 'Ninguno en especial', 'No', 'Nada que destacar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', 0, 0, 0, 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `om_pesos`
--

CREATE TABLE IF NOT EXISTS `om_pesos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `peso` float NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `observaciones` text COLLATE utf8_spanish_ci NOT NULL,
  `id_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_usuario` (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `om_pesos`
--

INSERT INTO `om_pesos` (`id`, `peso`, `fecha`, `observaciones`, `id_usuario`) VALUES
(1, 65, '2014-11-17 23:00:00', '', 15),
(7, 63.2, '2014-11-18 23:00:00', '', 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `om_profiles`
--

CREATE TABLE IF NOT EXISTS `om_profiles` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `lastname` varchar(50) NOT NULL DEFAULT '',
  `firstname` varchar(50) NOT NULL DEFAULT '',
  `direccion` varchar(255) NOT NULL DEFAULT '',
  `poblacion` varchar(255) NOT NULL DEFAULT '',
  `provincia` varchar(255) NOT NULL DEFAULT '',
  `codigo_postal` varchar(10) NOT NULL DEFAULT '',
  `telefono` varchar(20) NOT NULL DEFAULT '',
  `movil` varchar(20) NOT NULL DEFAULT '',
  `rol` int(11) NOT NULL DEFAULT '3',
  `id_padre` int(11) DEFAULT NULL,
  `pdf` varchar(255) DEFAULT NULL,
  `cuentabancaria` varchar(30) NOT NULL DEFAULT '',
  `morfologia` varchar(128) NOT NULL DEFAULT '',
  `fechanacimiento` date NOT NULL DEFAULT '0000-00-00',
  `altura` float NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`),
  KEY `rol` (`rol`),
  KEY `id_padre` (`id_padre`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Volcado de datos para la tabla `om_profiles`
--

INSERT INTO `om_profiles` (`user_id`, `lastname`, `firstname`, `direccion`, `poblacion`, `provincia`, `codigo_postal`, `telefono`, `movil`, `rol`, `id_padre`, `pdf`, `cuentabancaria`, `morfologia`, `fechanacimiento`, `altura`) VALUES
(1, 'Admin', 'Administrator', '', '', '', '', '', '', 1, 1, '', '', '', '0000-00-00', 0),
(8, 'Langa Roy', 'Hugo', 'adas', 'asaass', 'aaaa', '50897', '676555555', '', 4, 1, '', '', '', '0000-00-00', 0),
(15, 'Murillo', 'Laura', 'c/san frontonio,1', 'Épila', 'Zaragoza', '50290', '976817131', '636602253', 5, 8, NULL, '', '', '0000-00-00', 0),
(16, 'Langa Roy', 'Elea', 'c/san frontonio,1', 'Épila', 'Zaragoza', '50290', '677587477', '', 5, 8, NULL, '', '', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `om_profiles_fields`
--

CREATE TABLE IF NOT EXISTS `om_profiles_fields` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `varname` varchar(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `field_type` varchar(50) NOT NULL,
  `field_size` varchar(15) NOT NULL DEFAULT '0',
  `field_size_min` varchar(15) NOT NULL DEFAULT '0',
  `required` int(1) NOT NULL DEFAULT '0',
  `match` varchar(255) NOT NULL DEFAULT '',
  `range` varchar(255) NOT NULL DEFAULT '',
  `error_message` varchar(255) NOT NULL DEFAULT '',
  `other_validator` varchar(5000) NOT NULL DEFAULT '',
  `default` varchar(255) NOT NULL DEFAULT '',
  `widget` varchar(255) NOT NULL DEFAULT '',
  `widgetparams` varchar(5000) NOT NULL DEFAULT '',
  `position` int(3) NOT NULL DEFAULT '0',
  `visible` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `varname` (`varname`,`widget`,`visible`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Volcado de datos para la tabla `om_profiles_fields`
--

INSERT INTO `om_profiles_fields` (`id`, `varname`, `title`, `field_type`, `field_size`, `field_size_min`, `required`, `match`, `range`, `error_message`, `other_validator`, `default`, `widget`, `widgetparams`, `position`, `visible`) VALUES
(1, 'lastname', 'Last Name', 'VARCHAR', '50', '3', 1, '', '', 'Incorrect Last Name (length between 3 and 50 characters).', '', '', '', '', 2, 3),
(2, 'firstname', 'Nombre', 'VARCHAR', '50', '3', 1, '', '', 'Campo Nombre incorrecto', '', '', '', '', 1, 3),
(3, 'direccion', 'Dirección', 'VARCHAR', '255', '0', 1, '', '', '', '', '', '', '', 3, 2),
(4, 'poblacion', 'Población', 'VARCHAR', '255', '0', 1, '', '', '', '', '', '', '', 4, 2),
(5, 'provincia', 'Provincia', 'VARCHAR', '255', '0', 1, '', '', '', '', '', '', '', 5, 2),
(6, 'codigo_postal', 'Código Postal', 'VARCHAR', '10', '0', 1, '', '', '', '', '', '', '', 6, 2),
(8, 'telefono', 'Teléfono', 'VARCHAR', '20', '0', 1, '/^[A-Za-z0-9\\s,]+$/u', '', 'Campo Teléfono no válido', '', '', '', '', 7, 2),
(9, 'movil', 'Teléfono Móvil', 'VARCHAR', '20', '0', 0, '', '', 'Campo Teléfono Móvil no válido', '', '', '', '', 8, 2),
(10, 'id_padre', 'Padre', 'INTEGER', '11', '1', 0, '', '', 'El padre es incorrecto', '', '1', '', '', 0, 0),
(12, 'pdf', 'Pdf', 'VARCHAR', '255', '0', 0, '', '', '', '{"file":{"types":"jpg, gif, png, pdf"}}', '', '', '', 10, 0),
(13, 'cuentabancaria', 'Cuenta Bancaria', 'VARCHAR', '30', '20', 3, '', '', 'Cuenta Bancaria no válida', '', '', '', '', 9, 0),
(15, 'morfologia', 'Morfología', 'VARCHAR', '128', '0', 0, '', '', 'La morfología no es correcta', '', '', '', '', 14, 2),
(16, 'fechanacimiento', 'Fecha de nacimiento', 'DATE', '0', '0', 0, '', '', 'Fecha de nacimiento incorrecta', '', '0000-00-00', 'UWjuidate', '', 12, 2),
(17, 'altura', 'Altura', 'FLOAT', '10.2', '0', 0, '', '', 'Altura incorrecta', '', '0.00', '', '', 13, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `om_roles`
--

CREATE TABLE IF NOT EXISTS `om_roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(256) COLLATE utf8_spanish_ci NOT NULL,
  `activado` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `om_roles`
--

INSERT INTO `om_roles` (`id`, `nombre`, `activado`) VALUES
(1, 'superadmin', 1),
(2, 'administrador', 1),
(3, 'secretario', 1),
(4, 'trabajador', 1),
(5, 'cliente', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `om_tests`
--

CREATE TABLE IF NOT EXISTS `om_tests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pregunta` varchar(256) COLLATE utf8_spanish_ci NOT NULL,
  `respuestasanguinea` varchar(256) COLLATE utf8_spanish_ci NOT NULL,
  `respuestalinfatica` varchar(256) COLLATE utf8_spanish_ci NOT NULL,
  `respuestabiliosa` varchar(256) COLLATE utf8_spanish_ci NOT NULL,
  `respuestanerviosa` varchar(256) COLLATE utf8_spanish_ci NOT NULL,
  `observaciones` text COLLATE utf8_spanish_ci NOT NULL,
  `activado` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `om_tests`
--

INSERT INTO `om_tests` (`id`, `pregunta`, `respuestasanguinea`, `respuestalinfatica`, `respuestabiliosa`, `respuestanerviosa`, `observaciones`, `activado`) VALUES
(1, 'Formas corporales', 'Corpulentas redondeadas', 'Robustas', 'Aspecto armonioso', 'Esbeltas delgadas', '', 1),
(2, 'Musculatura', 'Escondida por espesamientos', 'Consistente, firme, redondeada', 'Aparente, bien dibujada, evidente', 'Huidiza y poco desarrollada', '', 1),
(3, 'Color de pelo', 'Rubio claro', 'Castaño claro', 'Moreno, negro', 'Castaño', '', 1),
(4, 'Cabellera', 'Lisa', 'Lisa tendencia ondulada', 'Ondulada o lisa', 'Árida y encrespada', '', 1),
(5, 'Forma de la cara', 'Redonda', 'Oval, exagonal', 'Cuadrada, rectangular', 'Triangular', '', 1),
(6, 'Color de ojos', 'Grises apagados', 'Azules', 'Oscuros', 'Verdes', '', 1),
(7, 'Labios', 'Espesos, blandos, caídos, corte ancho', 'Espesos, rosados, corte ancho', 'Finos, estrechos, corte ancho', 'Finos, estrechos, corte estrecho', '', 1),
(8, 'Color de la piel', 'Blanco opaco', 'Rosado rojo', 'Amarillo ocre', 'Amarillo pálido', '', 1),
(9, 'Contacto de la piel', 'Frío húmedo', 'Cálido húmedo', 'Cálido seco y graso', 'Frío seco', '', 1),
(10, 'Hombros', 'Estrechos caídos', 'Anchos ligeramente caídos', 'Anchos rectilíneos', 'Estrechos diminutos', '', 1),
(11, 'Torax', 'Ancho, corto, cintura muy ancha', 'Voluminoso, cintura ancha', 'Bien representado, cintura estrecha', 'Estrecho, largo, cintura normal', '', 1),
(12, 'Seno', 'Desarrollado, relajado', 'Redondo, bien desarrollado', 'Bien moldeado, forma de pera', 'Pequeño, poco desarrollado', '', 1),
(13, 'Pelvis', 'Voluminosa e hinchada', 'Ancha y gruesa', 'Estrecha, bien moldeada', 'Estrecha, delgada, descarnada', '', 1),
(14, 'Piernas', 'Voluminosas, hinchadas', 'Bien desarrolladas, muslos voluminosos', 'Esbeltas, moldeadas', 'Largas, delgadas, descarnadas', '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `om_users`
--

CREATE TABLE IF NOT EXISTS `om_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `activkey` varchar(128) NOT NULL DEFAULT '',
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastvisit_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `superuser` int(1) NOT NULL DEFAULT '0',
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  KEY `status` (`status`),
  KEY `superuser` (`superuser`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Volcado de datos para la tabla `om_users`
--

INSERT INTO `om_users` (`id`, `username`, `password`, `email`, `activkey`, `create_at`, `lastvisit_at`, `superuser`, `status`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'webmaster@example.com', '9a24eff8c15a6a141ece27eb6947da0f', '2014-10-02 21:06:21', '2014-11-13 22:26:13', 1, 1),
(8, 'hugo', 'ae4d176ebaa6d584a7450f02e8415dd3', 'hlanga@hlanga.es', '6895e3ea807e735a354e442200d92af7', '2014-10-20 10:47:04', '2014-11-18 22:42:15', 0, 1),
(15, 'lmurillo', 'b65a61f1f7960b00603cb4453a1590eb', 'lugardelaura@gmail.com', '2458d3d6a68dd2435344301f1c14e11c', '2014-11-13 22:08:19', '0000-00-00 00:00:00', 0, 0),
(16, 'elealanga', '775d9c7f3672b4e2f41fe5d2aeb1c319', 'eleazgz@hotmail.com', '5cb5aedcf544ea48534d87ea971d7509', '2014-11-18 16:38:07', '0000-00-00 00:00:00', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `om_zonas`
--

CREATE TABLE IF NOT EXISTS `om_zonas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(128) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `om_zonas`
--

INSERT INTO `om_zonas` (`id`, `nombre`, `descripcion`) VALUES
(1, 'Hombros', ''),
(2, 'Pecho', ''),
(3, 'Cintura', ''),
(4, 'Cadera', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rights`
--

CREATE TABLE IF NOT EXISTS `rights` (
  `itemname` varchar(64) COLLATE utf8_spanish_ci NOT NULL,
  `type` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  PRIMARY KEY (`itemname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `rights`
--

INSERT INTO `rights` (`itemname`, `type`, `weight`) VALUES
('superadmin', 2, 1);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `AuthAssignment`
--
ALTER TABLE `AuthAssignment`
  ADD CONSTRAINT `AuthAssignment_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `authitemchild`
--
ALTER TABLE `authitemchild`
  ADD CONSTRAINT `AuthItemChild_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `AuthItemChild_ibfk_2` FOREIGN KEY (`child`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `om_centros`
--
ALTER TABLE `om_centros`
  ADD CONSTRAINT `om_centros_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `om_users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `om_medidasusuarios`
--
ALTER TABLE `om_medidasusuarios`
  ADD CONSTRAINT `om_medidasusuarios_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `om_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `om_medidasusuarios_ibfk_2` FOREIGN KEY (`id_zona`) REFERENCES `om_zonas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `om_observaciones`
--
ALTER TABLE `om_observaciones`
  ADD CONSTRAINT `om_observaciones_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `om_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `om_pesos`
--
ALTER TABLE `om_pesos`
  ADD CONSTRAINT `om_pesos_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `om_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `om_profiles`
--
ALTER TABLE `om_profiles`
  ADD CONSTRAINT `om_profiles_ibfk_1` FOREIGN KEY (`rol`) REFERENCES `om_roles` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `om_profiles_ibfk_2` FOREIGN KEY (`id_padre`) REFERENCES `om_users` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `om_profiles_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `om_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `rights`
--
ALTER TABLE `rights`
  ADD CONSTRAINT `Rights_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
