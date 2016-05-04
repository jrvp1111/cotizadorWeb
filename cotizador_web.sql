-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-05-2016 a las 02:42:33
-- Versión del servidor: 10.1.8-MariaDB
-- Versión de PHP: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cotizador_web`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cte` int(11) NOT NULL,
  `comp_cte` varchar(100) NOT NULL,
  `nombcomer_cte` varchar(100) NOT NULL,
  `tel_cte` varchar(50) NOT NULL,
  `dir_cte` varchar(100) NOT NULL,
  `ciud_cte` varchar(100) NOT NULL,
  `edo_cte` varchar(100) NOT NULL,
  `fecha_cte` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cte`, `comp_cte`, `nombcomer_cte`, `tel_cte`, `dir_cte`, `ciud_cte`, `edo_cte`, `fecha_cte`) VALUES
(1, 'Casa Ley S.A. De C.V.', 'Casa Ley', '(667) 759 1000', 'Carretera Internacional Km 1434 Col. Infonavit Humaya C.P. 80020', 'CuliacÃ¡n', 'Sinaloa', '2016-04-12'),
(2, 'productos chata sa de cv', 'chata', '754512', 'Bachigualato', 'Culiacan', 'Sinaloa', '2016-04-25'),
(3, 'Sukarne Agroindustrial SA DE CV', 'Sukarne', '795454', 'La primaver', 'Culiacan', 'Sinaloa', '2016-04-25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizaciones`
--

CREATE TABLE `cotizaciones` (
  `id_cotizacion` int(11) NOT NULL,
  `cant_cot` int(11) NOT NULL,
  `fecha_cotizacion` datetime NOT NULL,
  `email` varchar(30) NOT NULL,
  `condiciones` varchar(30) NOT NULL,
  `validez` varchar(20) NOT NULL,
  `entrega` varchar(20) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cotizaciones`
--

INSERT INTO `cotizaciones` (`id_cotizacion`, `cant_cot`, `fecha_cotizacion`, `email`, `condiciones`, `validez`, `entrega`, `id_cliente`, `id_producto`) VALUES
(0, 2, '2016-04-25 00:00:00', 'jrvp11@hotmail.com', 'credito', '30 dias', '5 dias', 1, 4),
(3, 1, '2016-04-25 00:00:00', 'asdasd', 'asdsad', 'asdas', 'asdasd', 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `id_mca` int(11) NOT NULL,
  `nomb_mca` varchar(100) NOT NULL,
  `origen_mca` varchar(50) NOT NULL,
  `prov_mca` varchar(100) NOT NULL,
  `tel_mca` varchar(20) NOT NULL,
  `nota_mca` varchar(100) NOT NULL,
  `fecha_reg` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id_mca`, `nomb_mca`, `origen_mca`, `prov_mca`, `tel_mca`, `nota_mca`, `fecha_reg`) VALUES
(29, 'Deltatrak', 'Nacional', 'Deltatrak International Mexico', '7373737373', 'eejjjej', '2016-04-11'),
(31, 'Extruflex', 'ImportaciÃ³n', '', '', '', '2016-04-11'),
(32, 'Taylor', 'Nacional', '', '', '', '2016-04-12'),
(33, 'Extech', 'Nacional', '', '', '', '2016-04-12'),
(34, 'Escort Ilog', 'ImportaciÃ³n', '', '', '', '2016-04-14'),
(37, 'Dare', 'ImportaciÃ³n', 'Dare Products Inc', '888', 'Atn: Bob', '2016-04-17'),
(38, 'Dosatron', 'ImportaciÃ³n', 'Dosatron', '77777777', 'asdadsasd', '2016-04-18'),
(40, 'GLA', 'ImportaciÃ³n', 'GLA Agricultural', '8000 ', 'atn john', '2016-05-03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `portalley`
--

CREATE TABLE `portalley` (
  `id_port_ley` int(11) NOT NULL,
  `fecha_factley` date NOT NULL,
  `emp_ley` varchar(50) NOT NULL,
  `num_fact_ley` int(11) NOT NULL,
  `ord_comp_ley` varchar(50) NOT NULL,
  `tipo_de_compra` varchar(40) NOT NULL,
  `tien_carg_ley` int(11) NOT NULL,
  `nomb_tiend_ley` varchar(50) NOT NULL,
  `num_entr_ley` int(11) NOT NULL,
  `fech_entr_ley` date NOT NULL,
  `nomb_recibio` varchar(40) NOT NULL,
  `num_rem_ley` int(11) NOT NULL,
  `arriv_port_ley` text NOT NULL,
  `fecha_reg_fact` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `portalley`
--

INSERT INTO `portalley` (`id_port_ley`, `fecha_factley`, `emp_ley`, `num_fact_ley`, `ord_comp_ley`, `tipo_de_compra`, `tien_carg_ley`, `nomb_tiend_ley`, `num_entr_ley`, `fech_entr_ley`, `nomb_recibio`, `num_rem_ley`, `arriv_port_ley`, `fecha_reg_fact`) VALUES
(9, '2016-04-11', 'Casa Ley', 3836, '600335170', 'Servicios', 4239, 'Trafico Hermosillo', 0, '0000-00-00', 'karla', 0, 'Subida', '2016-04-30'),
(12, '2016-04-11', 'Casa Ley', 3834, '8003037495', 'Mercaderia', 4104, 'Escuinapa', 10001113, '2016-04-13', 'Armando Leal', 0, 'Subida', '2016-04-30'),
(13, '2016-04-13', 'Casa Ley', 3847, '8003063781', 'Mercaderia', 4104, 'Santa Anita', 10001116, '2016-04-13', 'Armando Leal', 0, 'Subida', '2016-04-30'),
(14, '2016-04-18', 'Casa Ley', 3874, '8003070272', 'Mercaderia', 4104, 'Cajeme', 10001168, '0000-00-00', 'Armando Leal', 0, 'Subida', '2016-04-30'),
(15, '2016-04-30', 'Casa Ley', 3937, '6000338242', 'Servicios', 1137, 'Express Sanalona', 0, '0000-00-00', '', 0, 'Pendiente', '2016-05-02'),
(16, '2016-05-03', 'Casa Ley', 3951, '6000339166', 'Servicios', 4239, 'Trafico Hermosillo', 0, '2016-05-03', '', 0, 'Pendiente', '2016-05-04'),
(17, '2016-04-29', 'Casa Ley', 3936, '6000338506', 'Servicios', 4239, 'Trafico Hermosillo', 0, '0000-00-00', 'Paquete Express', 0, 'Pendiente', '2016-05-04'),
(18, '2016-04-11', 'Casa Ley', 3835, '8003057140', 'Mercaderia', 4104, 'Jiquilpan', 10001114, '2016-04-13', 'Armando Leal', 0, 'Subida', '2016-05-04'),
(19, '2016-04-28', 'Centros Comerciales', 3924, '5100026561', 'Activos Fijos', 1295, 'Cerro Colorado', 0, '0000-00-00', '', 0, 'Pendiente', '2016-05-04'),
(20, '2016-04-28', 'Casa Ley', 3921, '8003109965', 'Mercaderia', 4104, 'Super Ley 2000', 0, '0000-00-00', '', 0, 'Pendiente', '2016-05-04'),
(21, '2016-04-27', 'Casa Ley', 3919, '8003103053', 'Mercaderia', 4104, 'La Gloria', 0, '0000-00-00', '', 0, 'Pendiente', '2016-05-04'),
(22, '2016-04-27', 'Casa Ley', 3918, '8003096387', 'Mercaderia', 4104, 'Plaza El Dorado', 0, '0000-00-00', '', 0, 'Pendiente', '2016-05-04'),
(23, '2016-04-25', 'Casa Ley', 3915, '6000337557', 'Servicios', 4239, 'Trafico Hermosillo', 0, '0000-00-00', '', 0, 'Pendiente', '2016-05-04'),
(24, '2016-04-19', 'Casa Ley', 3888, '6000336707', 'Servicios', 4239, 'Trafico Hermosillo', 0, '0000-00-00', '', 0, 'Pendiente', '2016-05-04'),
(25, '2016-04-22', 'Casa Ley', 3903, '6000337101', 'Servicios', 4011, 'Bodega de Frutas', 0, '0000-00-00', '', 0, 'Subida', '2016-05-04'),
(26, '2016-04-20', 'Casa Ley', 3896, '6000335157', 'Servicios', 1056, 'Humaya', 0, '0000-00-00', '', 0, 'Subida', '2016-05-04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_prod` int(11) NOT NULL,
  `nomb_prod` varchar(100) NOT NULL,
  `desc_prod` varchar(100) NOT NULL,
  `mca_prod` varchar(100) NOT NULL,
  `origen_prod` varchar(20) NOT NULL,
  `edo_prod` varchar(15) NOT NULL,
  `nota_prod` varchar(150) NOT NULL,
  `cost_prod` float NOT NULL,
  `util_prod` float NOT NULL,
  `prec_prod` float NOT NULL,
  `prec_rec` float NOT NULL,
  `fecha_prod` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_prod`, `nomb_prod`, `desc_prod`, `mca_prod`, `origen_prod`, `edo_prod`, `nota_prod`, `cost_prod`, `util_prod`, `prec_prod`, `prec_rec`, `fecha_prod`) VALUES
(1, '16100', 'Graficador Desechable', 'Deltatrak', 'Nacional', 'Activo', 'se usa en los cuartos frios', 100, 30, 130, 1354, '2016-04-11'),
(4, '365510', 'Cronometro digital', 'Extech', 'Nacional', 'Activo', 'se usa en plantas de proceso', 200, 50, 300, 350, '2016-04-12'),
(8, '11050', 'Termometro tipo paleta', 'Deltatrak', 'Nacional', 'Activo', 'aaaaa', 400, 50, 600, 650, '2016-04-15'),
(10, '20901', 'Graficador reusable usb', 'Deltatrak', 'Nacional', 'Activo', 'grafica temperatura', 1000, 30, 1300, 1400, '2016-04-17'),
(11, '1523', 'Termometro digital', 'Avaly', 'Nacional', 'Inactivo', 'sss', 100, 20, 120, 222, '2016-04-17'),
(12, '62Max', 'Termometro infrarrojo digital', 'Fluke', 'Nacional', 'Activo', 'uso de lejos', 100, 200, 300, 350, '2016-04-17'),
(14, 'aaaaaa', 'aaaaaaa', 'Extech', 'Nacional', 'Activo', 'adaa', 100, 20, 120, 2332, '2016-04-17'),
(15, 'D25RE2', 'Dosificador', 'Dosatron', 'ImportaciÃ³n', 'Activo', 'uso avicola', 228, 20, 273.6, 280, '2016-04-18'),
(16, 'm750', 'termometro', 'GLA', 'ImportaciÃ³n', 'Activo', 'asdd', 100, 15, 115, 120, '2016-05-03');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cte`);

--
-- Indices de la tabla `cotizaciones`
--
ALTER TABLE `cotizaciones`
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id_mca`);

--
-- Indices de la tabla `portalley`
--
ALTER TABLE `portalley`
  ADD PRIMARY KEY (`id_port_ley`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_prod`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id_mca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT de la tabla `portalley`
--
ALTER TABLE `portalley`
  MODIFY `id_port_ley` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_prod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
