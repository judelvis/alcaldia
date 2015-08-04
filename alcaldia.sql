-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.37-0ubuntu0.13.10.1 - (Ubuntu)
-- Server OS:                    debian-linux-gnu
-- HeidiSQL version:             7.0.0.4053
-- Date/time:                    2015-08-04 15:53:52
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;

-- Dumping structure for table alcaldia.categoria
DROP TABLE IF EXISTS `categoria`;
CREATE TABLE IF NOT EXISTS `categoria` (
  `oid` int(10) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`oid`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Dumping data for table alcaldia.categoria: ~3 rows (approximately)
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
INSERT INTO `categoria` (`oid`, `categoria`) VALUES
	(1, 'HOTELES'),
	(2, 'POSADAS'),
	(3, 'RESTAURANTE'),
	(4, 'atractivos'),
	(5, 'pueblos'),
	(6, 'gastronomia'),
	(8, 'trapiche');
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;


-- Dumping structure for table alcaldia.noticias
DROP TABLE IF EXISTS `noticias`;
CREATE TABLE IF NOT EXISTS `noticias` (
  `oid` int(10) NOT NULL AUTO_INCREMENT,
  `imagen` text NOT NULL,
  `titulo` text NOT NULL,
  `descrip` text NOT NULL,
  `enlace` text NOT NULL,
  `fecha` date NOT NULL,
  `resumen` text NOT NULL,
  `modificado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`oid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table alcaldia.noticias: ~3 rows (approximately)
/*!40000 ALTER TABLE `noticias` DISABLE KEYS */;
INSERT INTO `noticias` (`oid`, `imagen`, `titulo`, `descrip`, `enlace`, `fecha`, `resumen`, `modificado`) VALUES
	(1, 'noticia1.jpg', 'ExpoYaracuy 2015 arranca este miércoles como espacio productivo del país ', 'ÚN | AVN.- Este miércoles se inaugura la Expoferia Yaracuy 2015 y la XL Feria del Cebú, en la que delegaciones de diversas partes del país mostrarán e intercambiarán experiencias en el área de innovaciones tecnológicas y productividad en el campo.\n\nLas jornadas se extenderán hasta el domingo 26 en las instalaciones del parque exposición Severiano Giménez de la capital yaracuyana, San Felipe, en el centro-occidente de Venezuela.\n\nEn la actividad, organismos e instituciones públicas y privadas presentarán los logros alcanzados durante la Revolución Bolivariana y 56 ganaderías exhibirán a más de 500 ejemplares de las mejores especies bovinas.\n\nLa feria contará con juzgamiento y subasta de animales, actividades culturales y de entretenimiento para adultos, jóvenes y niños, y venta de artesanía, gastronomía y dulcería criolla.', 'http://www.ultimasnoticias.com.ve/noticias/actualidad/economia/expoyaracuy-2015-arranca-este-miercoles-como-espac.aspx', '2015-07-22', 'Las jornadas se extenderán hasta el domingo 26 en las instalaciones del parque exposición Severiano Giménez de la capital yaracuyana, San Felipe, en el centro-occidente de Venezuela', '2015-07-22 10:49:17'),
	(2, 'noticia2.jpg', '¡EL CINISMO DEL RÉGIMEN! Asamblea Nacional debatió por horas la “ley mordaza”… de España ', '\nPodría parecer una broma, pero tratándose de Venezuela, todo es posible. Y es que la Asamblea Nacional (AN) debatió este martes, la Ley de Seguridad Ciudadana española, más conocida como la “ley mordaza”, y aprobó un acuerdo en rechazo al polémico instrumento jurídico, esto paradójicamente en medio de denuncias reiteradas desde hace años a consecuencia de la falta de libertad de expresión en Venezuela y los ataques a periodistas que no pueden ejercer libremente.\n\nEl debate se generó después de que la semana pasada el propio presidente Nicolás Maduro pidiera al Parlamento tratar el tema y “denunciarlo”.\nY no es que la AN reciba órdenes del Ejecutivo, pero el martes se modificó el orden del día incluir un proyecto de acuerdo en rechazo a la ley, bajo el orweliano nombre de “Proyecto de Acuerdo en Solidaridad con la Justa Batalla que Libra el Pueblo de España contra la Ley Mordaza”.\n\nLa diputada chavista Tania Díaz presentó el debate y definiendo a la “ley mordaza” con una frase lapidaria: “Aberración jurídica”.\n\nSegún ella, la Ley de Seguridad Ciudadana busca “criminalizar la protesta y la pobreza” y evitar que el “descontento” general, por el “paquete neoliberal” que Europa y el FMI imponen a España, se vea reflejado en las calles y en los medios de comunicación.\n\nAsí, la polémica ley constituye “un retroceso grave en materia de derechos humanos” para la humanidad entera, aseveró Díaz.\n', 'http://www.maduradas.com/el-cinismo-del-regimen-asamblea-nacional-debatio-por-horas-la-ley-mordaza-de-espana/', '2015-07-22', '\nPodría parecer una broma, pero tratándose de Venezuela, todo es posible. Y es que la Asamblea Nacional (AN) debatió este martes, la Ley de Seguridad Ciudadana española, más conocida como la “ley mordaza”, y aprobó un acuerdo en rechazo al polémico instrumento jurídico, esto paradójicamente en medio de denuncias reiteradas desde hace años a consecuencia de la falta de libertad de expresión en Venezuela y los ataques a periodistas que no pueden ejercer libremente.', '2015-07-22 11:27:45'),
	(3, 'fslider.jpg', 'afdas', 'asdfsadf', '', '2015-07-03', 'sdfsdf', '2015-07-22 14:29:36');
/*!40000 ALTER TABLE `noticias` ENABLE KEYS */;


-- Dumping structure for table alcaldia.portafolio
DROP TABLE IF EXISTS `portafolio`;
CREATE TABLE IF NOT EXISTS `portafolio` (
  `oid` int(11) NOT NULL AUTO_INCREMENT,
  `oidser` int(11) NOT NULL,
  `imagen` text COLLATE utf8_spanish_ci NOT NULL,
  `titulo` text COLLATE utf8_spanish_ci NOT NULL,
  `detalle` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `modificado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `enlace` text COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`oid`),
  KEY `oidser` (`oidser`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Dumping data for table alcaldia.portafolio: ~0 rows (approximately)
/*!40000 ALTER TABLE `portafolio` DISABLE KEYS */;
INSERT INTO `portafolio` (`oid`, `oidser`, `imagen`, `titulo`, `detalle`, `fecha`, `modificado`, `enlace`) VALUES
	(2, 1, '145f8c0_vzla (2).jpg', 'img1', 'det1', '2015-08-04', '2015-08-04 14:03:44', ''),
	(3, 1, '157_big.jpg', 'img2', 'dddd', '2015-08-04', '2015-08-04 14:14:26', ''),
	(4, 1, '194ddadbbdb616fb525b5072e500c09df.jpg', 'reer', 'cccvcx', '2015-08-04', '2015-08-04 14:14:55', '');
/*!40000 ALTER TABLE `portafolio` ENABLE KEYS */;


-- Dumping structure for table alcaldia.servicio
DROP TABLE IF EXISTS `servicio`;
CREATE TABLE IF NOT EXISTS `servicio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `oidcat` int(11) NOT NULL DEFAULT '0',
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `descrip` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `modificado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `estatus` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `oidcat` (`oidcat`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Dumping data for table alcaldia.servicio: ~1 rows (approximately)
/*!40000 ALTER TABLE `servicio` DISABLE KEYS */;
INSERT INTO `servicio` (`id`, `oidcat`, `nombre`, `descrip`, `fecha`, `modificado`, `estatus`) VALUES
	(1, 1, 'Venezuela de Antier', 'Este parque temático tardó tres años en ser construido, fue el 31 de julio de 1991, cuando su propietario Alexis Montilla abrió sus puertas al público,  La Venezuela de Antier es un  atractivo turístico que rememora lo que fue la Venezuela de los años 30. Durante el recorrido podrán conocer representaciones de varios estados del país y observar shows artísticos que recuerdan la época en la que el país era gobernado por la férrea dictadura del general Juan Vicente Gómez. Cada estado cuenta con una infraestructura distinta, adaptada a los primeros años del siglo XX donde encontrarán personajes, objetos, música y representaciones artísticas tradicionales de lo que fue Venezuela hace un siglo.  Una gran colección de vehículos antiguos, documentos, vestuarios y retratos forman parte de este parque que permite a Venezolanos y extranjeros viajar en el tiempo.', '0000-00-00', '2015-08-04 13:45:51', 0),
	(2, 4, 'Páramo de Los Conejos', 'Es uno de los atractivos turísticos naturales más destacados del municipio Campo Elías, ubicado a más de 3600msnm  este páramo  alberga nuestro Oso Frontino.\nEl ascenso hacía el lugar es sostenido, se requiere tracción. Todo el camino es de piedras sueltas, aún  se observa el empedrado que data de La Colonia. En el Páramo de Los Conejos  es posible  desarrollar el turismo de aventura y naturaleza, donde los visitantes podrán recorrer los paisajes del lugar, como la laguna de Las Iglesias, laguna Los Puentes, el páramo El Tambor y la formación rocosa La Cara del Indio, entre otros atractivos.\nColindando con El Páramo de los Conejos, está  El Páramo el Campanario, allí se erige una aldea conformada por 40 casas donde viven más de 80  personas, José Mateus “Chencho”, nativo de la zona y auxiliar de enfermería desde hace 37 años, comentó que ya son cuatro las generaciones que han habitado el lugar durante un siglo. Actualmente el páramo cuenta con una escuela, un ambulatorio y electrificación a través de paneles solares.\nEl cultivo de papa, cebollín entre otras hortalizas y la cría de truchas es el sustento económico de los habitantes de esta zona que está rodeada de ríos y lagunas.', '2015-08-04', '2015-08-04 15:46:31', 0);
/*!40000 ALTER TABLE `servicio` ENABLE KEYS */;


-- Dumping structure for table alcaldia.usuarios
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `documento` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `login` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `clave` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nivel` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table alcaldia.usuarios: ~1 rows (approximately)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id`, `documento`, `nombre`, `apellido`, `login`, `clave`, `nivel`) VALUES
	(1, '1', 'judelvis', 'rivas', 'admin', '202cb962ac59075b964b07152d234b70', 1);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
/*!40014 SET FOREIGN_KEY_CHECKS=1 */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
