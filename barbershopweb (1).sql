-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-12-2022 a las 21:56:11
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `barbershopweb`
--
CREATE DATABASE IF NOT EXISTS `barbershopweb` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `barbershopweb`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `N_Cita` int(11) NOT NULL,
  `Telefono` int(11) DEFAULT NULL,
  `NServicio` int(11) DEFAULT NULL,
  `ID_Hora` int(11) DEFAULT NULL,
  `ID_Fecha` int(11) DEFAULT NULL,
  `estadocitaFK` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Tabla que guarda las citas agendadas';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `Telefono` int(11) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `ApellidoP` varchar(50) DEFAULT NULL,
  `ApellidoM` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='La tabla que guarda los datos de nuestros clientes';

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`Telefono`, `Nombre`, `ApellidoP`, `ApellidoM`) VALUES
(2147483647, 'Juan', 'Juarez', 'Perez');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadocita`
--

CREATE TABLE `estadocita` (
  `ID-Est` int(11) NOT NULL,
  `Est` varchar(50) NOT NULL DEFAULT 'Pendiente'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estadocita`
--

INSERT INTO `estadocita` (`ID-Est`, `Est`) VALUES
(1, 'Pendiente'),
(2, 'Completada'),
(3, 'Cancelada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fechas`
--

CREATE TABLE `fechas` (
  `ID-Fecha` int(11) NOT NULL,
  `Fecha` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Aqui se guardan cada una de las fechas que se registran en la tabla de clientes';

--
-- Volcado de datos para la tabla `fechas`
--

INSERT INTO `fechas` (`ID-Fecha`, `Fecha`) VALUES
(1, '2022/12/06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horas`
--

CREATE TABLE `horas` (
  `ID_Hora` int(11) NOT NULL,
  `Hora` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Las horas que están disponibles para reservar';

--
-- Volcado de datos para la tabla `horas`
--

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `Nservicio` int(11) NOT NULL,
  `Servicio` varchar(50) DEFAULT NULL,
  `Precio` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Los tipos de cortes que se realizan en la barberia';

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`Nservicio`, `Servicio`, `Precio`) VALUES
(1, 'Corte de barba', 130),
(2, 'Corte niño', 50),
(3, 'Corte Adulto', 100),
(4, 'black mask', 30),
(5, 'depilado ceja', 30);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`N_Cita`),
  ADD UNIQUE KEY `Telefono` (`Telefono`,`NServicio`,`ID_Hora`,`ID_Fecha`,`estadocitaFK`),
  ADD KEY `NServicio` (`NServicio`),
  ADD KEY `ID_Hora` (`ID_Hora`),
  ADD KEY `ID_Fecha` (`ID_Fecha`),
  ADD KEY `estadocitaFK` (`estadocitaFK`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`Telefono`);

--
-- Indices de la tabla `estadocita`
--
ALTER TABLE `estadocita`
  ADD PRIMARY KEY (`ID-Est`);

--
-- Indices de la tabla `fechas`
--
ALTER TABLE `fechas`
  ADD PRIMARY KEY (`ID-Fecha`);

--
-- Indices de la tabla `horas`
--
ALTER TABLE `horas`
  ADD PRIMARY KEY (`ID_Hora`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`Nservicio`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `N_Cita` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estadocita`
--
ALTER TABLE `estadocita`
  MODIFY `ID-Est` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `fechas`
--
ALTER TABLE `fechas`
  MODIFY `ID-Fecha` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `horas`
--
ALTER TABLE `horas`
  MODIFY `ID_Hora` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `Nservicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `citas`
--
ALTER TABLE `citas`
  ADD CONSTRAINT `citas_ibfk_1` FOREIGN KEY (`NServicio`) REFERENCES `servicios` (`Nservicio`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `citas_ibfk_2` FOREIGN KEY (`ID_Hora`) REFERENCES `horas` (`ID_Hora`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `citas_ibfk_3` FOREIGN KEY (`ID_Fecha`) REFERENCES `fechas` (`ID-Fecha`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `citas_ibfk_4` FOREIGN KEY (`Telefono`) REFERENCES `clientes` (`Telefono`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `citas_ibfk_5` FOREIGN KEY (`estadocitaFK`) REFERENCES `estadocita` (`ID-Est`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
