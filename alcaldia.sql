-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.37-0ubuntu0.13.10.1 - (Ubuntu)
-- Server OS:                    debian-linux-gnu
-- HeidiSQL version:             7.0.0.4053
-- Date/time:                    2015-08-05 10:25:15
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

-- Dumping data for table alcaldia.categoria: ~7 rows (approximately)
/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
INSERT INTO `categoria` (`oid`, `categoria`) VALUES
	(1, 'HOTELES'),
	(2, 'POSADAS'),
	(3, 'RESTAURANTE'),
	(4, 'atractivos'),
	(5, 'pueblos turísticos'),
	(6, 'gastronomía'),
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
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Dumping data for table alcaldia.portafolio: ~31 rows (approximately)
/*!40000 ALTER TABLE `portafolio` DISABLE KEYS */;
INSERT INTO `portafolio` (`oid`, `oidser`, `imagen`, `titulo`, `detalle`, `fecha`, `modificado`, `enlace`) VALUES
	(2, 1, '145f8c0_vzla (2).jpg', 'img1', 'det1', '2015-08-04', '2015-08-04 14:03:44', ''),
	(3, 1, '157_big.jpg', 'img2', 'dddd', '2015-08-04', '2015-08-04 14:14:26', ''),
	(4, 1, '194ddadbbdb616fb525b5072e500c09df.jpg', 'reer', 'cccvcx', '2015-08-04', '2015-08-04 14:14:55', ''),
	(11, 2, 'DSCF6179_1.jpg', '1', '1', '2015-08-04', '2015-08-04 16:06:53', ''),
	(12, 2, 'DSCF6180_1.jpg', '2', '', '2015-08-04', '2015-08-04 16:09:30', ''),
	(13, 3, '110457385.jpg', '1', '1', '2015-08-04', '2015-08-04 16:11:01', ''),
	(14, 3, '1731233605_f42b667550_s.jpg', '2', '2', '2015-08-04', '2015-08-04 16:11:17', ''),
	(15, 3, '1731233605_f42b667550_z.jpg', '3', '3', '2015-08-04', '2015-08-04 16:11:33', ''),
	(16, 3, 'laguna-las-lajas.jpg', '4', '4', '2015-08-04', '2015-08-04 16:11:47', ''),
	(17, 4, '20140829_180506.jpg', '1', '1', '2015-08-04', '2015-08-04 16:13:05', ''),
	(18, 4, '20140829_181016.jpg', '2', '2', '2015-08-04', '2015-08-04 16:13:20', ''),
	(19, 5, 'P1120217.JPG', '1', '1', '2015-08-04', '2015-08-04 17:33:59', ''),
	(20, 5, 'P1120213.JPG', '2', '2', '2015-08-04', '2015-08-04 17:34:11', ''),
	(21, 5, 'P1120216.JPG', '3', '3', '2015-08-04', '2015-08-04 17:34:22', ''),
	(24, 6, '0 484_1.jpg', '1', '1', '2015-08-04', '2015-08-04 17:42:48', ''),
	(25, 6, '0 504_1.jpg', '2', '2', '2015-08-04', '2015-08-04 17:43:00', ''),
	(26, 6, 'GOPR1891_1.JPG', '3', '3', '2015-08-04', '2015-08-04 17:43:14', ''),
	(27, 7, '0 214_1.jpg', '1', '1', '2015-08-04', '2015-08-04 17:58:28', ''),
	(28, 7, '0 386_1.jpg', '2', '2', '2015-08-04', '2015-08-04 17:58:39', ''),
	(29, 7, '0 389_1.jpg', '3', '3', '2015-08-04', '2015-08-04 17:58:49', ''),
	(30, 8, 'P1120278.JPG', '1', '1', '2015-08-05', '2015-08-05 09:15:07', ''),
	(32, 8, 'P1120315.JPG', '2', '2', '2015-08-05', '2015-08-05 09:16:23', ''),
	(33, 8, 'MEMO0001.JPG', '3', '3', '2015-08-05', '2015-08-05 09:16:39', ''),
	(34, 9, 'pizcaandina.jpg', '1', '1', '2015-08-05', '2015-08-05 09:20:13', ''),
	(35, 9, 'arvejas.jpg', '2', '2', '2015-08-05', '2015-08-05 09:20:25', ''),
	(36, 9, 'atole.jpg', '3', '3', '2015-08-05', '2015-08-05 09:20:40', ''),
	(37, 9, 'mantecada.jpg', '4', '4', '2015-08-05', '2015-08-05 09:20:52', ''),
	(38, 10, '13trapiche01_700.jpg', '1', '1', '2015-08-05', '2015-08-05 09:22:43', ''),
	(39, 10, '0 245.jpg', '2', '2', '2015-08-05', '2015-08-05 09:22:54', ''),
	(40, 10, '0 237.jpg', '3', '3', '2015-08-05', '2015-08-05 09:23:04', ''),
	(41, 10, '0 234.jpg', '4', '4', '2015-08-05', '2015-08-05 09:23:19', '');
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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Dumping data for table alcaldia.servicio: ~10 rows (approximately)
/*!40000 ALTER TABLE `servicio` DISABLE KEYS */;
INSERT INTO `servicio` (`id`, `oidcat`, `nombre`, `descrip`, `fecha`, `modificado`, `estatus`) VALUES
	(1, 1, 'Venezuela de Antier', 'Este parque temático tardó tres años en ser construido, fue el 31 de julio de 1991, cuando su propietario Alexis Montilla abrió sus puertas al público,  La Venezuela de Antier es un  atractivo turístico que rememora lo que fue la Venezuela de los años 30. Durante el recorrido podrán conocer representaciones de varios estados del país y observar shows artísticos que recuerdan la época en la que el país era gobernado por la férrea dictadura del general Juan Vicente Gómez. Cada estado cuenta con una infraestructura distinta, adaptada a los primeros años del siglo XX donde encontrarán personajes, objetos, música y representaciones artísticas tradicionales de lo que fue Venezuela hace un siglo.  Una gran colección de vehículos antiguos, documentos, vestuarios y retratos forman parte de este parque que permite a Venezolanos y extranjeros viajar en el tiempo.', '0000-00-00', '2015-08-04 13:45:51', 0),
	(2, 4, 'Páramo de Los Conejos', 'Es uno de los atractivos turísticos naturales más destacados del municipio Campo Elías, ubicado a más de 3600msnm  este páramo  alberga nuestro Oso Frontino.\nEl ascenso hacía el lugar es sostenido, se requiere tracción. Todo el camino es de piedras sueltas, aún  se observa el empedrado que data de La Colonia. En el Páramo de Los Conejos  es posible  desarrollar el turismo de aventura y naturaleza, donde los visitantes podrán recorrer los paisajes del lugar, como la laguna de Las Iglesias, laguna Los Puentes, el páramo El Tambor y la formación rocosa La Cara del Indio, entre otros atractivos.\nColindando con El Páramo de los Conejos, está  El Páramo el Campanario, allí se erige una aldea conformada por 40 casas donde viven más de 80  personas, José Mateus “Chencho”, nativo de la zona y auxiliar de enfermería desde hace 37 años, comentó que ya son cuatro las generaciones que han habitado el lugar durante un siglo. Actualmente el páramo cuenta con una escuela, un ambulatorio y electrificación a través de paneles solares.\nEl cultivo de papa, cebollín entre otras hortalizas y la cría de truchas es el sustento económico de los habitantes de esta zona que está rodeada de ríos y lagunas.', '2015-08-04', '2015-08-04 15:46:31', 0),
	(3, 4, 'Laguna de Las Lajas', 'Campo Elías posee atractivos naturales que no puedes dejar de conocer, rodeada de suelos pocos profundos y por un paisaje de ensueños encontrarás la Laguna de Las Lajas, ubicada en el páramo Mochaba de Acequias, al llegar a este lugar podrás disfrutar de un clima tipo páramo con una temperatura que oscila entre los 5 grados centígrados en la noche y 22 durante el día.\nLa vegetación que flanquea a este atractivo turístico la caracteriza un gran diversidad de flores de colores, frailejones, planta xerófilas y bosques parameros. La laguna se extiende en una forma poco regular que con frecuencia es interrumpida en una faja altitudinal comprendida entre los 2.980 y los 4.200 msmn.\nEn cuanto a la fauna apreciarás colibrís, el chivito los páramos, oso frontino y el cóndor. El encuentro con la naturaleza que vivirás en esta zona será inolvidable y te permitirá respirar un ambiente de tranquilidad al que volverás  a regresar.', '2015-08-04', '2015-08-04 16:10:13', 0),
	(4, 4, 'Páramo y Parque Piedra Pirela en San José', 'Es un paraje natural, ubicado a  3122 msnm donde se puede apreciar el frailejón y la laguna Pozo Negro. Divide los municipios Campo Elías y Arzobispo Chacón.\nSegún testimonios de los habitantes de la zona el parque que se ubica en el páramo recibe su nombre de una piedra redonda ubicada bajo la capilla del parque. La piedra señala el lugar donde presumiblemente ocurrió una batalla pre independentista, siendo el líder de uno de los grupos un hombre de apellido Pirela. El parque está bordeado por bajos muros de piedra de 80 centímetros de espesor. En el interior de esta superficie se exhiben figuras de animales elaboradas en piedra, entre estas, un león y un águila, además de un elemento alegórico a una capilla, realizadas por Augusto Marquina, quien dio por concluida su construcción en el año 1977.', '2015-08-04', '2015-08-04 16:12:34', 0),
	(5, 4, 'Monumento a la Chorrera de Las González ', 'Enmarcado dentro del ramal de la cordillera de los Andes Nororientales formando parte de la sierra de la Culata, este monumento natural, se ubica en la Parroquia Jají, Municipio Campo Elías del Estado Mérida. Su característica principal es un escarpe de falla recorrido por cristalinas aguas de la quebrada Las González, que bajan formando en algunos sectores blancas caídas de agua conocidas como chorreras. Luego de las lluvias o nevadas, estas caídas de agua adquieren un caudal mayor y se ven imponentes a la distancia. La topografía es típicamente Andina con una vegetación de la formación de bosque nublado. Hay una gran variedad de helechos, orquídeas, musgos y platas epifitas.\nFue declarado monumento natural el 9 de marzo de 1980, posee una altitud de 1.700 – 2.400 m.s.n.m. y una superficie de 126 hectáreas, el clima es templado y sus agua son muy frías y cristalinas.\nCómo llegar\nPor la carretera Panamericana siguiendo la vía de Mérida a Jají hasta encontrarse con el Parque.', '2015-08-04', '2015-08-04 17:32:21', 0),
	(6, 4, 'Tierra Negra ', 'Ubicada en el sector Las González y a una altura de 1650msnm, Tierra Negra  es considerada como uno de los 10 mejores lugares del mundo para practicar Parapente. \nTierra Negra Posee un clima adecuado para realizar este deporte que sin duda alguna constituye uno de los atractivos turísticos de aventura más frecuentados dentro del municipio Campo Elías.\nAunque es un tipo de vuelo un poco desafiante, a éste se le conoce como Tandem o biplaza, porque se va acompañado con el instructor especializado en esta área.\nPara vivir esta experiencia existen diversas organizaciones que ofrecen los vuelos, los profesionales en esta materia recomiendan utilizar zapatos deportivos, ropa cómoda, preferiblemente pantalón largo, sueter y comer ligero antes del vuelo.\nEste maravilloso paraje está ubicado a 30 minutos de la ciudad de Ejido y para llegar  se debe desplazar por la vía que conduce hacía El Vigía y tomar el desvío a la izquierda que  conduce a los pueblos del sur de Campo Elías.', '2015-08-04', '2015-08-04 17:36:28', 0),
	(7, 4, 'Ruinas de San Antonio de Mucuñó', 'Campo Elías es un municipio privilegiado por sus atractivos turísticos e históricos. San Antonio de Mucuñó fue un antiguo pueblo de doctrina durante la Colonia  y primer asentamiento del pueblo de Acequias.\nPor ello, se considera que Las Ruinas de San Antonio de Mucuño son el último vestigio arquitectónico original de los pueblos de doctrina en Venezuela.\nEl trayecto entre Acequias y San Antonio de Mucuño se puede realizar de varias maneras: a pie, a caballo, en bicicleta, en vehículo rústico, o combinando estos medios. Es recomendable usar vehículo 4x4, llevar abrigo y usar ropa y calzado adecuado para la montaña.\nLo ideal es hacer esta ruta acompañado por un baquiano que le ofrecerá las explicaciones durante el camino mientras se desplazan entre las ruinas de Mucuñó.\nEstas ruinas fueron declaradas Monumento Histórico Nacional el 24 de enero de 1991, según resolución aparecida en Gaceta Oficial número 34.645.\n Se encuentran distribuidas en núcleos ordenados en forma escalonada. Algunas de las construcciones son de mayor dimensión que otras. En ellas se puede observar muros muy gruesos de tapia y calado. Resalta el uso de lajas así como en los dinteles de las puertas. Las edificaciones son de forma cuadrada y ninguna conserva sus techos. Todas las estructuras habitacionales fueron elaboradas mediante tapiales de barro sobre fundaciones de piedra.\nEl lugar con respecto a los vestigios arqueológicos presentes según datos arrojados por previas investigaciones realizadas, posee viviendas de tapias con divisiones internas; una iglesia de una sola nave de 8 m de ancho por 35 m de profundidad que poseía una sacristía, un bautisterio y contrafuertes de piedra y tapia que le sirven de refuerzos a la estructura, una plaza, hornos de pan, acequias y muros de nivelación. Abundan además fragmentos de teja y metates. También se consiguen en las afueras de lo que fue el pueblo de San Antonio de Mucuñó, terrazas de uso agrícola y de uso habitacional, acequias, restos de viviendas hechas de piedra y barro.\nReseña Histórica\nSe trata de las ruinas de un antiguo asentamiento de origen colonial. Antes de la conformación del poblado, el lugar fue explorado por el español Sebastián Bermejo Bailen el 26 de noviembre de 1619, escogiéndose a Mucuñó como sitio adecuado para ser poblado. Alonso Vásquez de Cisneros fundó el pueblo de San Antonio de Mucuñó el 26 de enero de 1620, sobre el sitio llamado Mucubachí en la margen derecha de la quebrada de Mucusós aguas arriba, que es tributaria del río Nuestra Señora ubicado a 5 km de San Antonio de Acequias. \nLas ruinas del poblado se encuentran a unos 2.000 metros sobre el nivel del mar. Para cumplir con las ordenanzas del oidor Alonso Vásquez de Cisneros, los encomenderos reunieron en este sitio a 745 pobladores indígenas, en su mayoría conformados por los indígenas mucuñoes y de otras culturas originarias presentes en la región, con el propósito inicial de mejorar el adoctrinamiento de estas personas y emplearlas como mano de obra para erigir este poblado. Fue abandonado a causa de los daños ocasionados por los fuertes movimientos sísmicos del año 1684, que provocaron desplazamientos del terreno formando grietas de tal magnitud que su sola vista causaba pavor entre los pobladores. \nInformación general de la ruta\nDistancia: 6 km (ida) / 12 km (ida y vuelta)\nModalidades: Senderismo, cabalgata, ciclismo, vehículo 4X4\nDuración: de 3 a 5 horas, incluyendo la visita de las ruinas, según la modalidad\nDificultad: Fácil a moderado\nPúblico: Familiar / Aficionado\nPunto de partida y llegada: Acequias', '2015-08-04', '2015-08-04 17:54:04', 0),
	(8, 5, 'La Mesa', 'Ubicado  al suroeste de Ejido,  esta población fue fundada el 16 de agosto de 1693. Desde sus orígenes La Mesa se ha caracterizado por ser una potencia agrícola. Posee suelos adecuados para cultivar café, cacao, caña de azúcar, los cítricos otros frutales, hortalizas y  para la cría del ganado de ordeño, siendo está potencialidad el sustento económico de muchos de su pobladores.\nDebido a la vocación artística de la mayoría de sus habitantes La Mesa es llamada el “Pueblo Musical de Mérida”, cuenta con una gran diversidad de artesanos y sus edificaciones conservan la arquitectura tradicional de Los Andes. Con un urbanismo pintoresco este pueblo enclavado entre montañas es visitado por muchos turistas quienes lo frecuentan para disfrutar de las retretas sabatinas que ofrece la Banda Antonio Valero y de otras actividades culturales.', '2015-08-05', '2015-08-05 09:13:59', 0),
	(9, 6, 'Gastronomía', 'Por estar ubicado geográficamente dentro de la región andina de Venezuela, Campo Elías al igual que otros municipios de esta zona se caracteriza por tener una gastronomía variada.\nEl queso ahumado, mazamorra de maíz, la pizca andina, sopa de arvejas, tungas, arepas de maíz pelado, guapitos, cachapas, arepas de harina de trigo, pasteles de carne o queso, carne mermada, entre otros, son los platos típicos que por lo general se sirven en los hogares de Campo Elías.\nSi hablamos de bebidas y dulces típicos, cabe mencionar el  chocolate, la chicha criolla, chicha andina, fororo,  el bizcochuelo, alfondoque, dulce de maíz,  dulce cabello de ángel, almojábana, suspiros, pan criollo dulce de higos y las  conservas de coco.', '2015-08-05', '2015-08-05 09:19:27', 0),
	(10, 8, 'Trapiches', 'Situado en un importante valle de la región andina y rodeado de montañas, Ejido es llamado también “La Ciudad de la Miel y las Flores”, flanqueada de cultivos de caña de azúcar en sus zonas verdes, cuyo producto fue uno de los primeros rubros que fue procesado en los antiguos trapiches. El proceso de la caña panelera, fue una de las principales actividades económicas de los habitantes de Campo Elías, toda vez que no sólo la siembra era la labor diaria de los ejidenses, sino también procesaban el fruto para obtener sus derivados, entre ellos la panela, dulces caseros como melcocha, dulce de higo, entre otros.\nEl trapiche es un tipo de molino utilizado a fin de extraer el jugo a  determinados frutos de la tierra; en este caso a la caña de azúcar, que luego de un laborioso proceso es convertida en panela, ya sea sólida o pulverizada. En Ejido era ésta una de las principales actividades económicas de sus habitantes, quienes iniciaban su jornada desde   comienzos de la   madrugada y la terminaban hacia el final de la noche.\nEn la actualidad aún siguen existiendo en algunos sectores del municipio Campo Elías trapiches para el procesamiento de la caña de azúcar, tal es el caso del trapiche “La Santa Cruz”, de la la familia Araque, ubicado en Pozo Hondo, en este lugar se trabaja desde la madrugada y hasta el final de la noche para producir la panela que endulza los platos típicos de las familias merideñas desde hace más de 50 años.\nOtros de los trapiches ubicados en el municipio Campo Elías son el de la familia Pérez, el trapiche de Los Higuerones y los trapiches de la meseta de Sulbarán.<br>\n<b>Proceso para la obtención de la Miel y Panela</b><br>\nEn la producción de la panela se comienza con el corte de la caña, después se saca en bestia hasta la carretera y luego se lleva en camión hasta el trapiche, donde la mitad de la producción es para el dueño del mismo, y la otra mitad para el dueño de la caña. En el trapiche el proceso se inicia con el paso de   a caña de azúcar por la prensa, una máquina que extrae su jugo y lo transporta a través de una tubería hasta la primera de tres o cinco grandes pailas donde el líquido es sometido a elevadísimas temperaturas. La primera, se conoce como la paila "guarapera", y es donde se mantiene hirviendo el jugo hasta que comience a transformarse en guarapo; es decir, a tomar una consistencia más densa, para lo cual le es agregada cierta cantidad de cal. Luego, pasa a la segunda paila, denominada por algunos la "mielera", donde el líquido permanece hasta obtener una  consistencia más espesa, obteniéndose entonces la miel. Después, pasa a la "la cochera", es decir, la tercera paila, donde se comienza a obtener el punto ideal de la miel, para seguidamente ser vertida en un recipiente de madera llamado "tacha" o "artesa" donde se agita durante algunos minutos.\nUna vez conseguida la consistencia deseada, llega la hora de verter la  mezcla en las "gaveras" (molde con estructura de cuadros o paneles) para  finalmente obtener la panela que es empacada y vendida. Pero también se puede obtener la panela pulverizada, luego de su paso por un colador.  \n<br>\n<b>Fuentes Utilizadas<b><br>\nGuía Turística y Cultural Pueblos del Sur (Asociación Cooperativa de Turismo Comunitario) 2012', '2015-08-05', '2015-08-05 10:04:44', 0);
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
