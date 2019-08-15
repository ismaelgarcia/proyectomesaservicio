-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         5.7.24 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura para tabla mesaservicio.departamento
CREATE TABLE IF NOT EXISTS `departamento` (
  `id_departamento` int(11) NOT NULL AUTO_INCREMENT,
  `id_direccion` int(11) DEFAULT NULL,
  `nombre` varchar(50) NOT NULL,
  `titular` varchar(50) NOT NULL,
  PRIMARY KEY (`id_departamento`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COMMENT='tabla que almacena los departamentos';

-- Volcando datos para la tabla mesaservicio.departamento: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `departamento` DISABLE KEYS */;
REPLACE INTO `departamento` (`id_departamento`, `id_direccion`, `nombre`, `titular`) VALUES
	(2, NULL, 'Depto. de conectividad.', 'Rodrigo de la Rosa.'),
	(3, NULL, 'Departamento de Soporte Técnico', 'Eriberto Hernández.');
/*!40000 ALTER TABLE `departamento` ENABLE KEYS */;

-- Volcando estructura para tabla mesaservicio.dependencia
CREATE TABLE IF NOT EXISTS `dependencia` (
  `id_dependencia` int(9) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `titular` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_dependencia`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COMMENT='Tabla que almacenrá el nombre de las dependencias del gobierno del estado';

-- Volcando datos para la tabla mesaservicio.dependencia: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `dependencia` DISABLE KEYS */;
REPLACE INTO `dependencia` (`id_dependencia`, `nombre`, `titular`) VALUES
	(1, 'SEDETUS', NULL);
/*!40000 ALTER TABLE `dependencia` ENABLE KEYS */;

-- Volcando estructura para tabla mesaservicio.direccion
CREATE TABLE IF NOT EXISTS `direccion` (
  `id_direccion` int(11) NOT NULL AUTO_INCREMENT,
  `id_unidad` int(11) DEFAULT NULL,
  `nombre` varchar(50) NOT NULL,
  `titular` varchar(50) NOT NULL,
  PRIMARY KEY (`id_direccion`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COMMENT='Tabla que almacenará las direcciones';

-- Volcando datos para la tabla mesaservicio.direccion: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `direccion` DISABLE KEYS */;
REPLACE INTO `direccion` (`id_direccion`, `id_unidad`, `nombre`, `titular`) VALUES
	(1, 1, 'Dirección de informática', 'David Fajardo Crespo'),
	(2, 1, 'Direccion de Vivienda', 'Alejando Pelcastre Villagran'),
	(3, 1, 'Direccion de Construcción.', 'Demy Santander'),
	(6, NULL, 'Direccion de estadísticas', 'Elba Naranjo');
/*!40000 ALTER TABLE `direccion` ENABLE KEYS */;

-- Volcando estructura para tabla mesaservicio.equipo
CREATE TABLE IF NOT EXISTS `equipo` (
  `id_equipo` int(11) NOT NULL AUTO_INCREMENT,
  `id_equipoclase` int(11) DEFAULT '0',
  `id_equipotipo` int(11) DEFAULT '0',
  `numinventarui` varchar(50) DEFAULT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `marca` varchar(50) DEFAULT NULL,
  `modelo` varchar(50) DEFAULT NULL,
  `serie` varchar(50) DEFAULT NULL,
  `fechacompra` date DEFAULT NULL,
  `precio` decimal(10,0) DEFAULT NULL,
  `condicion` int(11) DEFAULT NULL,
  `estatus` int(11) DEFAULT NULL,
  `fechabaja` date DEFAULT NULL,
  `referenciabaja` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_equipo`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1 COMMENT='Tabla que almacena los equipos';

-- Volcando datos para la tabla mesaservicio.equipo: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `equipo` DISABLE KEYS */;
REPLACE INTO `equipo` (`id_equipo`, `id_equipoclase`, `id_equipotipo`, `numinventarui`, `descripcion`, `marca`, `modelo`, `serie`, `fechacompra`, `precio`, `condicion`, `estatus`, `fechabaja`, `referenciabaja`) VALUES
	(1, 0, 0, NULL, 'Computadora Hp', 'HP', '3521', '45582', '2019-08-13', 5000, 1, 1, NULL, NULL),
	(3, 0, 0, NULL, 'Breake', 'sola basic', '24000', 'Nueva serie', '2019-08-13', 2005, 2, 2, NULL, NULL),
	(4, 0, 0, NULL, 'impresora laser', 'hp', 'fx2122', '222323', '2019-08-13', 450, 3, 3, NULL, NULL),
	(5, 1, 0, NULL, 'Switch', 'Cisco', '1254', '45875', '2019-08-14', 1000, 1, 1, '2001-01-19', NULL),
	(6, 1, 0, NULL, 'AccesPoint', 'Generico', 'ERS458', '4587924', '2019-08-14', 2000, 1, 1, NULL, NULL),
	(7, 1, 0, NULL, 'Rack', 'Panduid', '45858', '74878', '2019-08-14', 1500, 1, 1, NULL, NULL),
	(8, 1, 0, NULL, 'Tester', 'Hub', '6989', '97878', '2019-08-14', 250, 1, 1, NULL, NULL);
/*!40000 ALTER TABLE `equipo` ENABLE KEYS */;

-- Volcando estructura para tabla mesaservicio.equipo_clase
CREATE TABLE IF NOT EXISTS `equipo_clase` (
  `id_equipoclase` int(11) NOT NULL AUTO_INCREMENT,
  `clase` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_equipoclase`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COMMENT='tbla que almacena las clases de quipos';

-- Volcando datos para la tabla mesaservicio.equipo_clase: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `equipo_clase` DISABLE KEYS */;
REPLACE INTO `equipo_clase` (`id_equipoclase`, `clase`) VALUES
	(1, 'Cómputo.'),
	(3, 'Red.');
/*!40000 ALTER TABLE `equipo_clase` ENABLE KEYS */;

-- Volcando estructura para tabla mesaservicio.equipo_tipo
CREATE TABLE IF NOT EXISTS `equipo_tipo` (
  `id_tipoequipo` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_tipoequipo`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COMMENT='Tabla que almacena los tipos de equipo';

-- Volcando datos para la tabla mesaservicio.equipo_tipo: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `equipo_tipo` DISABLE KEYS */;
REPLACE INTO `equipo_tipo` (`id_tipoequipo`, `tipo`) VALUES
	(1, 'Computadora'),
	(2, 'Servidor'),
	(3, 'Impresora 3d');
/*!40000 ALTER TABLE `equipo_tipo` ENABLE KEYS */;

-- Volcando estructura para tabla mesaservicio.estatus
CREATE TABLE IF NOT EXISTS `estatus` (
  `id_estatus` int(11) NOT NULL AUTO_INCREMENT,
  `estatus` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_estatus`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COMMENT='Tabla que guarda los estatus';

-- Volcando datos para la tabla mesaservicio.estatus: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `estatus` DISABLE KEYS */;
REPLACE INTO `estatus` (`id_estatus`, `estatus`) VALUES
	(1, 'Turnado'),
	(2, 'En proceso'),
	(3, 'Concluido');
/*!40000 ALTER TABLE `estatus` ENABLE KEYS */;

-- Volcando estructura para tabla mesaservicio.resguardo
CREATE TABLE IF NOT EXISTS `resguardo` (
  `id_resguardo` int(11) NOT NULL AUTO_INCREMENT,
  `id_equipo` int(11) DEFAULT NULL,
  `equipo` varchar(50) DEFAULT NULL,
  `id_empleado` int(11) DEFAULT NULL,
  `empleado` varchar(50) DEFAULT NULL,
  `fecharesguardo` date DEFAULT NULL,
  PRIMARY KEY (`id_resguardo`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COMMENT='tabla que almacena los rsguardos';

-- Volcando datos para la tabla mesaservicio.resguardo: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `resguardo` DISABLE KEYS */;
REPLACE INTO `resguardo` (`id_resguardo`, `id_equipo`, `equipo`, `id_empleado`, `empleado`, `fecharesguardo`) VALUES
	(1, NULL, 'Computadora', NULL, 'Ismael Garcia', '2019-08-13'),
	(3, NULL, 'Impresora lasser', NULL, 'Antonino Ojeda de la Fuente', '2019-08-13');
/*!40000 ALTER TABLE `resguardo` ENABLE KEYS */;

-- Volcando estructura para tabla mesaservicio.servicio
CREATE TABLE IF NOT EXISTS `servicio` (
  `id_servicio` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) DEFAULT '0',
  `id_tema` int(11) DEFAULT '0',
  `usuario` varchar(100) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `estatus` varchar(50) DEFAULT 'Pendiente',
  PRIMARY KEY (`id_servicio`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1 COMMENT='tabla que almacena los servicos';

-- Volcando datos para la tabla mesaservicio.servicio: ~12 rows (aproximadamente)
/*!40000 ALTER TABLE `servicio` DISABLE KEYS */;
REPLACE INTO `servicio` (`id_servicio`, `id_usuario`, `id_tema`, `usuario`, `descripcion`, `fecha`, `estatus`) VALUES
	(1, 0, 0, 'Pablo Milanez Tovias', 'Sin acceso a internet desde hace una semana.', '2019-08-04 17:35:16', 'Cocluido'),
	(2, 0, 0, 'María Rosado', 'Falla impresora Epson', '2019-08-03 17:37:12', 'Concluido'),
	(3, 0, 0, 'Bertha Grajales López', 'Mi computadora no prende', '2019-08-03 17:38:09', 'Pendiente'),
	(4, 0, 0, 'Rodolfo Arébalo', 'Sin acceso al Compaqi', '2019-08-03 17:39:20', 'Pendiente'),
	(5, 0, 0, 'Saha Ontivares', 'Word no abre, se cierra solo', '2019-08-03 17:40:13', 'Concluido'),
	(6, 0, 0, 'Pablo Milanez xx', 'Sin acceso a internet', '2019-08-03 17:35:16', 'Cocluido'),
	(7, 0, 0, 'Rodrigo de la Rosa', 'El servidor DNS está apagado', '2019-08-03 17:40:13', 'Concluido'),
	(8, 0, 0, 'Heriberto Hernandez', 'Reloj checador fuera de linea', '2019-08-03 17:40:13', 'Pendiente'),
	(9, 0, 0, 'Wendy López', 'Requiero capacitación de excel (tablas dinámicas)', '2019-08-03 17:40:13', 'Concluido'),
	(10, 0, 0, 'Thelma Guadalupe', 'El sitemas de incidencias duplica los registros', '2019-08-03 17:40:13', 'Pendiente'),
	(15, 0, 0, 'Lic. Yolanda Nieto Pereira', 'Se requiere asesoría sobre el sistema de mesa de servicio', '2019-08-04 21:35:59', 'Pendiente'),
	(16, 0, 0, 'Francisco Turrubiates Ojeda', 'El servidor de Compaqi no esta en línea....', '2019-08-04 21:40:37', 'Pendiente');
/*!40000 ALTER TABLE `servicio` ENABLE KEYS */;

-- Volcando estructura para tabla mesaservicio.tipo_usuario
CREATE TABLE IF NOT EXISTS `tipo_usuario` (
  `id_tipousuario` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(50) NOT NULL,
  PRIMARY KEY (`id_tipousuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabla que almacena los tipos de usuario';

-- Volcando datos para la tabla mesaservicio.tipo_usuario: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tipo_usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipo_usuario` ENABLE KEYS */;

-- Volcando estructura para tabla mesaservicio.unidadadministrativa
CREATE TABLE IF NOT EXISTS `unidadadministrativa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_dependencia` int(11) DEFAULT NULL,
  `nombre` varchar(50) NOT NULL,
  `titular` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_dependencia` (`id_dependencia`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COMMENT='Tabla que almacerá las unidades administrativas pertenecientes a una dependencia del gobierno';

-- Volcando datos para la tabla mesaservicio.unidadadministrativa: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `unidadadministrativa` DISABLE KEYS */;
REPLACE INTO `unidadadministrativa` (`id`, `id_dependencia`, `nombre`, `titular`) VALUES
	(1, 0, 'Despacho del C. Secretario', 'Lic. Carlos Ríos Fajardo'),
	(2, 0, 'Subsecretaría Técnica.', 'Aldo Paniagua.');
/*!40000 ALTER TABLE `unidadadministrativa` ENABLE KEYS */;

-- Volcando estructura para tabla mesaservicio.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido_p` varchar(50) DEFAULT NULL,
  `apellido_m` varchar(50) DEFAULT NULL,
  `adscripcion` varchar(50) DEFAULT NULL,
  `tipousuario` int(11) DEFAULT NULL,
  KEY `id_usuario` (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COMMENT='tabla que almacenará los usuarios';

-- Volcando datos para la tabla mesaservicio.usuario: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
REPLACE INTO `usuario` (`id_usuario`, `usuario`, `password`, `email`, `nombre`, `apellido_p`, `apellido_m`, `adscripcion`, `tipousuario`) VALUES
	(1, 'ismael4', '123456789', 'ismael.garcia212289@gmail.com', 'garcia', 'García', 'Hernández', '1', 1),
	(2, 'Mary', 'Rosado', 'mary@hotmail', 'Molina', 'Rosado', 'asasa', '1', 2),
	(3, 'Rodri', 'rodri123', 'rodri@hotmail.com', 'Rodrigo', 'De la Rosa', 'Flores', '2', 1);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
