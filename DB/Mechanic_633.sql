-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 14-07-2019 a las 05:25:03
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `Mechanic_633`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `abono`
--

CREATE TABLE `abono` (
  `Id_abono` int(11) NOT NULL,
  `Fecha_abono` date NOT NULL,
  `Responsable` varchar(20) NOT NULL,
  `Cantidad` float NOT NULL,
  `Cuenta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `abono`
--

INSERT INTO `abono` (`Id_abono`, `Fecha_abono`, `Responsable`, `Cantidad`, `Cuenta`) VALUES
(1, '2019-07-03', 'Kevin', 125, 1),
(2, '2019-07-04', 'Alex', 250, 1),
(5, '2019-07-12', 'Alex', 250, 1),
(6, '2019-07-12', 'Alex', 250, 1),
(7, '2019-07-12', 'Kevin', 125, 1);

--
-- Disparadores `abono`
--
DELIMITER $$
CREATE TRIGGER `tr_abonar` AFTER INSERT ON `abono` FOR EACH ROW UPDATE cuenta SET Saldo=(new.Cantidad+Saldo) WHERE Id_cuenta = 1
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `Id_compra` int(11) NOT NULL,
  `Fecha_compra` varchar(10) NOT NULL,
  `Monto_compra` float NOT NULL,
  `Descripcion` text NOT NULL,
  `Proveedor` varchar(45) NOT NULL,
  `No_factura` int(11) NOT NULL,
  `Foto_factura` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`Id_compra`, `Fecha_compra`, `Monto_compra`, `Descripcion`, `Proveedor`, `No_factura`, `Foto_factura`) VALUES
(1, '2019-06-26', 12, 'prueba de insertar datos', 'Jonathan Josue', 1, 'compras/'),
(2, '2019-06-26', 12, 'polea', 'Jorge', 45, 'compras/rams.jpg'),
(3, '2019-07-04', 20, '4 angulos 1 1/2"', 'Galvanissa', 12345, 'compras/Sin nombre.png'),
(4, '', 0, '', '', 0, 'compras/'),
(5, '', 0, '', '', 0, 'compras/'),
(6, '', 0, '', '', 0, 'compras/'),
(7, '', 0, '', '', 0, 'compras/');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuenta`
--

CREATE TABLE `cuenta` (
  `Id_cuenta` int(11) NOT NULL,
  `No_cuenta` int(11) NOT NULL,
  `Banco` varchar(20) NOT NULL,
  `Saldo` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cuenta`
--

INSERT INTO `cuenta` (`Id_cuenta`, `No_cuenta`, `Banco`, `Saldo`) VALUES
(1, 1345698, 'Prueba', 375);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `Id_empleado` int(11) NOT NULL,
  `Nombres` varchar(25) NOT NULL,
  `Apellidos` varchar(25) NOT NULL,
  `Cargo` varchar(15) NOT NULL,
  `Salario` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`Id_empleado`, `Nombres`, `Apellidos`, `Cargo`, `Salario`) VALUES
(1, 'Alexander', 'Carranza', 'Encargado', 500),
(2, 'Kevin David', 'Martinez Fuentes', 'Administrador', 200),
(3, 'Juan Armando', 'Menendez', 'Tornero', 350),
(4, 'Jose Daniel', 'Alvarenga', 'Soldador', 300);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gap`
--

CREATE TABLE `gap` (
  `Id_gap` int(11) NOT NULL,
  `Mes` varchar(15) NOT NULL,
  `Ventas_id` int(11) NOT NULL,
  `Compras_id` int(11) NOT NULL,
  `Pagos_id` int(11) NOT NULL,
  `Total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE `pagos` (
  `Id_pago` int(11) NOT NULL,
  `mes` varchar(10) NOT NULL,
  `año` int(11) NOT NULL,
  `Planillas` int(11) DEFAULT NULL,
  `Energía` float NOT NULL,
  `Agua` float NOT NULL,
  `Establecimiento` float NOT NULL,
  `Otros` float NOT NULL,
  `Total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pagos`
--

INSERT INTO `pagos` (`Id_pago`, `mes`, `año`, `Planillas`, `Energía`, `Agua`, `Establecimiento`, `Otros`, `Total`) VALUES
(3, '6', 2019, 2038, 17, 10, 100, 0, 2165);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planilla`
--

CREATE TABLE `planilla` (
  `Id_planilla` int(11) NOT NULL,
  `Empleado_id` int(11) NOT NULL,
  `Mes_correspondiente` int(11) NOT NULL,
  `Fecha_pago` varchar(10) NOT NULL,
  `Detalle` int(11) NOT NULL,
  `AFP` int(11) NOT NULL,
  `ISSS` int(11) NOT NULL,
  `Bonos` int(11) NOT NULL,
  `Descuentos` int(11) NOT NULL,
  `Total_descuentos` float NOT NULL,
  `Total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `planilla`
--

INSERT INTO `planilla` (`Id_planilla`, `Empleado_id`, `Mes_correspondiente`, `Fecha_pago`, `Detalle`, `AFP`, `ISSS`, `Bonos`, `Descuentos`, `Total_descuentos`, `Total`) VALUES
(6, 1, 6, '2019-06-29', 500, 0, 0, 0, 0, 0, 500),
(7, 2, 6, '2019-06-29', 200, 0, 0, 0, 0, 0, 200),
(8, 3, 6, '2019-06-29', 350, 0, 0, 25, 0, 0, 375),
(9, 4, 6, '2019-06-29', 300, 0, 0, 0, 0, 0, 300),
(10, 1, 6, '2019-07-15', 500, 0, 0, 250, 88, 87.5, 663);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `Id_rol` int(11) NOT NULL,
  `Rol` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`Id_rol`, `Rol`) VALUES
(1, 'Administrador'),
(2, 'Operador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuario`
--

CREATE TABLE `Usuario` (
  `Id_usuario` int(11) NOT NULL,
  `Nombre` varchar(6) NOT NULL,
  `Rol_id` int(11) NOT NULL,
  `Pass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Usuario`
--

INSERT INTO `Usuario` (`Id_usuario`, `Nombre`, `Rol_id`, `Pass`) VALUES
(1, 'Halton', 1, 'Mateo633');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Ventas`
--

CREATE TABLE `Ventas` (
  `Id_venta` int(11) NOT NULL,
  `Fecha_venta` varchar(10) NOT NULL,
  `Monto_venta` float NOT NULL,
  `Descripcion` text NOT NULL,
  `Cliente` varchar(45) NOT NULL,
  `No_factura` int(11) NOT NULL,
  `Foto_factura` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Ventas`
--

INSERT INTO `Ventas` (`Id_venta`, `Fecha_venta`, `Monto_venta`, `Descripcion`, `Cliente`, `No_factura`, `Foto_factura`) VALUES
(7, '2019-06-25', 45, 'Pieza de picadora', 'Javier', 1, 'upload/53856532_406686133211917_2151637581454901248_n.jpg'),
(8, '2019-06-18', 56, 'Pieza de picadora dos', 'Javier', 12, 'upload/keffo.png'),
(9, '2019-06-25', 36, 'Pieza de picadora', 'Javier', 1, 'upload/keffosmall.png'),
(10, '2019-06-25', 15, 'polea', 'aldo', 1, 'upload/267464-werecat.jpg'),
(11, '2019-06-26', 65, 'Cerdo Raciones, costillas', 'aldo', 1, 'upload/9c7ed53a-4c2f-4e08-be67-95057c2e5fe0.jpg'),
(12, '2019-06-26', 36, 'Cerdo Raciones, costillas, $7.69', 'halton', 45, 'upload/81d132fc-6fe8-4567-8a04-28c887a72a59.jpg'),
(13, '2019-07-04', 45, 'eje de picadora', 'Omar', 32568, 'upload/keffosmall.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `abono`
--
ALTER TABLE `abono`
  ADD PRIMARY KEY (`Id_abono`),
  ADD KEY `Cuenta` (`Cuenta`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`Id_compra`);

--
-- Indices de la tabla `cuenta`
--
ALTER TABLE `cuenta`
  ADD PRIMARY KEY (`Id_cuenta`),
  ADD UNIQUE KEY `No_cuenta` (`No_cuenta`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`Id_empleado`);

--
-- Indices de la tabla `gap`
--
ALTER TABLE `gap`
  ADD PRIMARY KEY (`Id_gap`),
  ADD KEY `Pagos_id` (`Pagos_id`),
  ADD KEY `Compras_id` (`Compras_id`),
  ADD KEY `Ventas_id` (`Ventas_id`);

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`Id_pago`),
  ADD UNIQUE KEY `mes` (`mes`),
  ADD KEY `Planillas` (`Planillas`);

--
-- Indices de la tabla `planilla`
--
ALTER TABLE `planilla`
  ADD PRIMARY KEY (`Id_planilla`),
  ADD KEY `Empleado_id` (`Empleado_id`),
  ADD KEY `Empleado_id_2` (`Empleado_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`Id_rol`);

--
-- Indices de la tabla `Usuario`
--
ALTER TABLE `Usuario`
  ADD PRIMARY KEY (`Id_usuario`),
  ADD KEY `Rol_id` (`Rol_id`),
  ADD KEY `Rol_id_2` (`Rol_id`);

--
-- Indices de la tabla `Ventas`
--
ALTER TABLE `Ventas`
  ADD PRIMARY KEY (`Id_venta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `abono`
--
ALTER TABLE `abono`
  MODIFY `Id_abono` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `Id_compra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `cuenta`
--
ALTER TABLE `cuenta`
  MODIFY `Id_cuenta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `Id_empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `gap`
--
ALTER TABLE `gap`
  MODIFY `Id_gap` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `Id_pago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `planilla`
--
ALTER TABLE `planilla`
  MODIFY `Id_planilla` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `Id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `Usuario`
--
ALTER TABLE `Usuario`
  MODIFY `Id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `Ventas`
--
ALTER TABLE `Ventas`
  MODIFY `Id_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `abono`
--
ALTER TABLE `abono`
  ADD CONSTRAINT `abono_ibfk_1` FOREIGN KEY (`Cuenta`) REFERENCES `cuenta` (`Id_cuenta`);

--
-- Filtros para la tabla `gap`
--
ALTER TABLE `gap`
  ADD CONSTRAINT `gap_ibfk_1` FOREIGN KEY (`Ventas_id`) REFERENCES `Ventas` (`Id_venta`),
  ADD CONSTRAINT `gap_ibfk_2` FOREIGN KEY (`Compras_id`) REFERENCES `compras` (`Id_compra`),
  ADD CONSTRAINT `gap_ibfk_3` FOREIGN KEY (`Pagos_id`) REFERENCES `pagos` (`Id_pago`);

--
-- Filtros para la tabla `planilla`
--
ALTER TABLE `planilla`
  ADD CONSTRAINT `planilla_ibfk_1` FOREIGN KEY (`Empleado_id`) REFERENCES `empleado` (`Id_empleado`);

--
-- Filtros para la tabla `Usuario`
--
ALTER TABLE `Usuario`
  ADD CONSTRAINT `Usuario_ibfk_1` FOREIGN KEY (`Rol_id`) REFERENCES `roles` (`Id_rol`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
