-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 19-01-2015 a las 13:56:51
-- Versión del servidor: 5.6.15-log
-- Versión de PHP: 5.2.17

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
-- Estructura de tabla para la tabla `authassignment`
--

CREATE TABLE IF NOT EXISTS `authassignment` (
  `itemname` varchar(64) COLLATE utf8_spanish_ci NOT NULL,
  `userid` varchar(64) COLLATE utf8_spanish_ci NOT NULL,
  `bizrule` text COLLATE utf8_spanish_ci,
  `data` text COLLATE utf8_spanish_ci,
  PRIMARY KEY (`itemname`,`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `authassignment`
--

INSERT INTO `authassignment` (`itemname`, `userid`, `bizrule`, `data`) VALUES
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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `valor` float NOT NULL,
  `id_zona` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `observaciones` text COLLATE utf8_spanish_ci,
  PRIMARY KEY (`id`),
  KEY `id_usuario` (`id_usuario`),
  KEY `id_zona` (`id_zona`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=46 ;

--
-- Volcado de datos para la tabla `om_medidasusuarios`
--

INSERT INTO `om_medidasusuarios` (`id`, `fecha`, `valor`, `id_zona`, `id_usuario`, `fecha_creacion`, `observaciones`) VALUES
(1, '2014-11-21', 11, 1, 16, '2014-11-21 10:36:36', NULL),
(2, '2014-11-21', 12, 2, 16, '2014-11-21 10:36:36', NULL),
(3, '2014-11-21', 13, 3, 16, '2014-11-21 10:36:36', NULL),
(4, '2014-11-21', 14, 4, 16, '2014-11-21 10:36:37', NULL),
(5, '2014-11-21', 15, 5, 16, '2014-11-21 10:36:37', NULL),
(6, '2014-11-21', 16, 6, 16, '2014-11-21 10:36:37', NULL),
(7, '2014-11-21', 17, 7, 16, '2014-11-21 10:36:37', NULL),
(8, '2014-11-21', 18, 8, 16, '2014-11-21 10:36:37', NULL),
(9, '2014-11-21', 19, 9, 16, '2014-11-21 10:36:37', NULL),
(10, '2014-11-21', 20, 10, 16, '2014-11-21 10:36:37', NULL),
(11, '2014-11-21', 21, 11, 16, '2014-11-21 10:36:37', NULL),
(12, '2014-11-21', 22, 12, 16, '2014-11-21 10:36:37', NULL),
(13, '2014-11-21', 23, 13, 16, '2014-11-21 10:36:37', NULL),
(14, '2014-11-21', 24, 14, 16, '2014-11-21 10:36:37', NULL),
(15, '2014-11-21', 25, 15, 16, '2014-11-21 10:36:37', NULL),
(16, '2014-11-24', 8, 1, 16, '2014-11-24 11:57:35', NULL),
(17, '2014-11-24', 8, 2, 16, '2014-11-24 11:57:35', NULL),
(18, '2014-11-24', 7, 3, 16, '2014-11-24 11:57:35', NULL),
(19, '2014-11-24', 7, 4, 16, '2014-11-24 11:57:36', NULL),
(20, '2014-11-24', 8, 5, 16, '2014-11-24 11:57:36', NULL),
(21, '2014-11-24', 7, 6, 16, '2014-11-24 11:57:36', NULL),
(22, '2014-11-24', 7, 7, 16, '2014-11-24 11:57:36', NULL),
(23, '2014-11-24', 7, 8, 16, '2014-11-24 11:57:36', NULL),
(24, '2014-11-24', 8, 9, 16, '2014-11-24 11:57:36', NULL),
(25, '2014-11-24', 7, 10, 16, '2014-11-24 11:57:37', NULL),
(26, '2014-11-24', 5, 11, 16, '2014-11-24 11:57:37', NULL),
(27, '2014-11-24', 4, 12, 16, '2014-11-24 11:57:37', NULL),
(28, '2014-11-24', 7, 13, 16, '2014-11-24 11:57:37', NULL),
(29, '2014-11-24', 8, 14, 16, '2014-11-24 11:57:37', NULL),
(30, '2014-11-24', 7, 15, 16, '2014-11-24 11:57:37', NULL),
(31, '2014-11-24', 8, 1, 16, '2014-11-24 12:01:38', NULL),
(32, '2014-11-24', 8, 2, 16, '2014-11-24 12:01:38', NULL),
(33, '2014-11-24', 7, 3, 16, '2014-11-24 12:01:38', NULL),
(34, '2014-11-24', 7, 4, 16, '2014-11-24 12:01:38', NULL),
(35, '2014-11-24', 8, 5, 16, '2014-11-24 12:01:38', NULL),
(36, '2014-11-24', 7, 6, 16, '2014-11-24 12:01:38', NULL),
(37, '2014-11-24', 7, 7, 16, '2014-11-24 12:01:38', NULL),
(38, '2014-11-24', 7, 8, 16, '2014-11-24 12:01:38', NULL),
(39, '2014-11-24', 8, 9, 16, '2014-11-24 12:01:38', NULL),
(40, '2014-11-24', 7, 10, 16, '2014-11-24 12:01:38', NULL),
(41, '2014-11-24', 5, 11, 16, '2014-11-24 12:01:39', NULL),
(42, '2014-11-24', 4, 12, 16, '2014-11-24 12:01:39', NULL),
(43, '2014-11-24', 7, 13, 16, '2014-11-24 12:01:39', NULL),
(44, '2014-11-24', 8, 14, 16, '2014-11-24 12:01:39', NULL),
(45, '2014-11-24', 7, 15, 16, '2014-11-24 12:01:39', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `om_morfologias`
--

CREATE TABLE IF NOT EXISTS `om_morfologias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(128) COLLATE utf8_spanish_ci NOT NULL,
  `caracteristicas` text COLLATE utf8_spanish_ci,
  `imagen` varchar(512) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `om_morfologias`
--

INSERT INTO `om_morfologias` (`id`, `nombre`, `caracteristicas`, `imagen`) VALUES
(1, 'Nerviosa', NULL, 'nerviosa.jpg'),
(2, 'Biliosa', '<p>En esta morfolog&iacute;a aparece una constituci&oacute;n tenazmente organizada.</p>\r\n<p>El aparato digestivo demuestra una actividad hep&aacute;tica muy intensa, caracterizada por una excesiva producci&oacute;n de jugos biliares que se infiltran en los tejidos hasta caracterizar el t&iacute;pico color cut&aacute;neo amarillo-oliv&aacute;ceo. </p>\r\n<p>El metabolismo hep&aacute;tico resulta alterado; a veces prevalecen en la bilis los &aacute;cidos grasos que el organismo tiende a eliminar. Tendencia a la intoxicaci&oacute;n. </p>\r\n<p>La morfolog&iacute;a Biliosa presenta una leve tendencia a la acidosis tisular que empeora su predisposici&oacute;n a la hipersinpaticoton&iacute;a: esto causa frecuentes tensiones emotivas que repercuten en el aparato digestivo-intestinal, dando lugar a colitis, estre&ntilde;imiento, gastritis, causando disfunciones y alterando el equilibrio metab&oacute;lico. </p>\r\n<p>El sistema nervioso es un componente dominante en este sujeto, caracterizado por una fuerte personalidad, voluble, dominadora, incluso orgullosa de estas cualidades hasta el punto de volverse tir&aacute;nica y autoritaria. </p>\r\n<p>Los otros aparatos de cuerpo funcionan adecuadamente para garantizar la actividad vital de esta persona. </p>\r\n<p>La figura envidiable de esta morfolog&iacute;a comienza a provocar disturbios corporales en la mujer en el periodo de la menopausia. Su cintura comienza a agrandarse y la grasa a acumularse alrededor, produciendo abdomen prominente. Se caracterizan por una obesidad hipertr&oacute;fica que aparece en la edad adulta. Los adipocitos, las c&eacute;lulas de grasa aumentan su tama&ntilde;o. Esta obesidad es menos rebelde que la de la morfolog&iacute;a sangu&iacute;nea. Esta grasa es de r&aacute;pida movilizaci&oacute;n de los &aacute;cidos grasos libres. Las personas con obesidad hipertr&oacute;fica suelen tener distribuci&oacute;n central de la grasa y responden muy bien al ejercicio f&iacute;sico. </p>\r\n<p> Esta grasa est&aacute; ligada a ciertos tipos de enfermedad (cardiopat&iacute;as, diabetes mellitus, hipertensi&oacute;n arterial y colescitopat&iacute;as . La musculatura en general es fuerte y est&aacute; en relaci&oacute;n con el abdomen, a mayor masa muscular en piernas, menor grasa en el abdomen.</p>\r\n<p> <em><strong>Alteraciones est&eacute;ticas de la cara</strong></em></p>\r\n<ul>\r\n<li>\r\n<p>La piel puede presentarse seca ( al&iacute;pica)por exceso de sales o untuosa por exceso de &aacute;cidos grasos.</p>\r\n</li>\r\n<li>\r\n<p>Puede encontrarse manchas amarillas por acumulo de grasas y toxinas o pigmentos.</p>\r\n</li>\r\n<li>\r\n<p>Presencia de alteraciones en la gl&aacute;ndula seb&aacute;cea con hipersecreci&oacute;n , piel asf&iacute;ctica, acn&eacute; qu&iacute;stico y/o comed&oacute;nico y/o cicatrices de acn&eacute;.</p>\r\n</li>\r\n</ul>\r\n<p><em><strong>Alteraciones est&eacute;tica de tronco</strong></em></p>\r\n<ul>\r\n<li>\r\n<p>En la parte superior, las alteraciones pueden ser inexistentes ( excepto cuando hay presencia de excesiva untuosidad, acn&eacute; qu&iacute;stico o comed&oacute;nico)que encontramos en la espalda y t&oacute;rax. </p>\r\n</li>\r\n<li>\r\n<p>Evidente la hinchaz&oacute;n abdominal, debido a colitis infamatoria, que altera la perfecta silueta de esta morfolog&iacute;a. </p>\r\n</li>\r\n<li>\r\n<p>Presencia de estr&iacute;as blancas en zona de caderas, piernas y pecho. Por la falta de nutrici&oacute;n en el tejido. Especialmente en personas de piel seca. </p>\r\n</li>\r\n</ul>\r\n<p><em><strong>Alteraciones est&eacute;ticas del seno</strong></em></p>\r\n<ul>\r\n<li>\r\n<p>En general bien moldeado, en forma de pera, a veces hipot&oacute;nico, hipotr&oacute;fico y ligeramente relajado. </p>\r\n</li>\r\n</ul>\r\n<p><em><strong>Alteraciones est&eacute;ticas de las piernas</strong></em></p>\r\n<ul>\r\n<li>\r\n<p>Ligera presencia de celulitis. </p>\r\n</li>\r\n</ul>\r\n<p>La morfolog&iacute;a Biliosa obtiene ventajas del masaje circulatorio corporal profundo y r&aacute;pido, acompa&ntilde;ado de un buen masaje intestinal y complementado con un masaje de relajaci&oacute;n.</p>', 'biliosa.jpg'),
(3, 'Linfática', '<p >Las formas corporales redondeadas de esta morfolog&iacute;a dependen de una grave alteraci&oacute;n constitucional: una insuficiencia linf&aacute;tica. Este canal de drenaje de desechos org&aacute;nicos, resulta estancado; y como consecuencia nos dar&aacute; un sistema inmunitario ineficiente debido al estancamiento de la circulaci&oacute;n linf&aacute;tica. </p>\r\n<p >El tejido conectivo se presenta infiltrado de liquidos y toxinas estancadas, por lo cual las reacciones ant&iacute;genas/anticuerpos resultan enlentecidas u obstaculizadas por los numerosos desechos org&aacute;nicos que &ldquo;esconden&rdquo; hu&eacute;spedes indeseados. Las repercusiones de este d&eacute;ficit, pueden constatarse a todos los niveles, dan lugar a una intoxicaci&oacute;n generalizada. </p>\r\n<p >La circulaci&oacute;n lenta conlleva una infiltraci&oacute;n cr&oacute;nica de todos los tejidos, que se resienten por la falta de recambio nutritivo y de oxigeno, apareciendo desvitalizados y ajados. </p>\r\n<p >El estancamiento circulatorio tiene repercusiones a nivel renal ya que &eacute;ste filtro ( ri&ntilde;ones) no logra drenar toda esa masa l&iacute;quida, tendiendo hacia una disminuci&oacute;n de la diuresis, provocando una intoxicaci&oacute;n mayor. </p>\r\n<p >Una funcionalidad respiratoria disminuida agrega, influyendo a&uacute;n m&aacute;s en este cuadro negativo y contribuyendo a enlentecer las funciones vitales de esta persona. </p>\r\n<p >El metabolismo digestivo, alterado por una excesiva y voluntaria ingesti&oacute;n de az&uacute;cares, define adem&aacute;s. La morfolog&iacute;a linf&aacute;tica, indicando sin duda la b&uacute;squeda perenne de energ&iacute;a r&aacute;pida de sostenimiento, que no hallar&aacute; jam&aacute;s. </p>\r\n<p >Tiende al hipotiroidismo (metabolismo y psique ralentecidos), al hipogonadismo, al hipercorticosurrenalismo ( con hiperproducci&oacute;n de colesterol y consiguiente retenci&oacute;n de l&iacute;quidos, producci&oacute;n de az&uacute;cares a partir de las prote&iacute;nas e inhibici&oacute;n de la actividad insul&iacute;nica con posibilidad de diabetes, agravada por la excesiva introducci&oacute;n de az&uacute;cares) a la hiperfuncionalidad del sistema nervioso parasimp&aacute;tico. </p>\r\n<p >Queda a&uacute;n por exponer una personalidad turbada por una b&uacute;squeda de seguridad y control de la timidez, que determinan un comportamiento flem&aacute;tico, ap&aacute;tico, aparentemente aislado de la agobiante realidad cotidiana. </p>\r\n<p ><strong>Alteraciones est&eacute;ticas de la cara:</strong></p>\r\n<ul>\r\n<li>\r\n<p >Color blanco opalino</p>\r\n</li>\r\n<li>\r\n<p >Epidermis fina.</p>\r\n</li>\r\n<li>\r\n<p >Dermis e hipodermis infiltradas de l&iacute;quidos y toxinas estancadas que hacen la piel espesa fr&iacute;a y sin arrugas pero extremadamente delicada. </p>\r\n</li>\r\n<li>\r\n<p >F&aacute;cilmente sujeta a alteraciones externas e internas; falta de protecci&oacute;n, nutrici&oacute;n y drenaje. </p>\r\n</li>\r\n</ul>\r\n<p ><strong>Alteraciones est&eacute;ticas del tronco</strong></p>\r\n<ul>\r\n<li>\r\n<p >Prevalecen las formas grandes, hinchadas y fl&aacute;cidas en general, con falta de tono muscular.</p>\r\n</li>\r\n<li>\r\n<p >Espalda con giba de bisonte.</p>\r\n</li>\r\n<li>\r\n<p >Cintura ancha y llena.</p>\r\n</li>\r\n<li>\r\n<p >Abdomen hinchado y redondo como si fuera un &ldquo;salvavidas&rdquo;.</p>\r\n</li>\r\n</ul>\r\n<p ><strong>Alteraciones est&eacute;ticas del seno</strong></p>\r\n<ul>\r\n<li>\r\n<p >No muy desarrollado c&oacute;mo gl&aacute;ndula. Hinchado y con falta de tono; ca&iacute;do inerte, orientado hacia los laterales y con posibles estr&iacute;as. </p>\r\n</li>\r\n</ul>\r\n<p><strong>Alteraciones est&eacute;ticas de las piernas</strong></p>\r\n<ul>\r\n<li>\r\n<p >Gl&uacute;teos llenos, redondos pero fl&aacute;cidos, redondeando plenamente todas las formas de esta persona. </p>\r\n</li>\r\n<li>\r\n<p >El muslo grueso pero no liso, irregular y con falta de tono, se apoya con pesadez sobre la articulaci&oacute;n de la rodilla que se presenta notablemente rellena. </p>\r\n</li>\r\n<li>\r\n<p >La pierna sin forma, en forma de &ldquo;columna&rdquo; debido a la estasis linf&aacute;tica y edemas difusos. </p>\r\n</li>\r\n</ul>\r\n<p >Esta morfolog&iacute;a linf&aacute;tica se beneficia de masaje circulatorio con efecto linfodrenante, movilizando el estancamiento venos-linf&aacute;tico. Se aconseja proceder gradualmente en la intensidad de la intervenci&oacute;n manual, ya que los masajes muy en&eacute;rgicos no ser&iacute;an bien tolerados. </p>', 'linfatica'),
(4, 'Sanguínea', '<p>En este sujeto la belleza est&aacute; siempre que mantegan una alimentaci&oacute;n controlada. Es la persona mas alegre, jovial, simp&aacute;tico, hablador, vanidoso, impulsivo y emotivo. Dotado de robustez f&iacute;sica. En mujeres formas del cuerpo muy femeninas, determinado por los estr&oacute;genos.</p>\r\n<p>Todo ello vine determinado por la sangre y por la circulaci&oacute;n sangu&iacute;nea que irrigando los tejidos, los nutre y les confiere fuerza y robustez. </p>\r\n<p>Los circulos venoso y linf&aacute;tico muestran se&ntilde;ales de obstrucci&oacute;n en cuanto a la velocidad del flujo que resultado ralentecido, as&iacute; como tendencia a <em><strong>la vasodilataci&oacute;n.</strong></em></p>\r\n<p>Este estado de congesti&oacute;n circulatoria corresponde muy a menudo en una disminuci&oacute;n de la funci&oacute;n renal. </p>\r\n<p>El ri&ntilde;&oacute;n, entendido como &oacute;rgano filtro de toxinas circulantes, juega un papel importante en esta morfolog&iacute;a. </p>\r\n<p>Se forman edemas ( hinchazones) especialmente en las zonas m&aacute;s declives de las extremidades inferiores dando lugar a varices y &uacute;lceras varicosas). Este fen&oacute;meno conocido como retenci&oacute;n h&iacute;drica provoca reacciones reflejas como sudoraci&oacute;n profusa ( hiperhidrosis) de un olor particularmente ocre. </p>\r\n<p>La funci&oacute;n respiratoria influye tanto en la vida como en la morfolog&iacute;a del sujeto. Una insuficiente oxigenaci&oacute;n ralentiza el metabolismo con acumulaci&oacute;n de toxinas, y una p&eacute;rdida de capacidad f&iacute;sica. Este es uno de los motivos por los que est&aacute; m&aacute;s indicada la Cabina Confort para &eacute;sta Morfologia que la distribuci&oacute;n de la grasa ser&aacute; con una predisposici&oacute;n a Ginoide. </p>\r\n<p>El aparato digestivo afectado por la acentuada voracidad ansiosa ( enfocada hacia los alimentos acidificantes, como embutidos, chocolates y az&uacute;cares en generral)., muestra signos de intoxicaci&oacute;n precoz que se manifiesta llenando y contribuyendo a hacer mas pesadas y gruesas las formas corporales. </p>\r\n<p>La Morfolog&iacute;a Sangu&iacute;nea expresa belleza y Salud cuando vive respetando el equilibrio psico-f&iacute;sico de su estructura; Y se muestra enferma cuando se ve obligada a vivir de manera contrastada a su necesidad de espacios abiertos y de actividad f&iacute;sica. </p>\r\n<p>Esta morfologia adquiere la distribuci&oacute;n de las grasas en formas ginoide: tambi&eacute;n conocida como obesidad subcut&aacute;nea o gl&uacute;tea. Obesidad hiperpl&aacute;sica ( aumento el n&uacute;mero de adipocitos, as&iacute; c&oacute;mo la grasa contenida en los mismos). Estas c&eacute;lulas son poco sensibles a la lip&oacute;lisis, originando complicaci&oacute;n a la hora de reducir grasa. Se da t&iacute;picamente en mujeres, aunque rara vez puede aparecer en hombres. Este tipo de obesidad no se encuentra tan relacionada con el riesgo de desarrollar enfermedades t&iacute;picas en la mofologia Biliosa (ver), pero responde peor que la obesidad androide al gasto de energ&iacute;a dedido al ejercicio f&iacute;sico. Adem&aacute;s puede tener distribuci&oacute;n de grasa generalizada produciendo alteraciones en el volumen sangu&iacute;neo total y funci&oacute;n cardiaca, mientras que la distribuci&ograve;n en la caja tor&aacute;cica y abdomen altera la funci&oacute;n respiratoria. </p>\r\n<p><strong>Alteraciones Est&eacute;ticas en la cara: </strong></p>\r\n<ul>\r\n<li>\r\n<p>Piel delicada en superficie, c&aacute;lida y enrojecida ( couperose), hinchada con dificultad en el drenaje, a veces untuosa sobre todo en la zona central de la cara. </p>\r\n</li>\r\n<li>\r\n<p>La excesiva sudoraci&oacute;n puede causar p&eacute;rdida de sales fisiol&oacute;gicas ( desmineralizaci&oacute;n).</p>\r\n</li>\r\n<li>\r\n<p>La dificultad de recambio circualtorio provoca &eacute;xtasis de l&iacute;quidos, sobre todo en las mejillas donde pueden encontrarse toxinas ( inotixicaci&oacute;n cut&aacute;nea) acn&eacute;. </p>\r\n</li>\r\n</ul>\r\n<p><strong>Alteraciones est&eacute;ticas del tronco</strong></p>\r\n<ul>\r\n<li>\r\n<p>El t&oacute;rax bien desarrollado es sede de dep&oacute;sitos de tejido adiposo y celulitis, sobre todo en la regi&oacute;n subaxilar, abdomen, costados y dorso. En algunas personas el abdomen es tambi&eacute;n prominente. </p>\r\n</li>\r\n<li>\r\n<p>Es predispuesta a estrias sobre la regi&oacute;n abdominal, cara interna de las piernas, zona lumbar y senos. Fundamentalmente en la pubertad, debido al desarrollo corporal que alcanza, la piel delicada y fr&aacute;gil, son condicionantes de la morfologia sanguinea<strong>. </strong></p>\r\n</li>\r\n</ul>\r\n<p><strong>Alteraciones est&eacute;ticas del seno</strong></p>\r\n<ul>\r\n<li>\r\n<p>Redondo, bien desarrollado y tr&oacute;fico. Presencia de estrias y p&eacute;rdida de tono debido al excesivo peso del mismo. </p>\r\n</li>\r\n</ul>\r\n<p><strong>Alteraciones est&eacute;ticas de las piernas</strong></p>\r\n<ul>\r\n<li>\r\n<p>Gl&uacute;teos llenos y aumentados de volumen, sobretodo lateralmente, tomando la cadera una forma de &aacute;nfora. </p>\r\n</li>\r\n<li>\r\n<p>Muslos voluminosos, con edema, teleangestasias y celulitis edematosa y dolorosa al tacto. </p>\r\n</li>\r\n<li>\r\n<p>La pierna hinchada, edematosa desde el tobillo y/o pie. En verano sobretodo el pie est&aacute; hinchado y las piernas hinchadas y dolorosas con una coloraci&oacute;n &ldquo;amoratado-violaceo&rdquo;.</p>\r\n</li>\r\n<li>\r\n<p>Presencia de varices. </p>\r\n</li>\r\n</ul>\r\n<p>Esta morfologia se beneficia de masajes circuatorios con efecto drenante, con movimientos lentos y una profundiad media. Movilizando el estancamiento venoso. </p>\r\n<p>Insistir en la pr&aacute;cticas de las repiraciones para ayudar a su falta de oxigeno.</p>', 'sanguinea.jpg');

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
(1, 'Ninguno en especial', 'No', 'Nada que destacar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ninguna', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', '', 0, 0, 0, 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `om_pesos`
--

CREATE TABLE IF NOT EXISTS `om_pesos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `peso` float NOT NULL,
  `fecha` date NOT NULL,
  `observaciones` text COLLATE utf8_spanish_ci NOT NULL,
  `id_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_usuario` (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `om_pesos`
--

INSERT INTO `om_pesos` (`id`, `peso`, `fecha`, `observaciones`, `id_usuario`) VALUES
(1, 68.6, '2014-11-19', '', 16),
(2, 65, '2014-11-19', '', 16),
(3, 63, '2014-11-19', '', 16),
(4, 62.1, '2014-11-04', '', 16),
(5, 68.3, '2014-11-13', '', 16),
(6, 59, '2014-11-28', '', 16),
(7, 49, '2014-09-03', '', 15),
(8, 51, '2014-10-13', '', 15),
(9, 59, '2014-11-19', '', 15);

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
  `recomendaciones` text NOT NULL,
  PRIMARY KEY (`user_id`),
  KEY `rol` (`rol`),
  KEY `id_padre` (`id_padre`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Volcado de datos para la tabla `om_profiles`
--

INSERT INTO `om_profiles` (`user_id`, `lastname`, `firstname`, `direccion`, `poblacion`, `provincia`, `codigo_postal`, `telefono`, `movil`, `rol`, `id_padre`, `pdf`, `cuentabancaria`, `morfologia`, `fechanacimiento`, `altura`, `recomendaciones`) VALUES
(1, 'Admin', 'Administrator', '', '', '', '', '', '', 1, 1, '', '', '', '0000-00-00', 0, ''),
(8, 'Langa Roy', 'Hugo', 'adas', 'asaass', 'aaaa', '50897', '676555555', '', 4, 1, '', '', '', '0000-00-00', 0, ''),
(15, 'Murillo', 'Laura', 'c/san frontonio,1', 'Épila', 'Zaragoza', '50290', '976817131', '636602253', 5, 8, NULL, '', 'Sanguínea', '1987-03-09', 0, ''),
(16, 'Langa Roy', 'Elea', 'c/san frontonio,1', 'Épila', 'Zaragoza', '50290', '677587477', '', 5, 8, NULL, '', 'Linfática', '1980-12-17', 0, '<b>Crema de noche</b>. <span style="background-color: rgb(255, 204, 51);">Aplicar todos los días</span> <u>después de <span style="background-color: rgb(255, 0, 0);">cenar..</span></u>');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

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
(17, 'altura', 'Altura', 'FLOAT', '10.2', '0', 0, '', '', 'Altura incorrecta', '', '0.00', '', '', 13, 2),
(18, 'recomendaciones', 'Recomendaciones', 'TEXT', '0', '0', 0, '', '', 'El campo Recomendacioens no es válido', '', '', '', '', 15, 1);

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
-- Estructura de tabla para la tabla `om_silhowell`
--

CREATE TABLE IF NOT EXISTS `om_silhowell` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `total_fit` int(11) NOT NULL,
  `total_comfort` int(11) NOT NULL,
  `actual_fit` int(11) NOT NULL DEFAULT '0',
  `actual_comfort` int(11) NOT NULL DEFAULT '0',
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ultimavez` date DEFAULT NULL,
  `texto` text COLLATE utf8_spanish_ci,
  `id_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_usuario` (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `om_tests`
--

CREATE TABLE IF NOT EXISTS `om_tests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pregunta` varchar(256) COLLATE utf8_spanish_ci NOT NULL,
  `respuestalinfatica` varchar(256) COLLATE utf8_spanish_ci NOT NULL,
  `respuestasanguinea` varchar(256) COLLATE utf8_spanish_ci NOT NULL,
  `respuestabiliosa` varchar(256) COLLATE utf8_spanish_ci NOT NULL,
  `respuestanerviosa` varchar(256) COLLATE utf8_spanish_ci NOT NULL,
  `observaciones` text COLLATE utf8_spanish_ci NOT NULL,
  `activado` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `om_tests`
--

INSERT INTO `om_tests` (`id`, `pregunta`, `respuestalinfatica`, `respuestasanguinea`, `respuestabiliosa`, `respuestanerviosa`, `observaciones`, `activado`) VALUES
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
-- Estructura de tabla para la tabla `om_tratamientos`
--

CREATE TABLE IF NOT EXISTS `om_tratamientos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tratamiento` varchar(256) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `descripcion` text COLLATE utf8_spanish_ci,
  `finalizado` tinyint(1) NOT NULL DEFAULT '0',
  `precio` float DEFAULT NULL,
  `sesiones` int(11) DEFAULT NULL,
  `observaciones` text COLLATE utf8_spanish_ci,
  `id_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_usuario` (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `om_tratamientos`
--

INSERT INTO `om_tratamientos` (`id`, `tratamiento`, `fecha_inicio`, `fecha_fin`, `fecha_creacion`, `descripcion`, `finalizado`, `precio`, `sesiones`, `observaciones`, `id_usuario`) VALUES
(1, 'Facial', '2014-11-20', '2014-11-20', '2014-11-20 12:01:01', '', 0, 126.3, 9, '', 15),
(2, 'Pies', '2014-11-20', '2014-11-20', '2014-11-20 12:30:55', '', 0, NULL, NULL, '', 15),
(3, 'Manicura', '2014-11-20', '2014-11-20', '2014-11-20 12:32:50', '', 1, 12, 1, '', 15),
(4, 'Facial', '2014-11-21', '2014-11-21', '2014-11-21 10:29:46', '', 0, 35, 1, 'Acné', 16);

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
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'webmaster@example.com', '9a24eff8c15a6a141ece27eb6947da0f', '2014-10-02 21:06:21', '2014-11-19 15:50:31', 1, 1),
(8, 'hugo', 'ae4d176ebaa6d584a7450f02e8415dd3', 'hlanga@hlanga.es', '6895e3ea807e735a354e442200d92af7', '2014-10-20 10:47:04', '2015-01-19 11:36:09', 0, 1),
(15, 'lmurillo', 'b65a61f1f7960b00603cb4453a1590eb', 'lugardelaura@gmail.com', '2458d3d6a68dd2435344301f1c14e11c', '2014-11-13 22:08:19', '2014-11-20 09:49:51', 0, 1),
(16, 'elealanga', '775d9c7f3672b4e2f41fe5d2aeb1c319', 'eleazgz@hotmail.com', '5cb5aedcf544ea48534d87ea971d7509', '2014-11-18 16:38:07', '2014-11-27 11:47:19', 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `om_zonas`
--

CREATE TABLE IF NOT EXISTS `om_zonas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(128) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `tipo` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `om_zonas`
--

INSERT INTO `om_zonas` (`id`, `nombre`, `descripcion`, `tipo`) VALUES
(1, 'Brazo', '', 0),
(2, 'Tórax', '', 0),
(3, 'Cintura', '', 0),
(4, 'Cadera', '', 0),
(5, 'Muslo', '', 0),
(6, 'Mitad de muslo', '', 0),
(7, 'Rodilla', '', 0),
(8, 'Pantorrilla', '', 0),
(9, 'Tripcipital', '', 1),
(10, 'Pectoral', '', 1),
(11, 'Escapular', '', 1),
(12, 'Ilíaco', '', 1),
(13, 'Abdomen', '', 1),
(14, 'Femoral', '', 1),
(15, 'Pantorilla', '', 1);

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
-- Filtros para la tabla `authassignment`
--
ALTER TABLE `authassignment`
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
-- Filtros para la tabla `om_silhowell`
--
ALTER TABLE `om_silhowell`
  ADD CONSTRAINT `om_silhowell_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `om_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `om_tratamientos`
--
ALTER TABLE `om_tratamientos`
  ADD CONSTRAINT `om_tratamientos_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `om_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `rights`
--
ALTER TABLE `rights`
  ADD CONSTRAINT `Rights_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
