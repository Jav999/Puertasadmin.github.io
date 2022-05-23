-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-05-2021 a las 20:51:15
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyprogramacion`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertarNuevoCliente` (IN `numeroID` VARCHAR(15), IN `nombre` VARCHAR(45), IN `ciudadOrigen` VARCHAR(25), IN `cel` INT(11), IN `rfcc` VARCHAR(30))  BEGIN
    insert into cliente(IDCliente, Nombre_Cliente, Ciudad, Telefono, RFC) values (numeroID, nombre,ciudadOrigen, cel, rfcc);
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `IDCliente` varchar(15) NOT NULL,
  `Nombre_Cliente` varchar(45) DEFAULT NULL,
  `Ciudad` varchar(25) DEFAULT NULL,
  `Telefono` varchar(15) DEFAULT NULL,
  `RFC` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`IDCliente`, `Nombre_Cliente`, `Ciudad`, `Telefono`, `RFC`) VALUES
('1', 'Orlando Javier Peralta Dominguez', 'Ensenada', '646 131 41 44', 'PEDJ1283721JR'),
('2', 'Eduardo Peira Duarez', 'Ensenada', '646 121 07 97', 'KK25KK00KK96KK'),
('3', 'Yatziry Torres', 'Dubai', '6462085647', 'GARMA204517QER'),
('4', 'Vicente Javier Peralta Espinoza', 'Ensenada', '646 127 26 24', 'AA123AA123AA123'),
('5', 'Kenia Gonzalez', 'Mexicali', '646 147 85 69', 'KK25KK00KK96KK'),
('6', 'Luis Suarez', 'Bogota', '668 159 75 32', 'QQ78QQ96QQ65'),
('7', 'Guadalupe Mendoza', 'Rosarito', '661 456 25 36', 'ZZ55ZZ66ZZ11');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `clientes_sin_info_sensible`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `clientes_sin_info_sensible` (
`IDCliente` varchar(15)
,`Nombre_Cliente` varchar(45)
,`Ciudad` varchar(25)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `IDNombre_Proveedor` varchar(40) NOT NULL,
  `IDProducto` int(11) NOT NULL,
  `Cantidad` int(11) DEFAULT NULL,
  `Costo` int(11) DEFAULT NULL,
  `Fecha` date DEFAULT NULL,
  `Factura` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `compra`
--

INSERT INTO `compra` (`IDNombre_Proveedor`, `IDProducto`, `Cantidad`, `Costo`, `Fecha`, `Factura`) VALUES
('Behr', 3, 50, 25, '2021-03-10', 'cbt003'),
('Maderas El Loco', 1, 100, 750, '2021-02-21', 'ki8772'),
('Sherwin Williams', 4, 4, 250, '2020-11-14', '1120bcc');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `IDProducto` int(11) NOT NULL,
  `Nombre_Producto` varchar(45) DEFAULT NULL,
  `Medida` varchar(20) DEFAULT NULL,
  `Precio` int(11) DEFAULT NULL,
  `Cantidad` int(11) DEFAULT NULL,
  `Punto_Reorden` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`IDProducto`, `Nombre_Producto`, `Medida`, `Precio`, `Cantidad`, `Punto_Reorden`) VALUES
(1, 'Puerta Tambor', '32x80', 750, 100, 20),
(2, 'Puerta Solida', '36x80', 1500, 50, 5),
(3, 'Brocha ', '4\'\'', 25, 50, 10),
(4, 'PinturaCafé0025', '3.78L', 250, 4, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `IDNombre_Proveedor` varchar(40) NOT NULL,
  `Telefono` varchar(15) DEFAULT NULL,
  `Ciudad` varchar(25) DEFAULT NULL,
  `RFC` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`IDNombre_Proveedor`, `Telefono`, `Ciudad`, `RFC`) VALUES
('Aceros Ocotlan', '6641234546', 'Ensenada', 'ACCO2033OP'),
('Behr', '6641058946', 'Mexicali', 'BHMXL88014'),
('Cubylan', '646254946', 'Ensenada', 'ZZ55ZZ66ZZ11'),
('Maderas El Loco', '6647639140', 'Tijuana', 'MALQ00248'),
('Pinturas San Diego', '646 150 90 82', 'Ensenada', 'ABCDEFGHIJKL'),
('Sherwin Williams', '6464602891', 'Ensenada', 'SWMX0075L'),
('Vicente Javier Peralta Espinoza', '661 456 25 36', 'San quintin', 'ZZ55ZZ66ZZ11');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `suma_de_ventas_al_dia_de_hoy`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `suma_de_ventas_al_dia_de_hoy` (
`Sumatoria` decimal(32,0)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `IDCliente` varchar(10) NOT NULL,
  `IDProducto` int(11) NOT NULL,
  `Cantidad` int(11) DEFAULT NULL,
  `Precio` int(11) DEFAULT NULL,
  `Fecha` date DEFAULT NULL,
  `Factura` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`IDCliente`, `IDProducto`, `Cantidad`, `Precio`, `Fecha`, `Factura`) VALUES
('2', 1, 1, 1000, '2021-05-04', '0001A'),
('1', 2, 2, 3600, '2021-05-04', '0002B'),
('3', 3, 100, 25, '2021-05-20', '0003C'),
('3', 3, 100, 25, '2021-05-20', '0004D'),
('4', 2, 35, 1500, '2021-05-31', '0005G'),
('4', 2, 35, 1500, '2021-05-31', '0006G');

-- --------------------------------------------------------

--
-- Estructura para la vista `clientes_sin_info_sensible`
--
DROP TABLE IF EXISTS `clientes_sin_info_sensible`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `clientes_sin_info_sensible`  AS  select `cliente`.`IDCliente` AS `IDCliente`,`cliente`.`Nombre_Cliente` AS `Nombre_Cliente`,`cliente`.`Ciudad` AS `Ciudad` from `cliente` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `suma_de_ventas_al_dia_de_hoy`
--
DROP TABLE IF EXISTS `suma_de_ventas_al_dia_de_hoy`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `suma_de_ventas_al_dia_de_hoy`  AS  select sum(`venta`.`Precio`) AS `Sumatoria` from `venta` where `venta`.`Fecha` = curdate() ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`IDCliente`);

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`IDNombre_Proveedor`,`IDProducto`),
  ADD KEY `fk_Proveedor_has_Inventario_Inventario1_idx` (`IDProducto`),
  ADD KEY `fk_Proveedor_has_Inventario_Proveedor_idx` (`IDNombre_Proveedor`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`IDProducto`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`IDNombre_Proveedor`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`Factura`),
  ADD KEY `fk_Inventario_has_Cliente_Cliente1_idx` (`IDCliente`),
  ADD KEY `fk_Inventario_has_Cliente_Inventario1_idx` (`IDProducto`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `fk_Proveedor_has_Inventario_Inventario1` FOREIGN KEY (`IDProducto`) REFERENCES `inventario` (`IDProducto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Proveedor_has_Inventario_Proveedor` FOREIGN KEY (`IDNombre_Proveedor`) REFERENCES `proveedor` (`IDNombre_Proveedor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `fk_Inventario_has_Cliente_Cliente1` FOREIGN KEY (`IDCliente`) REFERENCES `cliente` (`IDCliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Inventario_has_Cliente_Inventario1` FOREIGN KEY (`IDProducto`) REFERENCES `inventario` (`IDProducto`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
