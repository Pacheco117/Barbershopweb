-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.25-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.3.0.6589
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para barbershopweb
CREATE DATABASE IF NOT EXISTS `barbershopweb` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `barbershopweb`;

-- Volcando estructura para tabla barbershopweb.citas
CREATE TABLE IF NOT EXISTS `citas` (
  `N_Cita` int(11) NOT NULL AUTO_INCREMENT,
  `Telefono` int(10) DEFAULT NULL,
  `NServicio` int(11) DEFAULT NULL,
  `ID_Hora` int(11) DEFAULT NULL,
  `ID_Fecha` int(11) DEFAULT NULL,
  `estadocitaFK` int(11) DEFAULT NULL,
  PRIMARY KEY (`N_Cita`),
  UNIQUE KEY `Telefono` (`Telefono`,`NServicio`,`ID_Hora`,`ID_Fecha`,`estadocitaFK`),
  KEY `NServicio` (`NServicio`),
  KEY `ID_Hora` (`ID_Hora`),
  KEY `ID_Fecha` (`ID_Fecha`),
  KEY `estadocitaFK` (`estadocitaFK`),
  CONSTRAINT `citas_ibfk_1` FOREIGN KEY (`NServicio`) REFERENCES `servicios` (`Nservicio`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `citas_ibfk_2` FOREIGN KEY (`ID_Hora`) REFERENCES `horas` (`ID_Hora`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `citas_ibfk_3` FOREIGN KEY (`ID_Fecha`) REFERENCES `fechas` (`ID-Fecha`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `citas_ibfk_4` FOREIGN KEY (`Telefono`) REFERENCES `clientes` (`Telefono`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `citas_ibfk_5` FOREIGN KEY (`estadocitaFK`) REFERENCES `estadocita` (`ID-Est`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COMMENT='Tabla que guarda las citas agendadas';

-- Volcando datos para la tabla barbershopweb.citas: ~1 rows (aproximadamente)
INSERT INTO `citas` (`N_Cita`, `Telefono`, `NServicio`, `ID_Hora`, `ID_Fecha`, `estadocitaFK`) VALUES
	(1, 2147483647, 3, 18, 1, 1);

-- Volcando estructura para tabla barbershopweb.clientes
CREATE TABLE IF NOT EXISTS `clientes` (
  `Telefono` int(10) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `ApellidoP` varchar(50) DEFAULT NULL,
  `ApellidoM` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Telefono`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='La tabla que guarda los datos de nuestros clientes';

-- Volcando datos para la tabla barbershopweb.clientes: ~3 rows (aproximadamente)
INSERT INTO `clientes` (`Telefono`, `Nombre`, `ApellidoP`, `ApellidoM`) VALUES
	(1234567890, 'juanito', 'prada', 'channel'),
	(2123212321, 'pedrito', 'perez', 'nuñes'),
	(2147483647, 'Juan', 'Juarez', 'Perez');

-- Volcando estructura para tabla barbershopweb.estadocita
CREATE TABLE IF NOT EXISTS `estadocita` (
  `ID-Est` int(11) NOT NULL AUTO_INCREMENT,
  `Est` varchar(50) NOT NULL DEFAULT 'Pendiente',
  PRIMARY KEY (`ID-Est`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla barbershopweb.estadocita: ~3 rows (aproximadamente)
INSERT INTO `estadocita` (`ID-Est`, `Est`) VALUES
	(1, 'Pendiente'),
	(2, 'Completada'),
	(3, 'Cancelada');

-- Volcando estructura para tabla barbershopweb.fechas
CREATE TABLE IF NOT EXISTS `fechas` (
  `ID-Fecha` int(11) NOT NULL AUTO_INCREMENT,
  `Fecha` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID-Fecha`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COMMENT='Aqui se guardan cada una de las fechas que se registran en la tabla de clientes';

-- Volcando datos para la tabla barbershopweb.fechas: ~1 rows (aproximadamente)
INSERT INTO `fechas` (`ID-Fecha`, `Fecha`) VALUES
	(1, '2022/12/06');

-- Volcando estructura para tabla barbershopweb.horas
CREATE TABLE IF NOT EXISTS `horas` (
  `ID_Hora` int(11) NOT NULL AUTO_INCREMENT,
  `Hora` time DEFAULT NULL,
  PRIMARY KEY (`ID_Hora`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COMMENT='Las horas que están disponibles para reservar';

-- Volcando datos para la tabla barbershopweb.horas: ~24 rows (aproximadamente)
INSERT INTO `horas` (`ID_Hora`, `Hora`) VALUES
	(1, '10:00:00'),
	(2, '10:30:00'),
	(3, '11:00:00'),
	(4, '11:30:00'),
	(5, '12:00:00'),
	(6, '12:30:00'),
	(7, '13:00:00'),
	(8, '13:30:00'),
	(9, '14:00:00'),
	(10, '14:30:00'),
	(11, '15:00:00'),
	(12, '15:30:00'),
	(13, '16:00:00'),
	(14, '16:30:00'),
	(15, '17:00:00'),
	(16, '17:30:00'),
	(17, '18:00:00'),
	(18, '18:30:00'),
	(19, '19:00:00'),
	(20, '19:30:00'),
	(21, '19:00:00'),
	(22, '19:30:00'),
	(23, '20:00:00'),
	(24, '20:30:00');

-- Volcando estructura para tabla barbershopweb.servicios
CREATE TABLE IF NOT EXISTS `servicios` (
  `Nservicio` int(11) NOT NULL AUTO_INCREMENT,
  `Servicio` varchar(50) DEFAULT NULL,
  `Precio` int(11) DEFAULT NULL,
  PRIMARY KEY (`Nservicio`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COMMENT='Los tipos de cortes que se realizan en la barberia';

-- Volcando datos para la tabla barbershopweb.servicios: ~5 rows (aproximadamente)
INSERT INTO `servicios` (`Nservicio`, `Servicio`, `Precio`) VALUES
	(1, 'Corte de barba', 130),
	(2, 'Corte niño', 50),
	(3, 'Corte Adulto', 100),
	(4, 'black mask', 30),
	(5, 'depilado ceja', 30);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
